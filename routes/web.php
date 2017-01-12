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

Route::get('/home', function() {
	return redirect('/dashboard');
});

// Give security for logged user only
Route::group(['prefix' => 'dashboard'], function () {
	Route::group(['middleware' => 'auth'], function () {
		Route::get('/', function () {
		    return view('dashboard.index');
		});
		Route::resource('submission', 'SubmissionController', ['only' => [
	    	'store'
		]]);
	});
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
