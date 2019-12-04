<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certified extends Model
{
    protected $fillable = [
        'city', 'user_id','image','car_info', 'registration_city', 'mileage', 'color', 'engine', 'transmission', 'assembly', 'model', 'description', 'price'
    ];
}
