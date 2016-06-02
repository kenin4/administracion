<?php
use App\Egresado;
use App\Encuesta;
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
    	$egresados = Egresado::all();
		$encuestas = Encuesta::all();

		return View::make('prueba')->with('egresados',$egresados)->with('encuestas',$encuestas);
	});

	Route::get('usuarios', 'UserController@getAll');
	Route::post('usuarios/new', 'UserController@addUser');
	Route::post('usuarios/edit', 'UserController@editUser');
	Route::get('usuarios/delete/{id}', 'UserController@deleteUser');

	Route::get('encuestas','EncuestaController@showAll');
	Route::post('encuestas/new','EncuestaController@addEncuesta');
	Route::get('encuestas/delete/{id}','EncuestaController@deleteEncuesta');
	Route::post('encuestas/edit','EncuestaController@editEncuesta');

	Route::post('bind','RelacionController@bind');

	Route::get('egresados', 'EgresadoController@getAll');
    Route::post('egresados/new', 'EgresadoController@addEgresado');
    Route::post('egresados/edit', 'EgresadoController@editEgresado');
    Route::get('egresados/delete/{id}', 'EgresadoController@deleteEgresado');


	/*@autor : Ing. Daniel Alajandro Hernandez Gomez
	 * ruta de empleadpres
	 * */
	Route::get('empleadores', 'EmpleadorController@getAll');
	Route::post('empleadores/new', 'EmpleadorController@addEmpleador');
	Route::post('empleadores/edit', 'EmpleadorController@editEmpleador');
	Route::get('empleadores/delete/{id}', 'EmpleadorController@deleteEmpleador');



});  

Route::auth();
