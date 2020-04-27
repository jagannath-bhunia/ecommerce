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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ['as' => 'admin','uses' => 'Admin\AdminController@index']);
Route::post('login', ['as' => 'login','uses' => 'Admin\AdminController@login']);

Route::get('dashboard', ['as' => 'admin.dashboard','uses' => 'Admin\DashboardController@index']);
Route::get('create', ['as' => 'admin.create','uses' => 'Admin\DashboardController@create']);
Route::post('store', ['as' => 'admin.store','uses' => 'Admin\DashboardController@store']);
Route::get('show/{id}', ['as' => 'admin.show','uses' => 'Admin\DashboardController@show']);
Route::get('edit/{id}', ['as' => 'admin.edit','uses' => 'Admin\DashboardController@edit']);
Route::put('update/{id}', ['as' => 'admin.update','uses' => 'Admin\DashboardController@update']);
Route::get('delete/{id}', ['as' => 'admin.delete','uses' => 'Admin\DashboardController@delete']);
Route::get('addcatagory', ['as' => 'admin.addcatagory','uses' => 'Admin\DashboardController@addcatagory']);
Route::post('storecartagory', ['as' => 'admin.storecartagory','uses' => 'Admin\DashboardController@storecartagory']);
Route::get('showcatagory', ['as' => 'admin.showcatagory','uses' => 'Admin\DashboardController@showcatagory']);
Route::get('deletecatagory/{id}', ['as' => 'admin.deletecatagory','uses' => 'Admin\DashboardController@deletecatagory']);
Route::get('logout', ['as' => 'logout','uses' => 'HomeController@logout']);



Route::get('index', ['as' => 'user.index','uses' => 'User\UserController@index']);
Route::get('userloginform', ['as' => 'user.userloginform','uses' => 'User\UserController@userloginform']);
Route::post('userlogin', ['as' => 'user.userlogin','uses' => 'User\UserController@userlogin']);
Route::post('userregister', ['as' => 'user.userregister','uses' => 'User\UserController@userregister']);
Route::get('userlogout', ['as' => 'userlogout','uses' => 'User\UserController@userlogout']);
Route::get('shop', ['as' => 'user.shop','uses' => 'User\UserController@shop']);
Route::get('productdetails/{id}', ['as' => 'admin.productdetails','uses' => 'User\UserController@productdetails']);
Route::get('add-to-cart', ['as' => 'user.add-to-cart','uses' => 'User\CartController@addToCart']);
Route::get('cartindex', ['as' => 'user.cartindex','uses' => 'User\CartController@cartindex']);
Route::get('cart', ['as' => 'user.cart','uses' => 'User\CartController@cart']);
Route::post('qty', ['as' => 'user.qty','uses' => 'User\CartController@qty']);
Route::patch('update-cart', ['as' => 'user.update-cart','uses' =>  'User\CartController@update']); 
Route::delete('remove-from-cart',['as' => 'user.remove-from-cart','uses' => 'User\CartController@remove']);
Route::get('checkout', ['as' => 'user.checkout','uses' => 'User\CartController@checkout']);
Route::post('book', ['as' => 'user.book','uses' => 'User\CartController@book']);
Route::post('/paytmcallback', 'User\CartController@paytmcallback');


//Route::get('add-to-cart/{id}', 'CartController@addToCart');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

