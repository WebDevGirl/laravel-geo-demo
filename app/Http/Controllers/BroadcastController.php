<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Broadcast;
use App\Space;

class BroadcastController extends Controller
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
     * @param  Broadcast  $broadcast
     * @return \Illuminate\Http\Response
     */
    public function show(Broadcast $broadcast)
    {
        $broadcast->load('user','space');
        dd($broadcast->toArray());
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Track lat/long and determine if it should broadcast
     *
     * @param  Space  $space
     * @return \Illuminate\Http\Response
     */
    public function trackings($lat, $long)
    {
        /* Find Spaces that point intersects with */
        $spaces = Space::whereUserId(\Auth::user()->id)->whereIntersects($lat, $long)->get();
        
        /* Create New Broadcast for Authed User */
        foreach($spaces as $space) {
            \Auth::user()->broadcasts()->create([
                'space_id' => $space->id,
            ]);
        }
    
        return array('status' => 'success');
    }
}
