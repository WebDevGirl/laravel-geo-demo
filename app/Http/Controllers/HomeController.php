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
        $following_ids = $following->pluck('id');

        /* Get Feed */
        $feed = \App\Broadcast::with(['user', 'space'])->whereIn('user_id', $following_ids)->get();

        /* Return Feed and Following */
        return view('home', compact('following', 'feed'));
    }
}
