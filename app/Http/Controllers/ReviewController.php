<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use App\Http\Requests\PostReviewRequest;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = Review::first();

        return view('review.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('review.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostReviewRequest $request)
    {
        $review = Review::first();

        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rating;
        $rating->user_id = \Auth::id();
        
        $review->ratings()->save($rating);
       // dd(Review::first()->ratings);
        

        $image = $request->image->store('reviews');
       
        auth()->user()->review()->create([

            'make' => $request->make,
            'model' => $request->model,
            'year' => $request->year,
            'rating' => $request->rating,
            'title' => $request->title,
            'description' => $request->description,
            'relation' => $request->relation,
            'image' => $image

        ]);
        \toast('Request submit successfully ..', 'success');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
