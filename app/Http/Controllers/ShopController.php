<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->id == 1){
        $product = Shop::orderBy('id', 'DESC')->get();
       return view('dashboard.shop.index')->with('products', $product);

    }
    else

    {
        $product = Shop::orderBy('id', 'DESC')->get();
        return view('shop.index')->with('products', $product);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.shop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            
            'city' => 'required',
            'condition' => 'required',
            'registration_city' => 'required',
            'engine' => 'required',
            'model' => 'required',
            'exterior_color' => 'required',
            'interior_color' => 'required',
            'image' => 'required:image',
            'price' => 'required',
            'description' => 'required'
        ]);

        $image = $request->image->store('products');

        Shop::create([

            'name' => $request->name,
            'user_id' => auth()->id(),
            'city' => $request->city,
            'condition' => $request->condition,
            'engine' => $request->engine,
            'model' => $request->model,
            'exterior_color' => $request->exterior_color,
            'interior_color' => $request->interior_color,
            'registration_city' => $request->registration_city,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image
        ]);

        return redirect('admin');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        $product = Shop::all()->first();
        return view('shop.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
