<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileCreateUpdateRequest;
use App\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {

        $profile = Profile::find($profile )->first();

        $user_data = $profile->user;

        return view('profiles.edit', compact( 'profile', 'user_data' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileCreateUpdateRequest $request, Profile $profile)
    {
        $ext = $request->file('img')->getClientOriginalExtension();

        $path = $request->file('img')
            ->storeAs('public/images', $request->user()->name .'.' . $ext);

        $profile = Profile::find( $profile )->first();

        $profile->img = 'images/' . $request->user()->name .'.' . $ext;

        $profile->save();
    }


    public function update_points(Request $request, Profile $profile)
    {
        $points = $request->points;
        $profile->points = $points;
        $profile->save();
        return redirect()->route('dancers.list');
    }

    public function update_status(Request $request, Profile $profile)
    {
        $profile->status =$request->status;
        $profile->save();
        return redirect()->route('dancers.list');
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
