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
use App\Encuesta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use View;

class ReporteController extends Controller
{

    public function index( ){

        $encuestasEgresados = Encuesta::where('tipo' , 1 )->get();
        $encuestasEmpleadores = Encuesta::where('tipo' , 0 )->get();
        return View::make('reportes')->with('encuestasEgresados', $encuestasEgresados )->with('encuestasEmpleadores', $encuestasEmpleadores );
    }

    /*
     * Obtiene todos los registros activos de la tabla de empleadores
     *
     * */

    public function getReporteEgresado( Request $data ){

        $query = 'SELECT                        
                        p.matricula,
                        p.correo,
                        CONCAT( p.nombre , " " , p.apellidos) as nombre,
                        p.carrera,
                        CASE ( p.genero )
                            WHEN 1 THEN "Hombre"
                            WHEN 0 THEN "Mujer"
                        END as genero,
                        p.fecha_aplicacion as fecha 

                         FROM ( 
                            SELECT * FROM egresados e LEFT JOIN egresado_encuesta ee ON e.id = ee.egresado_id 
                        ) p ';

        if( isset( $data->estado_encuesta ) && $data->estado_encuesta == 1 ) //la encuesta seleccionada fue respondida
            $query = $query.'WHERE encuesta_id = '.$data->id_encuesta.' AND estado != 1 ';
        else if ( isset( $data->estado_encuesta) && $data->estado_encuesta == 0 ) //la encuesta seleccionada No fue respondida
            $query = $query.'WHERE ( ISNULL( encuesta_id ) OR encuesta_id != '.$data->id_encuesta.' OR estado = 1 ) ';
        
        $data->carrera == 0 ? $query = $query."" : $query = $query." AND carrera = ".$data->carrera." ";
        $data->genero == -1 ? $query = $query."" : $query = $query." AND genero = ".$data->genero." ";
        empty( $data->generacion ) ? $query = $query."" : $query = $query." AND fecha_graduacion = ".$data->generacion." ";
                
        $query = $query." ORDER BY nombre ASC";

        empty( $data->generacion ) ? $generacion = -1 : $generacion = $data->generacion;


        $egresados = DB::select( DB::raw( $query ) );
        return View::make('reportesEgresados')->with('egresados', $egresados )->with('tipo_reporte', $data->carrera )->with('respuesta', $data->estado_encuesta )->with('generacion', $generacion );

    }




    

    public function getReporteEmpleador( Request $data ){


        $query = 'SELECT 
                    CONCAT( p.nombre , " " , p.apellidos ) as nombre ,
                    p.giro,
                    CONCAT( p.puesto , " en " , p.empresa ) as puesto,
                    CASE ( p.genero )
                        WHEN 1 THEN "Hombre"
                        WHEN 0 THEN "Mujer"
                    END as genero,
                    p.correo,
                    p.telefono,
                    p.fecha_aplicacion as fecha

                FROM (

                    SELECT * FROM empleadores e LEFT JOIN empleador_encuesta ee ON e.id = ee.id_empleador 
                    
                ) p ';


        if( $data->estado_encuesta == 1 ) //la encuesta seleccionada fue respondida
            $query = $query.'WHERE id_encuesta = '.$data->encuesta_id.' AND estatus != 1';
        else //la encuesta seleccionada No fue respondida
            $query = $query.'WHERE ( ISNULL( id_encuesta ) OR id_encuesta != '.$data->encuesta_id.' OR estatus = 1 ) ';


        $data->giro == 0 ? $query = $query."" : $query = $query." AND giro = ".$data->giro." ";
        $query = $query." ORDER BY nombre ASC";


        $empleadores = DB::select( DB::raw( $query ) );

        return View::make('reportesEmpleadores')->with('empleadores', $empleadores )->with('respuesta', $data->estado_encuesta )->with('tipo_reporte', $data->giro );
    }

}
