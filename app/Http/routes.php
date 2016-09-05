<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', 'GuestController@index');

Route::auth();
Route::get('/register/verify/{id}/{code}', 'GuestController@verify');

Route::get('/home', 'HomeController@index');
Route::get('/create', 'HomeController@create')->middleware('auth');

Route::post('/add', 'HomeController@addNews')->middleware('auth');

Route::group(['prefix' => 'update', 'middleware' => 'auth'], function() {
    Route::post('/avatar', 'ProfileController@postAvatar');
    Route::post('/password', 'ProfileController@postPassword');
    Route::post('/email', 'ProfileController@postEmail');
});


