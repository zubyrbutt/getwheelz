<?php

namespace App\Http\Controllers;

use App\Auction;
use Illuminate\Http\Request;
use App\Http\Requests\PostAuctionRequest;

class AuctionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth()->user()->id == 1)
        {
            return view('dashboard.auction.index');

        }else{
            return view('auction.index');

        }
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
    public function store(PostAuctionRequest $request)
    {
        $image = $request->image->store('auction');
        $auction = Auction::create([
            'grade' => $request->grade,
            'chassis_no' => $request->chassis_no,
            'transmission' => $request->transmission,
            'auction' => $request->auction,
            'mileage' => $request->mileage,
            'color' => $request->color,
            'image' => $image 

        ]);
        $auction->save();
        \toast('Post successfully ..', 'success');

        return redirect()->back();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function show(Auction $auction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function edit(Auction $auction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auction $auction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auction $auction)
    {
        //
    }
}
