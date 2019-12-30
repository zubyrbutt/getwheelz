<?php

namespace App\Http\Controllers;

use App\Certified;
use App\Http\Requests\PostCertifiedRequest;
use Illuminate\Http\Request;

class CertifiedController extends Controller
{
   public function index(){
       $certified = Certified::all();
    return view('dashboard.cars.index',compact('certified'));
   }

   public function store(PostCertifiedRequest $request){

    $image = $request->image->store('certified');
        $certified = Certified::create([

            'city' => $request->city,
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
                
        $certified->save();
        return redirect('/');
   }
   public function show($id)
   {
       $car  = Certified::findOrFail($id);
       
       return view('cars.certified', compact('car'));
   }
}
