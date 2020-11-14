<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user =Auth::user()->id;
        //dd($user);
        $profile = Profile::with('user')->find($user);
       // dd($profile);

        return view('home',compact('profile'));
    }

    public function showDancers()
    {
        $dancers = User::whereHas('roles', function ($q) {
            $q->where('name', 'dancer');
        })->get();

        return view('dancers.index', compact('dancers'));
    }

    public function showArbiters(User $user)
    {
        $profile = Profile::all();
        $arbiters = User::whereHas('roles', function ($q) {
            $q->where('name', 'arbiter');
        })->get();

        //dd($profile);
        return view('arbiters.index', compact('arbiters', 'profile'));
    }
}
