<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'User\UserController@index');
//Route::get('logoutuser', 'User\UserController@logoutuser');
Route::prefix('user')->group(function(){
    Route::post('/logoutuser', ['as' => 'user.logoutuser','uses' => 'User\UserController@logoutuser']);
    Route::get('/shop', ['as' => 'user.shop','uses' => 'User\UserController@shop']);
    Route::get('/aboutus', ['as' => 'user.aboutus','uses' => 'User\UserController@aboutus']);
    Route::get('/contuctus', ['as' => 'user.contuctus','uses' => 'User\UserController@contuctus']);
    Route::post('/message', ['as' => 'user.message','uses' => 'User\UserController@message']);
    Route::get('/productdetails/{id}', ['as' => 'user.productdetails','uses' => 'User\UserController@productdetails']);
    Route::get('/add-to-cart', ['as' => 'user.add-to-cart','uses' => 'User\CartController@addToCart']);
    Route::get('/cartindex', ['as' => 'user.cartindex','uses' => 'User\CartController@cartindex']);
    Route::get('/cart', ['as' => 'user.cart','uses' => 'User\CartController@cart']);
    Route::post('/qty', ['as' => 'user.qty','uses' => 'User\CartController@qty']);
    Route::patch('/update-cart', ['as' => 'user.update-cart','uses' =>  'User\CartController@update']); 
    Route::delete('/remove-from-cart',['as' => 'user.remove-from-cart','uses' => 'User\CartController@remove']);
    Route::get('/checkout', ['as' => 'user.checkout','uses' => 'User\CartController@checkout']);
    Route::post('/book', ['as' => 'user.book','uses' => 'User\CartController@book']);
});
Route::post('/paytmcallback', 'User\CartController@paytmcallback');


// Route::get('/admin', 'Auth\AdminLoginController@showLoginform')->name('admin.login');

Route::prefix('admin')->group(function(){
    Route::get('/', 'Auth\AdminLoginController@showLoginform')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::post('/logoutadmin', ['as' => 'admin.logoutadmin','uses' => 'Admin\AdminController@logoutadmin']);


    Route::get('/create', ['as' => 'admin.create','uses' => 'Admin\DashboardController@create']);
    Route::post('/store', ['as' => 'admin.store','uses' => 'Admin\DashboardController@store']);
    Route::get('/show/{id}', ['as' => 'admin.show','uses' => 'Admin\DashboardController@show']);
    Route::get('/edit/{id}', ['as' => 'admin.edit','uses' => 'Admin\DashboardController@edit']);
    Route::put('/update/{id}', ['as' => 'admin.update','uses' => 'Admin\DashboardController@update']);
    Route::get('/delete/{id}', ['as' => 'admin.delete','uses' => 'Admin\DashboardController@delete']);
    Route::get('/addcatagory', ['as' => 'admin.addcatagory','uses' => 'Admin\DashboardController@addcatagory']);
    Route::post('/storecartagory', ['as' => 'admin.storecartagory','uses' => 'Admin\DashboardController@storecartagory']);
    Route::get('/showcatagory', ['as' => 'admin.showcatagory','uses' => 'Admin\DashboardController@showcatagory']);
    Route::get('/deletecatagory/{id}', ['as' => 'admin.deletecatagory','uses' => 'Admin\DashboardController@deletecatagory']);
    

});













