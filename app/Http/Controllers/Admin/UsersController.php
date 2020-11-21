<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use Gate;
use App\User;
use App\Profile;
use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        if ($user->hasRole('admin')){
            $users = User::all();
            return view('admin.users.index')->with('users', $users);
        }
        if ($user->hasRole('arbiter')){
            $users = User::whereHas('roles', function ($q) {
                $q->where('name', 'dancer');
            })->get();

            return view('admin.users.index')->with('users', $users);

        }

    }

    public function create()
    {
        $roles = Role::all();
        return view("admin.users.create")->with(['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $user->roles()->sync($request->roles);
        // $roles = Role::all();
        return redirect()->route('admin.users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function show(User $user, Profile $profile)
    {
        $profile = Profile::find( $profile )->first();
        //dd($user);
       // $id = $user->id;
        $ratings = Rating::where('user_id', $user->id)->get();
        //dd($ratings);
        $arbiter_ids = [];
        $i=0;
        foreach ($ratings as $rating) {
            $arbiter_ids[$i] = $rating->arbiter_id; $i++;
            $tmp[] = array(
                $rating->rating_count + $rating->rating_performance,
                $rating->rating_count + $rating->rating_artistry,
                $rating->rating_performance + $rating->rating_artistry
            );
        }

        //dd($arbiter_ids);
        $max = max(max($tmp));
        $min = min(min($tmp));
        $flag_count = 0;

        foreach ($tmp as $key => $row) {
            if ((in_array($max, $row) || in_array($min, $row))) {
                $tmp[$key][3] = 0;
            } else {
                $tmp[$key][3] = 1;
                $flag_count++;
            }
        }
        $message = '';
        if ($flag_count < 1) {
            $message = 'Не може да се изключат мин мах стойности';
            foreach ($tmp as $key => $row) {
                $tmp[$key][3] = 1;
            }
            $flag_count = count($tmp);
        }

        $total = array(0, 0, 0);
        $i = 0;
        foreach ($ratings as $rating) {
            if ($tmp[$i][3]) {
                $total[0] += $rating->rating_count;
                $total[1] += $rating->rating_performance;
                $total[2] += $rating->rating_artistry;
            }
            $i++;
        }
        foreach ($total as $key => $v) {
            $total[$key] = $v / $flag_count;
        }

        $users = User::all();
        $arbiters = [];
        $j = 1;
        foreach ($arbiter_ids as $arbiter_id)
        {
            foreach($users as $user_id)
            {
                if($user_id->id == $arbiter_id)
                {
                    $arbiters[$j] = $user_id->name;
                    $j++;
                }
            }
        }

        $points = number_format(array_sum($total),2);

        return view('admin.users.single_user', compact('user', 'ratings', 'arbiters', 'tmp', 'total', 'message','profile','points'));


//        function store_points($id, $points)
  //      {
    //        $profile->points = $points;
      //      $profile->save();
        //}

     //   store_points($id,$points);

        //dd($points);
        //dd($arbiters);
    }

    public function edit(User $user)
    {
        if (Gate::denies('edit-users')) {
            return redirect((route('admin.users.index')));
        }
        $roles = Role::all();
        return view('admin.users.edit')->with([
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // dd($request);
        $user->roles()->sync($request->roles);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Gate::denies('delete-users')) {
            return redirect((route('admin.users.index')));
        }
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.index');
    }

    public function create_rating(User $user)
    {
        return view('arbiters.create_rating', compact('user'));
    }

    public function rating(Request $request)
    {
        $user_id = $request->user_id; // recieved from the single or individual post page
        $rating_count = $request->rating_technique; // this is the rating count
        $rating_performance = $request->rating_performance;
        $rating_artistry = $request->rating_artistry;
        $user_ip = $request->ip(); // this will get the user ip address
        $arbiter_id = Auth::user()->id;

        $rating = Rating::create(
            ['user_id' => $user_id,
                'ip' => $user_ip,
            'rating_count' => $rating_count,
                'rating_performance' => $rating_performance,
                'rating_artistry' => $rating_artistry,
                'arbiter_id' => $arbiter_id,
            ]);


        if ($rating->wasRecentlyCreated) {
            //dd(1);
            $message = 'Dancer has Rated successfully';
            return redirect()->route('dancers.list')->with('success', $message);
        } else {
            $message = 'This dancer has already rated';
            //dd(2);
            return redirect()->route('admin.users.index')->with('error', $message);
        }


    }
}
