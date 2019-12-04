<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $fillable = [
        'model', 'car_info', 'name', 'phone', 'email', 'city', 'schedule'
    ];
}
