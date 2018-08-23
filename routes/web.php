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

/* Route::get('/', function () {
    return view('pages.index');
}); */

Route::get('/', 'ListingController@index');

Route::get('/listings-grid', function () {
    return view('pages.listings-grid');
});

Route::get('/submit', function () {
    return view('pages.rental-submit');
});

Route::get('/forms', function () {
    return view('pages.forms');
});

Route::get('/apply', function () {
    return view('pages.apply');
});

Route::get('/faq', function () {
    return view('pages.faq');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/apply', 'CheckoutController@charge');


Route::get('/rentals/{view}/{sort}/{parameters}', 'ListingController@search');

Route::get('/rental/details/{listing_id}', 'ListingController@details');

Route::get('/search/{view}', 'ListingController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*   testing development */
Route::get('/dev', function () {
    return view('pages.dev');
});

Route::get('/rent-application', function () {
    return view('pages.online-application');
});

Route::get('/cosigner-application', function () {
    return view('pages.cosigner-application');
});

Route::post('email', 'EmailController@send');

Route::post('/online-application', 'OnlineApplicationController@store');

//Route::post('/store', 'RecaptchaController@store');