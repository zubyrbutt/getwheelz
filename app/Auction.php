<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $fillable = [
        'chassis_no','grade', 'auction', 'mileage', 'color','transmission','image'
    ];
}
