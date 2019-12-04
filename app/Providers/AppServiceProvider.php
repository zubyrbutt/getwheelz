<?php

namespace App\Providers;

use App\Accessory;
use App\Bike;
use App\Car;
use App\Certified;
use App\Channel;
use App\Insurance;
use App\Shop;
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
        View::share('products', Shop::all());
        View::share('certified', Certified::all());
        View::share('insurance', Insurance::all());



    }
}
