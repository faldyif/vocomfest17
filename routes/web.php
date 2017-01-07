<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/wdc', function () {
    return view('event.wdc');
});
Route::get('/madc', function () {
    return view('event.madc');
});
Route::get('/semnas', function () {
    return view('event.semnas');
});
Route::get('/icpc', function () {
    return view('event.icpc');
});
