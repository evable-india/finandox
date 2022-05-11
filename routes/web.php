<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\GuestController;
use App\http\Controllers\ContactusController;
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
Route::get('/partner-services', 'App\Http\Controllers\GuestController@partner_service')->name('partner-service');
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
Route::get('/online-payments', 'App\Http\Controllers\GuestController@checkout')->name('checkout');
Route::get('/faq', 'App\Http\Controllers\GuestController@faq')->name('faq');
Route::get('/errorpage', 'App\Http\Controllers\GuestController@errorpage')->name('error_page');

Route::get('/price', 'App\Http\Controllers\GuestController@price')->name('price');
Route::get('/review', 'App\Http\Controllers\GuestController@review')->name('review');
Route::get('/tearms', 'App\Http\Controllers\GuestController@tearms')->name('tearms');
Route::get('/insurance', 'App\Http\Controllers\GuestController@insurance')->name('insurance');
Route::get('/travel', 'App\Http\Controllers\GuestController@travel')->name('travel');
Route::get('/utility-bill-payment', 'App\Http\Controllers\GuestController@utility_bill_payment')->name('utility-bill-payment');
Route::get('/payment-getway', 'App\Http\Controllers\GuestController@payment_getway')->name('payment-getway');
Route::get('/digital-payment', 'App\Http\Controllers\GuestController@digital_payment')->name('digital-payment');
Route::get('/banking-service', 'App\Http\Controllers\GuestController@banking_service')->name('banking-service');
Route::get('/send-money', 'App\Http\Controllers\GuestController@send_money')->name('send-money');
Route::get('/recieve-money', 'App\Http\Controllers\GuestController@receive_money')->name('recieve-money');
Route::get('/events', 'App\Http\Controllers\GuestController@events')->name('events');
Route::get('/promotions', 'App\Http\Controllers\GuestController@promotions')->name('promotions');
Route::get('/transition', 'App\Http\Controllers\GuestController@transition')->name('transition');
Route::get('/social-media', 'App\Http\Controllers\GuestController@social_media')->name('social-media');
Route::get('/customer-care', 'App\Http\Controllers\GuestController@customer_care')->name('customer-care');
Route::get('/live-chat', 'App\Http\Controllers\GuestController@live_chat')->name('live-chat');
Route::get('/notification', 'App\Http\Controllers\GuestController@notification')->name('notification');
Route::get('/privacy-policy', 'App\Http\Controllers\GuestController@privacy_policy')->name('privacy-policy');
Route::get('/terms-and-conditions', 'App\Http\Controllers\GuestController@term_condition')->name('terms-and-conditions');
Route::get('/branch-banking', 'App\Http\Controllers\GuestController@branchless_banking')->name('branch-banking');
Route::get('/digital-services', 'App\Http\Controllers\GuestController@digital_service')->name('digital-services');
Route::get('/partner-program', 'App\Http\Controllers\GuestController@partner_program')->name('partner-program');

// contact us route

// Route::get('/contact', 'App\Http\Controllers\ContactController@contactform')->name('contact');
// Route::post('/contact', 'App\Http\Controllers\ContactController@store')->name('contact_post');
// Route::get('contact_us', 'ContactusController@index')->name('contact');
Route::get('/contact_us', 'App\Http\Controllers\ContactusController@index')->name('contact');
Route::post('/contact_us', 'App\Http\Controllers\ContactusController@store')->name('contact_post');

