<?php

namespace App;

use App\Shop;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['total', 'delivered'];

    public function shops(){
        return $this->belongsToMany(Shop::class)->withPivot('qty', 'total');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
