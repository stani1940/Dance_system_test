<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;
use App\User;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = $request->user_id; // recieved from the single or individual post page
        dd($user_id);
        $rating_count = $request->rating; // this is the rating count
        $user_ip = $request->ip(); // this will get the user ip address

        $rating = Rating::firstOrCreate(['user_id' => $user_id, 'ip' => $user_ip], ['rating_count' => $rating_count]);


        if ($rating->wasRecentlyCreated) {
            //dd(1);
            $message = 'Dancer has Rated successfully';
            return redirect()->route('dancers.list')->with('success',$message);
        } else {
            $message = 'This dancer has already rated';
            //dd(2);
            return redirect()->route('admin.users.index')->with('error',$message);
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( User $user)
    {

        return view('arbiters.create_rating', compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //to do
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
