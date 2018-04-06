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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/listings-grid', function () {
    return view('pages.listings-grid');
});


Route::get('/listings/{view}/{sort}/{page}', 'ListingController@index');

Route::get('/search/{view}/{sort}/{search}/{page}', 'ListingController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*   testing development */
Route::get('/dev', 'ListingController@index');