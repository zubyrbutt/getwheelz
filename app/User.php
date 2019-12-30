<?php

namespace App;

use App\Bike;
use App\Role;
use App\Shop;
use App\Order;

use App\Reply;
use App\Import;
use App\Rental;

use App\Review;
use App\Accessory;
use Laravelista\Comments\Commenter;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Commenter;
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'avatar', 'email', 'password', 'phone','image','slug'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function rides(){
        return $this->hasMany(Ride::class);
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
    public function import()
    {
        return $this->hasMany(Import::class);
    }
    public function insurance(){
        return $this->hasMany(Insurance::class);
    }
    public function rentals(){
        return $this->hasMany(Rental::class);
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function address(){
        return $this->hasMany(Address::class);
    }
    public function shops(){
        return $this->hasMany(Shop::class);
    }

    public function discussions(){
         return $this->hasMany(Discussion::class);
    }

    public function replies(){
        return $this->hasMany(Reply::class);
   }


    public function cars(){
        return $this->hasMany(Car::class);
    }
    public function bikes(){
        return $this->hasMany(Bike::class);
    }

    public function roles(){
        
        return $this->belongsToMany(Role::class);
    }

    public function hasAnyRoles($roles){

        return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    public function hasAnyRole($role){

        return null !== $this->roles()->where('name', $role)->first();
    }

}
