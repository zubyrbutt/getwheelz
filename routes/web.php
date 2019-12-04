<?php



use App\Car;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cars', 'CarController');
Route::get('search', 'CarController@search')->name('search');
Route::resource('bikes', 'BikeController');
Route::resource('accessories', 'AccessoryController');
Route::resource('products', 'ShopController');
Route::resource('rental', 'RentalController');
Route::resource('inspection', 'InspectionController');
Route::resource('insurance', 'InsuranceController');
Route::resource('import', 'ImportController');
Route::get('finance', 'CarFinanceController@finance')->name('finance');
Route::get('car-verification', 'CarverificationController@carVerification')->name('verification.car');
Route::get('license-verification', 'CarVerificationController@license')->name('verification.license');





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
Route::get('admin/orders/{types?}', 'orderController@orders')->name('admin.orders');
Route::post('toggledeliver/{orderId}', 'orderController@toggleDeliver')->name('toggle.deliver');
//Route::get('admin/cars/certified', 'AdminsController@certified')->name('admin.certified');
Route::resource('admin/certified', 'CertifiedController');


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
