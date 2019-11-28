<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $fillable = [
        'title', 'city', 'description', 'price', 'negotiable', 'condition', 'category',
 
     ];
}
