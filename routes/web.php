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
	$news = \App\News::limit(4)->latest()->get();
	$gallery = \App\Gallery::where('status', 1)->limit(8)->latest()->get();
    return view('welcome')->with('news', $news)->with('gallery', $gallery);
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', 'HomeController@index');
});

// Give security for logged user only
Route::group(['prefix' => 'dashboard'], function () {
	Route::group(['middleware' => 'auth'], function () {
		Route::get('/', function () {
			if(Auth::user()->role_id == 1) {
				return redirect('adminvocomfest17'); 
			}
		    return view('dashboard.index');
		});
		Route::resource('submission', 'SubmissionController', ['only' => [
	    	'store'
		]]);
		Route::resource('payment', 'PaymentConfirmationController', ['only' => [
	    	'store'
		]]);
	});
});

// Give security for logged user only
Route::group(['prefix' => 'adminvocomfest17'], function () {
	Route::group(['middleware' => 'auth'], function () {
		Route::get('/', function () {
		    return view('admin.index');
		});
		Route::resource('team', 'AdminTeamController', ['only' => [
			'index', 'show'
		]]);
		Route::resource('news', 'AdminNewsController', ['only' => [
			'index', 'show', 'create', 'edit', 'store', 'update'
		]]);
		Route::resource('gallery', 'AdminGalleryController', ['only' => [
			'index', 'store'
		]]);
		Route::resource('payment', 'AdminPaymentController', ['only' => [
			'index'
		]]);
		Route::resource('submission', 'AdminSubmissionController', ['only' => [
			'index'
		]]);
		Route::get('payment/delete/{id}', 'AdminPaymentController@destroy');
		Route::get('submission/delete/{id}', 'AdminSubmissionController@destroy');
		Route::get('gallery/delete/{id}', 'AdminGalleryController@destroy');
		Route::get('team/delete/{id}', 'AdminTeamController@destroy');
		Route::get('news/delete/{id}', 'AdminNewsController@destroy');
		Route::get('payment/confirm/{id}', 'AdminPaymentController@confirm');
		Route::get('gallery/publish/{id}', 'AdminGalleryController@publish');
		Route::get('gallery/unpublish/{id}', 'AdminGalleryController@unpublish');
		Route::get('team/verify/{id}', 'AdminTeamController@verify');
		Route::get('team/unverify/{id}', 'AdminTeamController@unverify');
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

Route::resource('news', 'NewsController', ['only' => [
	'index', 'show'
]]);
Route::resource('gallery', 'GalleryController', ['only' => [
	'index'
]]);