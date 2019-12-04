<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'user_id', 'car_type', 'city', 'driver', 'starting_date', 'ending_date'
    ];




   public function user(){
       return $this->belongsTo(User::class);
   }
}
