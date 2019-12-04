<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{

    protected $fillable = [
        'company','city', 'value', 'year', 'condition', 'tracker'
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }
}
