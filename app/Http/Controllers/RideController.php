<?php

namespace App\Http\Controllers;

use App\Ride;
use Illuminate\Http\Request;
use App\Http\Requests\PostRidesRequest;

class RideController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('store','create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rides = Ride::paginate(5);
        return view('rides.index', compact('rides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rides.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRidesRequest $request)
    {
        $image = $request->image->store('rides');
       
        auth()->user()->rides()->create([

            'title' => $request->title,
            'description' => $request->description,
            'image' => $image

        ]);
        \toast('Post publish successfully ..', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rides  $rides
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $ride = Ride::findOrFail($id);
        
        return view('rides.show', compact('ride'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rides  $rides
     * @return \Illuminate\Http\Response
     */
    public function edit(Rides $rides)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rides  $rides
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rides $rides)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rides  $rides
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rides $rides)
    {
        //
    }
}
