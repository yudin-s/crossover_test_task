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

Route::get('/', 'GuestController@index')->middleware('guest');
Route::auth();
Route::get('/register/verify/{id}/{code}', 'GuestController@verify');

Route::get('/home', 'HomeController@index');
Route::get('/news/{id}', 'HomeController@viewNews');

Route::get('/profile/{id}', 'ProfileController@view')->middleware('auth');
Route::get('/create', 'HomeController@create')->middleware('auth');
Route::post('/add', 'HomeController@addNews')->middleware('auth');


Route::group(['prefix' => 'update', 'middleware' => 'auth'], function() {
    Route::post('/avatar', 'ProfileController@postAvatar');
    Route::post('/password', 'ProfileController@postPassword');
    Route::post('/email', 'ProfileController@postEmail');
    Route::post('/delete', 'HomeController@postRemove');
});

Route::group(['prefix' => 'comment', 'middleware' => 'auth'], function() {
    Route::post('/create', 'CommentController@createComment');
});

Route::group(['prefix' => 'rss'], function() {
    Route::get('/', 'HomeController@rss');
    Route::get('/profile/{id}', 'ProfileController@rss');
});

Route::group(['prefix' => 'invite', 'middleware' => 'guest'], function() {
    Route::post('/send', 'UsersCodeController@sendLink');
    Route::post('/resend', 'UsersCodeController@resendLink');
    Route::get('/reg/{email}/{code}', 'UsersCodeController@register');
});


Route::group(['prefix' => 'pdf'], function() {
    Route::get('/article/{id}', 'PDFController@article');
});



