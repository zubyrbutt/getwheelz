<?php

namespace App;

use App\Car;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $fillable = [
        'city', 'user_id', 'bike_info', 'registration_city', 'mileage',  'engine', 'model', 'description', 'price', 'negotiable'
    ];

    public function user(){
        
        return $this->belongsTo(User::class);
    }
    
    public function cars(){
        return $this->belongsTo(Car::class);
    }

}
