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

Route::post('/voyages-search', 'VoyageController@search')->name('search');

Route::get('/voyage-detail/{id}', 'VoyageController@show')->name('detail');

Route::get('/contact', function () {
    return view('site/contact');
});
Route::get('/services', function () {
    return view('site/services');
});
Route::get('/blog', function () {
    return view('site/blog');
});

Route::get('/liste-voyages', 'VoyageAdminController@index')->name('liste');

Route::get('/edit-voyage/{id}', 'VoyageAdminController@show')->name('edit');

Route::get('/create-voyage', 'VoyageAdminController@create')->name('create');

Route::post('/save-voyage', 'VoyageAdminController@store')->name('save');

Route::put('/update-voyage/{id}', 'VoyageAdminController@update')->name('update');

Route::get('/delete-voyage/{id}', 'VoyageAdminController@destroy')->name('delete');

// Route::resource('save-voyage', 'VoyageAdminController');

// Route::prefix('admin')->group(function () {
//     Route::resource('voyages', 'VoyageAdminController', ['prefix' => 'admin']);
//     Route::get('/create', function () {return view('admin/form-voyages');});
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
