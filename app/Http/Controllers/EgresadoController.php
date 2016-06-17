<?php


/*
 * @autor: Ing. Daniel Alejandro Hernández Gómez
 * @email: daniel@extjs.mx
 * @lugar: Huajuapan de León, Oaxaca
 * @fecha: 31 de mayo de 2016
 *
 * */



namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Egresado;
use App\Encuesta;
use Illuminate\Support\Facades\Auth;
use View;

class EgresadoController extends Controller
{
    /*
     * Obtiene todos los registros activos de la tabla de egresados
     *
     * */

    public function getAll()
    {
        $egresados = Egresado::all();
        $encuestas = Encuesta::all();
        return View::make('egresados')->with('egresados', $egresados )->with('encuestas',$encuestas);
    }

    /*
     * Agrega crea y agrega a la base de datos un nuevo
     * registro de un egresado
     * */


    public function addEgresado( Request $data )
    {

        $egresado = new Egresado;
        $egresado->nombre                   = $data->nombre;
        $egresado->apellidos                = $data->apellidos;
        $egresado->matricula                = $data->matricula;
        $egresado->carrera                  = $data->carrera;
        $egresado->fecha_graduacion         = $data->fecha_graduacion;
        $egresado->correo                   = $data->correo;
        $egresado->municipio_procedencia    = $data->municipio;
        $egresado->residencia_actual        = $data->residencia_actual;
        $egresado->empleo_actual            = $data->empleo_actual;
        $egresado->telefono                 = $data->telefono;
        $egresado->id_usuario               = Auth::user()->id;


        $egresado->save();

        return redirect()->action('EgresadoController@getAll');
    }


    /*
     * Recibe los datos del formulario que se edita y los actualiza en
     * la base de datos
     * */

    public function editEgresado( Request $data )
    {

        $egresado = Egresado::find( $data->id );

        $egresado->nombre                   = $data->nombre;
        $egresado->apellidos                = $data->apellidos;
        $egresado->matricula                = $data->matricula;
        $egresado->carrera                  = $data->carrera;
        $egresado->fecha_graduacion         = $data->fecha_graduacion;
        $egresado->correo                   = $data->correo;
        $egresado->municipio_procedencia    = $data->municipio;
        $egresado->residencia_actual        = $data->residencia_actual;
        $egresado->empleo_actual            = $data->empleo_actual;
        $egresado->telefono                 = $data->telefono;
        $egresado->id_usuario               = Auth::user()->id;


        $egresado->save();



        return redirect()->action('EgresadoController@getAll');
    }

    public function deleteEgresado( $id )
    {
        $egresado = Egresado::find( $id );
        $egresado->delete();


    }
}
