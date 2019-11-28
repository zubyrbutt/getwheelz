<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cars', 'CarController')->middleware('auth');
Route::resource('bikes', 'BikeController')->middleware('auth');
Route::resource('accessories', 'AccessoryController');
Route::resource('products', 'ShopController');

Route::resource('cart', 'CartController');
Route::get('checkout', 'CheckOutController@checkOut')->name('checkout');
Route::get('payment', 'CheckOutController@payment')->name('payment');
Route::post('store-payment', 'CheckOutController@storePayment')->name('payment.store');




Route::get('shipping-info', 'CheckOutController@shipping')->name('shipping.info');
Route::resource('address', 'addressController');


Auth::routes();

//Route::get('home', 'HomeController@index')->name('home');


Route::get('admin', 'AdminsController@index')->name('admin')->middleware(['auth', 'auth.admin']);
Route::get('admin/cars/{car}', 'AdminsController@carshow')->name('admin.cars')->middleware(['auth', 'auth.admin']);
Route::get('admin/bikes/{bike}', 'AdminsController@bikeshow')->name('admin.bike')->middleware(['auth', 'auth.admin']);
Route::get('admin/blog', 'AdminsController@blog')->name('admin.blog')->middleware(['auth', 'auth.admin']);
Route::resource('admin/shop', 'ShopController')->middleware(['auth', 'auth.admin']);
    

Route::get('finance', 'CarFinanceController@finance')->name('finance');


Route::get('carprice', function(){
    return view('more.carprice');
});

Route::resource('users', 'UsersController')->middleware('auth');
Route::get('/', 'CarController@welcome');

Route::resource('rides', 'ridesController');
Route::resource('discussions', 'DiscussionsController')->middleware('auth');
Route::resource('discussions/{discussion}/replies', 'RepliesController')->middleware('auth');



Route::get('discussions/notifications', [UsersController::class, 'notifications'])->name('discussions.notifications');

Route::post('discussions/{discussion}/replies/{reply}/mark-as-best-reply', 'DiscussionsController@reply')->name('discussions.best-reply')->middleware('auth');
