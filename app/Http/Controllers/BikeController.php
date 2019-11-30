<?php

namespace App\Http\Controllers;

use App\Bike;
use App\Http\Requests\PostBike;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes = Bike::all()->first();
        return view('bikes.index')->with('bikes',$bikes);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bikes.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostBike $request)
    {
        $bike = Bike::create([

            'city' => $request->city,
            'user_id' => auth()->id(),
            'bike_info' => $request->bike_info,
            'registration_city' => $request->registration_city,
            'mileage' => $request->mileage,
            'engine' => $request->engine,
            'model' => $request->model,
            'description' => $request->description,
            'price' => $request->price,
            'negotiable' => $request->negotiable

        ]);

        $bike->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show(Bike $bike)
    {
        return view('bikes.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit(Bike $bike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bike $bike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bike $bike)
    {
        //
    }
}
