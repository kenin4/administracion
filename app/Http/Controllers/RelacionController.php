<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Encuesta;
use App\Egresado;
use App\Empleador;
use App\Egresado_Encuesta;
use App\Empleador_Encuesta;


class RelacionController extends Controller
{
    public function bindEgresado(Request $data)
    {
        $busqueda = Egresado_Encuesta::where('egresado_id' , '=', $data->egresado_id)->where('encuesta_id', '=', $data->encuesta_id)->get();
        if (count($busqueda)!=0) {
            $egresado = Egresado::find($data->egresado_id);
            return \View::make('messages')->with('type','alert-info')->with('title','Atención!')->with('mensaje','Este egresado ya tiene asociada esta encuesta. Intenta actualizar la fecha de aplicacion de la encuesta para enviarla nuevamente');
            //var_dump($egresado);
            //echo "|" . $egresado->correo. "|";
            $encuesta = Encuesta::find($data->encuesta_id);
            \Mail::send('email', ['egresado' => $egresado, 'encuesta' => $encuesta], function($message) use ($egresado, $encuesta)
            {
                $message->to($egresado->correo, $egresado->nombre . " " . $egresado->apellidos)->subject('Invitación a Encuesta');
            });
            
        }
        $relacion = new Egresado_Encuesta;
        
        $relacion->egresado_id = $data->egresado_id;
        $relacion->encuesta_id = $data->encuesta_id;

        $relacion->fecha_aplicacion = $data->fecha_aplicacion;
        $relacion->fecha_proxima_aplicacion = $data->fecha_proxima_aplicacion;

        $relacion->save();
        
        $egresado = Egresado::find($data->egresado_id);
        //var_dump($egresado);
        //echo "|" . $egresado->correo. "|";
        $encuesta = Encuesta::find($data->encuesta_id);
        \Mail::send('email', ['egresado' => $egresado, 'encuesta' => $encuesta], function($message) use ($egresado, $encuesta)
        {
            $message->to($egresado->correo, $egresado->nombre . " " . $egresado->apellidos)->subject('Invitación a Encuesta');
        });
        return \View::make('messages')->with('type','alert-success')->with('title','Éxito!')->with('mensaje','Se ha enviado un correo con la dirección de la encuesta');
    }

    public function bindEmpleador(Request $data)
    {
        $busqueda = Empleador_Encuesta::where('id_empleador' , '=', $data->empleador_id)->where('id_encuesta', '=', $data->encuesta_ide)->get();
        if (count($busqueda)!=0) {
            return \View::make('messages')->with('type','alert-info')->with('title','Atención!')->with('mensaje','Este empleador ya tiene asociada esta encuesta. Intenta actualizar la fecha de aplicacion de la encuesta para enviarla nuevamente');
            $empleador = Empleador::find($data->empleador_id);
            //var_dump($empleador);
            //echo "|" . $empleador->correo. "|";
            $encuesta = Encuesta::find($data->encuesta_ide);
            \Mail::send('email', ['egresado' => $empleador, 'encuesta' => $encuesta], function($message) use ($empleador, $encuesta)
            {
                $message->to($empleador->correo, $empleador->nombre . " " . $empleador->apellidos)->subject('Invitación a Encuesta');
            });
            return \View::make('messages')->with('type','alert-success')->with('title','Éxito!')->with('mensaje','Se ha enviado un correo con la dirección de la encuesta');
            
        }
        $relacion = new Empleador_Encuesta;
        
        $relacion->id_empleador = $data->empleador_id;
        $relacion->id_encuesta = $data->encuesta_ide;

        $relacion->fecha_aplicacion = $data->fecha_aplicacione;
        $relacion->fecha_proxima_aplicacion = $data->fecha_proxima_aplicacione;

        $relacion->save();
        
        $empleador = Empleador::find($data->empleador_id);
        //var_dump($empleador);
        //echo "|" . $empleador->correo. "|";
        $encuesta = Encuesta::find($data->encuesta_ide);
        \Mail::send('email', ['egresado' => $empleador, 'encuesta' => $encuesta], function($message) use ($empleador, $encuesta)
        {
            $message->to($empleador->correo, $empleador->nombre . " " . $empleador->apellidos)->subject('Invitación a Encuesta');
        });
        return \View::make('messages')->with('type','alert-success')->with('title','Éxito!')->with('mensaje','Se ha enviado un correo con la dirección de la encuesta');
    }

}
