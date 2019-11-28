<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'city', 'user_id','image','car_info', 'registration_city', 'mileage', 'color', 'engine', 'transmission', 'assembly', 'model', 'description', 'price'
    ];

    public function user(){
        
        return $this->belongsTo(User::class);
    }

    public function bikes(){
        return $this->hasMany(Bike::class);
    }

}
