<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();  
        $following = \Auth::user()->following->pluck('id')->toArray();  
        return view('users.index')->with(compact('users', 'following'));
    }

    /**
     * Display the specified resource.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show')->with('user', $user);
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
        //
    }

    /**
     * Follow a User
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function follow(User $user)
    {
        \Auth::user()->following()->syncWithoutDetaching([$user->id]);
        return redirect('users/'.$user->id)->with('status', 'You are now following this user');
    }

    /**
     * Unfollow a User
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function unfollow(User $user)
    {
        \Auth::user()->following()->detach($user->id);
        return redirect('users')->with('status', 'You are not longer following '.$user->name);
    }

}
