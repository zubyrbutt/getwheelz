<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    protected $fillable  = [
        'make', 'model', 'year', 'city', 
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
