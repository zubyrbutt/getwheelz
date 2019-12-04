<?php

namespace App\Http\Controllers;

use App\Car;
use App\Bike;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function index(){
        $car = Car::all();
        $bike = Bike::all();
        return view('dashboard.index')->with('cars', $car)->with('bikes', $bike);
    }

    public function carshow($id){

        $car  = Car::findOrFail($id);
        return view('dashboard.cars.show', compact('car'));
    }
    public function bikeShow($id){

        $bike  = Bike::findOrFail($id);
        return view('dashboard.bikes.show', compact('bike'));
    }

    public function blog(){
        return view('dashboard.blog');
    }

}
