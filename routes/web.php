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

Route::get('/faq', function () {
    return view('pages.faq');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/rentals/{view}/{parameters}', 'ListingController@search');

Route::get('/rental/details/{listing_id}', 'ListingController@details');

Route::get('/search/{view}', 'ListingController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*   testing development */
Route::get('/dev', 'ListingController@index');