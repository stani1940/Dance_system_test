<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use Gate;
use App\User;
use App\Rating;
use Illuminate\Http\Request;

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
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
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
    public function show(User $user)
    {
        //dd($user);
        $ratings = Rating::where('user_id',$user->id)->get();
      //  dd($ratings);
        return view('admin.users.single_user', compact('user', 'ratings'));

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

        $rating = Rating::firstOrCreate(
            ['user_id' => $user_id,
                'ip' => $user_ip],
            ['rating_count' => $rating_count,
                'rating_performance' => $rating_performance,
                'rating_artistry' => $rating_artistry
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
