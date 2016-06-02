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
use Illuminate\Support\Facades\DB;
use View;

class ReporteController extends Controller
{
    /*
     * Obtiene todos los registros activos de la tabla de empleadores
     *
     * */

    public function getReporteEgresado( Request $data){

        $query = 'SELECT 	v.matricula as matricula,
			CONCAT(v.nombre, " " , v.apellidos ) as nombre,
			CASE ( v.genero )
				WHEN 1 THEN "Hombre"
				WHEN 0 THEN "Mujer"
			END as genero,
			v.correo as correo,
			u.codigo as codigo_encuesta,
			DATEDIFF(  ee.fecha_proxima_aplicacion, CURDATE() ) as estado_encuesta,
			ee.fecha_proxima_aplicacion as proxima_aplicacion

            FROM  	encuestas u, egresados v, egresado_encuesta ee
            WHERE 	ee.egresado_id = v.id AND
                    ee.encuesta_id 	= u.id ';



        $data->carrera == 0 ? $query = $query."" : $query = $query." AND carrera = ".$data->carrera." ";
        $data->genero == -1 ? $query = $query."" : $query = $query." AND v.genero = ".$data->genero." ";
        empty( $data->anio_aplicacion ) ? $query = $query."" : $query = $query." AND YEAR(ee.fecha_aplicacion) = ".$data->anio_aplicacion." ";
        empty( $data->anio_egreso ) ? $query = $query."" : $query = $query."AND v.fecha_graduacion = ".$data->anio_egreso." ";


        if( $data->status == 1 )
            $query = $query." AND DATEDIFF(  ee.fecha_proxima_aplicacion, CURDATE() ) > 0 ";
        if( $data->status == 2 )
            $query = $query." AND DATEDIFF(  ee.fecha_proxima_aplicacion, CURDATE() ) < 0 ";
        if( $data->status == 3 )
            $query = $query." AND DATEDIFF(  ee.fecha_proxima_aplicacion, CURDATE() ) > 0  AND  DATEDIFF(  ee.fecha_proxima_aplicacion, CURDATE() ) < 15";


        $query = $query." ORDER BY  estado_encuesta ASC";


        $egresados = DB::select( DB::raw( $query ) );

        return View::make('reportesEgresados')->with('egresados', $egresados );

    }

    public function getReporteEmpleador( Request $data ){






        $query = ' 	SELECT 	CONCAT(v.nombre, " " , v.apellidos ) as nombre_empleador,
                    CASE ( v.genero )
                        WHEN 1 THEN "Hombre"
                        WHEN 0 THEN "Mujer"
                    END as genero_empleador,
                    v.correo as correo_empleador,
                    u.codigo as codigo_encuesta,
                    DATEDIFF(  ee.fecha_proxima_aplicacion, CURDATE() ) as estado_encuesta,
                    ee.fecha_proxima_aplicacion as proxima_aplicacion

                    FROM  encuestas u, empleadores v, empleador_encuesta ee
                    WHERE 	ee.id_empleador = v.id AND
                            ee.id_encuesta 	= u.id ';


        $data->genero == -1 ? $query = $query."" : $query = $query." AND v.genero = ".$data->genero." ";
        empty( $data->estado ) ? $query = $query."" : $query = $query."AND v.estado =  upper('".$data->estado."') ";
        empty( $data->anio_aplicacion ) ? $query = $query."" : $query = $query."AND YEAR(ee.fecha_aplicacion) = ".$data->anio_aplicacion." ";

        if( $data->status == 1 )
            $query = $query." AND DATEDIFF(  ee.fecha_proxima_aplicacion, CURDATE() ) > 0 ";
        if( $data->status == 2 )
            $query = $query." AND DATEDIFF(  ee.fecha_proxima_aplicacion, CURDATE() ) < 0 ";
        if( $data->status == 3 )
            $query = $query." AND DATEDIFF(  ee.fecha_proxima_aplicacion, CURDATE() ) > 0  AND  DATEDIFF(  ee.fecha_proxima_aplicacion, CURDATE() ) < 15";


        $query = $query." ORDER BY  estado_encuesta ASC";

        $empleadores = DB::select( DB::raw( $query ) );

        return View::make('reportesEmpleadores')->with('empleadores', $empleadores );
    }

}
