<?php

namespace App\Http\Controllers;

use App\Accessory;
use App\Http\Requests\PostAccessory;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth')->only('store','create');
    }

    public function index()
    {
        $accessories = Accessory::all();
        return view('accessories\index',compact('accessories'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accessories.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostAccessory $request)
    {
        $image = $request->image->store('accessories');

        $accessory = Accessory::create([
            'title' => $request->title,
            'city' => $request->city,
            'category' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'condition' => $request->condition,
            'negotiable' => $request->negotiable,
            'image' => $image

        ]);

        $accessory->save();
        \toast('Your ad post successfully ..', 'success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $accessory  = Accessory::findOrFail($id);
        
        return view('accessories.show', compact('accessory'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function edit(Accessory $accessory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accessory $accessory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accessory $accessory)
    {
        //
    }
}
