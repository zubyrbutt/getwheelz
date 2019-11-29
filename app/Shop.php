<?php

namespace App;

use App\User;
use App\Order;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    
 
    protected $fillable = ['name','city','user_id', 'engine', 'model','exterior_color','registration_city', 'interior_color', 'condition', 'image', 'price', 'description'];



    public function user(){
    
        return $this->belongsTo(User::class);
    }
    public function orders(){
        return $this->belongsToMany(Order::class);
    }



}

