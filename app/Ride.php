<?php

namespace App;

use App\User;
use Cog\Likeable\Contracts\Likeable as LikeableContract;
use Cog\Likeable\Traits\Likeable;
use Laravelista\Comments\Commentable;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model implements LikeableContract
{
    use Commentable;
    use Likeable;

    protected $fillable = [
        'title', 'description', 'image', 
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
