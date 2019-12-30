<?php

namespace App;

use App\User;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;

class Car extends Model implements Searchable
{
   
    
    protected $fillable = [
        'city', 'user_id','image','car_info', 'registration_city', 'mileage', 'color', 'engine', 'transmission', 'assembly', 'model','condition', 'description', 'price'
    ];



    public function getSearchResult(): SearchResult
    {
       $url = route('search');
    
        return new \Spatie\Searchable\SearchResult(
           $this,
           $this->car_info,
           $this->price,
           $this->image,
           $this->engine,
           $this->city,
           $this->created_at,
          'cars/'.$this->id,
           $url
        );
    }

    public function user(){
        
        return $this->belongsTo(User::class);
    }

    public function bikes(){
        return $this->hasMany(Bike::class);
    }

}
