<?php

namespace App;

use App\User;
use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use Rateable;

    protected $fillable = [
        'make', 'year','model','title','description','relation','rating', 'image'
    ];
    public function users()
{
    return $this->belongsTo(User::class);
}




}


