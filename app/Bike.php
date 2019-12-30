<?php

namespace App;

use App\Car;
use App\User;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model  implements Searchable
{
    protected $fillable = [
        'city', 'user_id', 'bike_info', 'registration_city', 'mileage',  'engine', 'model','condition','description', 'price', 'negotiable','image'
    ];


    public function getSearchResult(): SearchResult
    {
       $url = route('search');
    
        return new \Spatie\Searchable\SearchResult(
           $this,
           $this->bike_info,
           $this->price,
           $this->image,
           $this->engine,
           $this->city,
           $this->created_at,
          'bike/'.$this->id,
           $url
        );
    }



    public function user(){
        
        return $this->belongsTo(User::class);
    }
    
    public function cars(){
        return $this->belongsTo(Car::class);
    }

}
