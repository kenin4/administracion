<?php


/*
 * @autor: Ing. Daniel Alejandro Hernández Gómez
 * @email: daniel@extjs.mx
 * @lugar: Huajuapan de León, Oaxaca
 * @fecha: 1 de junio de 2016
 *
 * */



namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Empleador;
use Illuminate\Support\Facades\Auth;
use View;

class EmpleadorController extends Controller
{
    /*
     * Obtiene todos los registros activos de la tabla de empleadores
     *
     * */

    public function getAll()
    {
        $empleadores = Empleador::all();
        return View::make('empleadores')->with('empleadores', $empleadores );
    }

    /*
     * Agrega crea y agrega a la base de datos un nuevo
     * registro de un empleador
     * */


    public function addEmpleador( Request $data )
    {

        $empleador = new Empleador;
        $empleador->id_usuario               = Auth::user()->id;
        $empleador->nombre                   = $data->nombre;
        $empleador->apellidos                = $data->apellidos;
        $empleador->genero                   = $data->genero;
        $empleador->correo                   = $data->email;
        $empleador->telefono                 = $data->telefono;
        $empleador->calle                    = $data->calle;
        $empleador->numero_int               = $data->numero_int;
        $empleador->numero_ext               = $data->numero_ext;
        $empleador->colonia                  = $data->colonia;
        $empleador->delegacion               = $data->delegacion;
        $empleador->ciudad                   = $data->ciudad;
        $empleador->estado                   = strtoupper($data->estado);
        $empleador->cp                       = $data->cp;
        $empleador->notas                    = $data->notas;


        $empleador->save();

        return redirect()->action('EmpleadorController@getAll');
    }


    /*
     * Recibe los datos del formulario que se edita y los actualiza en
     * la base de datos
     * */

    public function editEmpleador( Request $data )
    {

        $empleador = Empleador::find( $data->id );

        $empleador->id_usuario               = Auth::user()->id;
        $empleador->nombre                   = $data->nombre;
        $empleador->apellidos                = $data->apellidos;
        $empleador->genero                   = $data->genero;
        $empleador->correo                   = $data->email;
        $empleador->telefono                 = $data->telefono;
        $empleador->calle                    = $data->calle;
        $empleador->numero_int               = $data->numero_int;
        $empleador->numero_ext               = $data->numero_ext;
        $empleador->colonia                  = $data->colonia;
        $empleador->delegacion               = $data->delegacion;
        $empleador->ciudad                   = $data->ciudad;
        $empleador->estado                   = strtoupper($data->estado);
        $empleador->cp                       = $data->cp;
        $empleador->notas                    = $data->notas;


        $empleador->save();



        return redirect()->action('EmpleadorController@getAll');
    }

    public function deleteEmpleador( $id )
    {
        $empleador = Empleador::find( $id );
        $empleador->delete();


    }
}
