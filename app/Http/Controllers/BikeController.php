<?php

namespace App\Http\Controllers;

use App\Car;
use App\Bike;
use Illuminate\Http\Request;
use App\Http\Requests\PostBike;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Car::class, 'car_info')
            ->registerModel(Bike::class, 'bike_info')
            ->perform($request->input('query'));
            dd($searchResults);

        return view('search.search', compact('searchResults'));
    }

    public function __construct(){
        $this->middleware('auth')->only('store');
    }

    public function index()
    {
        $bikes = Bike::all();
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
        $image = $request->image->store('bikes');

        $bike = Bike::create([

            'city' => $request->city,
            'user_id' => auth()->id(),
            'bike_info' => $request->bike_info,
            'registration_city' => $request->registration_city,
            'mileage' => $request->mileage,
            'engine' => $request->engine,
            'model' => $request->model,
            'condition' => $request->condition,
            'description' => $request->description,
            'price' => $request->price,
            'negotiable' => $request->negotiable,
            'image' => $image


        ]);

        $bike->save();
        \toast('Your ad post successfully ..', 'success');

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bike  = Bike::findOrFail($id);

        return view('bikes.show', compact('bike'));
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
