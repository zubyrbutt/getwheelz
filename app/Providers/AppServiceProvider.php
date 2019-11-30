<?php

namespace App\Providers;

use App\Accessory;
use App\Bike;
use App\Car;
use App\Channel;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); 
        View::share('channels', Channel::all());
        View::share('bikes', Bike::all());
        View::share('cars', Car::all());
        View::share('accessories', Accessory::all());


    }
}
