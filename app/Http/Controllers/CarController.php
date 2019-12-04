<?php

namespace App\Http\Controllers;

use App\Car;
use App\Bike;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use App\Http\Requests\CarPost;

class CarController extends Controller
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

        return view('search.search', compact('searchResults'));
    }



    public function __construct(){
        $this->middleware('auth')->only('store');
    }

    public function welcome()
    {
        $car = Car::all();
        return view('welcome')->with('cars', $car);
    }

    public function index()
    {
        $car = Car::orderBy('id', 'desc')->get();
        return view('cars.index')->with('cars', $car);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarPost $request)
    {
    

        $image = $request->image->store('cars');
        $car = Car::create([

            'city' => $request->city,
            'user_id' => auth()->id(),
            'car_info' => $request->car_info,
            'registration_city' => $request->registration_city,
            'mileage' => $request->mileage,
            'color' => $request->color,
            'image' => $image,
            'engine' => $request->engine,
            'transmission' => $request->transmission,
            'assembly' => $request->assembly,
            'model' => $request->model,
            'description' => $request->description,
            'price' => $request->price,
       

        ]);
                
        $car->save();
        \toast('Your ad post successfully ..', 'success');

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car  = Car::findOrFail($id);
        
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
