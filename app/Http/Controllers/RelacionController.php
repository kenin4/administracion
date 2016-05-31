<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Encuesta;
use App\Egresado;
use App\Egresado_Encuesta;


class RelacionController extends Controller
{
    public function bind(Request $data)
    {
        $busqueda = Egresado_Encuesta::where('egresado_id' , '=', $data->egresado_id)->where('encuesta_id', '=', $data->encuesta_id);
        if (count($busqueda)!=0) {
            return redirect('/');
        }
        $relacion = new Egresado_Encuesta;
        
        $relacion->egresado_id = $data->egresado_id;
        $relacion->encuesta_id = $data->encuesta_id;

        $relacion->fecha_aplicacion = $data->fecha_aplicacion;
        $relacion->fecha_proxima_aplicacion = $data->fecha_proxima_aplicacion;

        $relacion->save();

        return redirect('/');
    }

}
