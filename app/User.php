<?php

namespace App;

use App\Bike;
use App\Role;
use App\Shop;
use App\Reply;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone','image',
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