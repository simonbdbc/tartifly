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

Route::get('/', 'PageController@welcome');

Route::get('/about', 'PageController@about');

Route::get('/voyages', 'VoyageController@index');

Route::get('/hotels', function () {
    return view('site/hotels');
});
Route::get('/services', function () {
    return view('site/services');
});
Route::get('/blog', function () {
    return view('site/blog');
});
Route::get('/contact', function () {
    return view('site/contact');
});
