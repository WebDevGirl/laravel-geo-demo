<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Space;
use Gmaps;

class SpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spaces = Space::with('user')->get();
        return view('spaces.index')->with(compact('spaces'));
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
     * @param  Space  $space
     * @return \Illuminate\Http\Response
     */
    public function show(Space $space)
    {
        /* Lazy Eager Load */
        $space->load('markers', 'user');

        /* Google Maps Config */
        $point = $space->markers->first();
        $config = array();
        $config['center'] = $point->lat.", ".$point->long;
        $config['zoom'] = '18';
        Gmaps::initialize($config);

        /* Create Space on Map */
        $polygon = array();      
        foreach($space->markers as $marker) {
            $polygon['points'][] = $marker->lat . ', ' . $marker->long;
        }
        $polygon['strokeColor'] = '#000099';
        $polygon['fillColor'] = '#000099';
        Gmaps::add_polygon($polygon);

        /* Create Map */
        $map = Gmaps::create_map();

        /* Return View */
        return view('spaces.show')->with(compact('space', 'map'));
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
     * Display the specified resource.
     *
     * @param  Space  $space
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        return view('spaces.test.index');
    }

    /**
     * Test Map
     *
     * @param  Space  $space
     * @return \Illuminate\Http\Response
     */
    public function testView($lat, $long)
    {
        /* Google Maps Config */
        $config = array();
        $config['center'] = $lat.", ".$long;
        $config['zoom'] = '18';
        Gmaps::initialize($config);

        /* Add Marker */
        $marker['position'] = $lat . ', ' . $long;
        Gmaps::add_marker($marker);

        /* Get all spaces that intersect with this point */
        $spaces = Space::with(['markers' => function($q){
            $q->orderBy('markers.order_id', 'desc');
        }])->whereIntersects($lat, $long)->get();

         /* Draw Spaces */
        foreach($spaces as $space) {
            $markers = $space->markers;
            
            /* Build lines */
            $polygon = array();
            foreach($markers as $marker) {
                $polygon['points'][] = $marker->lat . ', ' . $marker->long;
            }

            /* Draw Line */
            $polygon['strokeColor'] = '#000099';
            $polygon['fillColor'] = '#000099';
            Gmaps::add_polygon($polygon);

        }

        /* Create Map */
        $map = Gmaps::create_map();

        /* Return Map and Spaces */
        return view('spaces.test.show')->with(compact('map', 'spaces'));
    }
}
