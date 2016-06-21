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

class MainController extends Controller
{

    public function index( ){

        
        $query = '
                SELECT 
                        CONCAT( u.nombre , " " , u.apellidos ) as nombre ,
                        u.matricula,
                        u.carrera,
                        u.fecha_graduacion as generacion,
                        v.codigo as encuesta,
                        p.fecha_aplicacion as aplicacion,
                        p.fecha_proxima_aplicacion as proxima,
                        DATEDIFF(  p.fecha_proxima_aplicacion , CURDATE() ) as diferencia,
                        p.estado,
                        p.egresado_id as id_egresado,
                        p.encuesta_id as id_encuesta
                        

                FROM egresado_encuesta p , egresados u , encuestas v 
                WHERE u.id = p.egresado_id AND v.id = p.encuesta_id
                ORDER BY diferencia DESC
                ';

        $egresados = DB::select( DB::raw( $query ) );

        $query = '
                SELECT 
                        CONCAT( u.nombre , " " , u.apellidos ) as nombre ,
                        CONCAT( u.puesto , " en " , u.empresa ) as puesto ,
                        v.codigo as encuesta,
                        p.fecha_aplicacion as aplicacion,
                        p.fecha_proxima_aplicacion as proxima,
                        DATEDIFF(  p.fecha_proxima_aplicacion , CURDATE() ) as diferencia,
                        p.estatus as estado,
                        p.id_empleador,
                        p.id_encuesta
                        

                FROM empleador_encuesta p , empleadores u , encuestas v 
                WHERE u.id = p.id_empleador AND v.id = p.id_encuesta
                ORDER BY diferencia DESC

                ';

        $empleadores = DB::select( DB::raw( $query ) );

        return View::make('prueba')->with( 'relaciones', $egresados  )->with( 'empleadores', $empleadores  );
    }

}
