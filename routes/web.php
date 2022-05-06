<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\GuestController;
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
Route::get('/', 'App\Http\Controllers\GuestController@index')->name('home');
Route::get('/aboutus', 'App\Http\Controllers\GuestController@aboutus')->name('aboutus');
Route::get('/services', 'App\Http\Controllers\GuestController@services')->name('services');
Route::get('/secondservice', 'App\Http\Controllers\GuestController@secondservice')->name('secondservice');
Route::get('/portofolio', 'App\Http\Controllers\GuestController@portofolio')->name('portofolio');
Route::get('/secondportfolio', 'App\Http\Controllers\GuestController@secondportfolio')->name('secondportfolio');
Route::get('/portofoliodetails', 'App\Http\Controllers\GuestController@portofoliodetails')->name('portofoliodetails');
Route::get('/blog_grid', 'App\Http\Controllers\GuestController@bloggrid')->name('bloggrid');
Route::get('/blog_standard', 'App\Http\Controllers\GuestController@blogstandard')->name('blog_standard');
Route::get('/blogdetails', 'App\Http\Controllers\GuestController@blogdetails')->name('blog_details');
Route::get('/careers', 'App\Http\Controllers\GuestController@careers')->name('careers');
Route::get('/team', 'App\Http\Controllers\GuestController@team')->name('team');
Route::get('/teamdetails', 'App\Http\Controllers\GuestController@teamdetails')->name('teamdetails');
Route::get('/shop', 'App\Http\Controllers\GuestController@shop')->name('shop');
Route::get('/products', 'App\Http\Controllers\GuestController@products')->name('products');
Route::get('/shppingcart', 'App\Http\Controllers\GuestController@shopingcart')->name('shppingcart');
Route::get('/checkout', 'App\Http\Controllers\GuestController@checkout')->name('checkout');
Route::get('/faq', 'App\Http\Controllers\GuestController@faq')->name('faq');
Route::get('/errorpage', 'App\Http\Controllers\GuestController@errorpage')->name('error_page');
Route::get('/contact', 'App\Http\Controllers\GuestController@contact')->name('contact');
Route::get('/price', 'App\Http\Controllers\GuestController@price')->name('price');
Route::get('/review', 'App\Http\Controllers\GuestController@review')->name('review');
Route::get('/tearms', 'App\Http\Controllers\GuestController@tearms')->name('tearms');
Route::get('/insurance', 'App\Http\Controllers\GuestController@insurance')->name('insurance');
Route::get('/travel', 'App\Http\Controllers\GuestController@travel')->name('travel');
Route::get('/utility-bill-payment', 'App\Http\Controllers\GuestController@utility_bill_payment')->name('utility-bill-payment');
Route::get('/payment-getway', 'App\Http\Controllers\GuestController@payment_getway')->name('payment-getway');
