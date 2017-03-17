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

Route::get('/', function () {
    
});

Route::get('/welcome', function () {
    return view('welcome');
});

// Authentication routes...
Route::group(['middleware' => ['web']], function() {
	Route::get('/login',['as' => 'login', 'uses' => 'Auth\AuthController@login']);
	Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
	Route::post('/handleLogin',['as' => 'handleLogin', 'uses' => 'Auth\AuthController@handleLogin']); 
	Route::get('/home', ['middleware' => 'auth','as' => 'home', 'uses' => 'UsersController@home']);
	Route::resource('/users', 'UsersController',['only' => ['create', 'store']]);
	
});

