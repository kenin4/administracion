<?php


/*
 * @autor: Ing. Daniel Alejandro Hernández Gómez
 * @email: daniel@extjs.mx
 * @lugar: Huajuapan de León, Oaxaca
 * @fecha: 2 de junio de 2016
 *
 * */



namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Empleador;
use App\Egresado;
use Illuminate\Support\Facades\Auth;
use View;

class ReporteController extends Controller
{
    /*
     * Obtiene todos los registros activos de la tabla de empleadores
     *
     * */

    public function getReporteEgresado( Request $data){

        $query = " SELECT * FROM egresados WHERE id > 0 ";
        $data->carrera == 0 ? $query = $query."" : $query = $query." AND carrera = ".$data->carrera." ";
        $data->genero == -1 ? $query = $query."" : $query = $query." AND genero = ".$data->genero." ";
        empty( $data->anio_aplicacion ) ? $query = $query."" : $query = $query."AND YEAR( fecha_aplicacion) = ".$data->anio_aplicacion." ";
        empty( $data->anio_egreso ) ? $query = $query."" : $query = $query."AND fecha_graduacion = ".$data->anio_egreso." ";
        $data->estado == 0 ? $query = $query."" : $query = $query." AND status = ".$data->estado." ";


        print_r( $query );
        exit;



        $egresados = Egresado::all();
        return View::make('egresados')->with('egresados', $egresados );

    }

    public function getReporteEmpleador( Request $data ){


        $query = " SELECT * FROM empleadores WHERE id > 0 ";
        $data->genero == -1 ? $query = $query."" : $query = $query." AND genero = ".$data->genero." ";
        empty( $data->estado ) ? $query = $query."" : $query = $query."AND estado = upper('".$data->estado."') ";
        empty( $data->anio_aplicacion ) ? $query = $query."" : $query = $query."AND YEAR( fecha_aplicacion) = ".$data->anio_aplicacion." ";
        $data->status == 0 ? $query = $query."" : $query = $query." AND status = ".$data->status." ";

        print_r( $query );
        exit;




        $empleadores = Empleador::all();
        return View::make('empleadores')->with('empleadores', $empleadores );
    }

}
