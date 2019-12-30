<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $fillable = [
        'title', 'city', 'description', 'price', 'negotiable', 'condition','image', 'category',
 
     ];

    
}
