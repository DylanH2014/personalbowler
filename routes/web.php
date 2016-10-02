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

// Route::get('/', function () {
//     return view('welcome');
// });
	Auth::routes();
	Route::get('/', 'HomeController@index');

	Route::get('/dash', 'BowlingController@index');
	Route::post('/dash', 'BowlingController@addGame');

	Route::get('/game/{game}', 'BowlingController@show');
	Route::get('/bowler/{name}', 'BowlingController@showAll');
