<?php

namespace App\Http\Controllers;

use App\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RentalPostRequest;
use RealRashid\SweetAlert\Facades\Alert;


class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth')->only('store','index');
    }

    public function index()
    {
        if(Auth()->user()->id !=1)
        {
            
        $rental = Rental::all();
        return view('rental\index',compact('rentals'));
        }else{
            
        $rental = Rental::all();
        return view('dashboard.rental.index',compact('rentals'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RentalPostRequest $request)
    {
        
        $rental = Rental::create([
           'user_id' =>Auth::user()->id,
            'car_type' => $request->car_type,
            'city' => $request->city,
            'driver' => $request->driver,
            'starting_date' => $request->starting_date,
            'ending_date' => $request->ending_date
        ]);
        
        $rental->save();
        
        alert('Received','Your booking car request received. We contact to you shortly ', 'success');


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit(Rental $rental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rental $rental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rental $rental)
    {
        //
    }
}
