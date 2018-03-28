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

Route::get('/listings-list', function () {
    return view('pages.listings-list');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*   testing development */

Route::get('/dev', function () {

    $client = new GuzzleHttp\Client();
    $res = $client->request('POST', 'https://www.yougotlistings.com/api/rentals/search.php?key=bVrLNhG2U1aFCKuix97RdsQyIfEnXPpl8jcSvzZO');
    // $output = $res->getStatusCode();
    $output = $res->getBody();

    return view('pages.dev', [
        'output' => $output
    ]);
});