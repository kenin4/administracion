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




Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function (){
    	return View::make('index');
	});

	Route::get('usuarios', 'UserController@getAll');
	Route::post('usuarios/new', 'UserController@addUser');
	Route::post('usuarios/edit', 'UserController@editUser');
	Route::get('usuarios/delete/{id}', 'UserController@deleteUser');

	Route::get('encuestas', function (){
    	return View::make('encuestas');
	});

	Route::get('egresados', function (){
    	return View::make('egresados');
	});


});  

Route::auth();
