<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();

        /* Lazy Eager Load Following */
        $user->load('following');
        $following = $user->following;
        
        /* Get Feed */
        $feed = \App\Broadcast::whereIn('user_id', $following->pluck('id'))->orderby('created_at', 'desc')->get();

        return view('home', compact('following', 'feed'));
    }
}
