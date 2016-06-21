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
        $i=0;
        foreach ($data->egresados as $egresado) {
            # code...

            $busqueda = Egresado_Encuesta::where('egresado_id' , '=', $data->egresados[$i])->where('encuesta_id', '=', $data->encuesta_id)->get();
            if (count($busqueda)!=0) {
                    foreach ($busqueda as $existente) {
                        $existente->status=1;
                        $existente->save();
                    }
                }
            else
            {
                $relacion = new Egresado_Encuesta;
            
                $relacion->egresado_id = $data->egresados[$i];
                $relacion->encuesta_id = $data->encuesta_id;
                $hoy=date('Y-m-d');
                $relacion->fecha_aplicacion = $hoy;
                $nueva_fecha = date('Y-m-d',strtotime('+12 months', strtotime($hoy)));
                $relacion->fecha_proxima_aplicacion =$nueva_fecha;

                $relacion->save(); 
            }
                
                /*$egresado = Egresado::find($data->egresado_id);
                return \View::make('messages')->with('type','alert-info')->with('title','Atención!')->with('mensaje','Este egresado ya tiene asociada esta encuesta. Intenta actualizar la fecha de aplicacion de la encuesta para enviarla nuevamente');
                //var_dump($egresado);
                //echo "|" . $egresado->correo. "|";
                $encuesta = Encuesta::find($data->encuesta_id);
                \Mail::send('email', ['egresado' => $egresado, 'encuesta' => $encuesta], function($message) use ($egresado, $encuesta)
                {
                    $message->to($egresado->correo, $egresado->nombre . " " . $egresado->apellidos)->subject('Invitación a Encuesta');
                });*/
                $i++;
                
            }
            
           
           

        
        


        
        $egresado = Egresado::find($data->egresado_id);
        //var_dump($egresado);
        //echo "|" . $egresado->correo. "|";
        $encuesta = Encuesta::find($data->encuesta_id);

        \Mail::send('email', ['encuesta' => $encuesta], function($message) use ($data)
        {
            $message->to($data->correos, "UTM")->subject('Invitación a Encuesta');
        });
        return \View::make('messages')->with('type','alert-success')->with('title','Éxito!')->with('mensaje','Se ha enviado un correo con la dirección de la encuesta');

        /*
        \Mail::send('email', ['egresado' => $egresado, 'encuesta' => $encuesta], function($message) use ($egresado, $encuesta)
        {
            $message->to($egresado->correo, $egresado->nombre . " " . $egresado->apellidos)->subject('Invitación a Encuesta');
        });
        return \View::make('messages')->with('type','alert-success')->with('title','Éxito!')->with('mensaje','Se ha enviado un correo con la dirección de la encuesta');
        */
    }

    public function bindEmpleador(Request $data)
    {
        var_dump($data->correos);
        var_dump($data->empleadores);

        $i=0;
        foreach ($data->empleadores as $empleador) {
            # code...

            $busqueda = Empleador_Encuesta::where('id_empleador' , '=', $data->empleadores[$i])->where('id_encuesta', '=', $data->encuesta_id)->get();
            if (count($busqueda)!=0) {
                    foreach ($busqueda as $existente) {
                        $existente->status=1;
                        $existente->save();
                    }
                }
            else
            {
                $relacion = new Empleador_Encuesta;
            
                $relacion->id_empleador = $data->empleadores[$i];
                $relacion->id_encuesta = $data->encuesta_id;
                $hoy=date('Y-m-d');
                $relacion->fecha_aplicacion = $hoy;
                $nueva_fecha = date('Y-m-d',strtotime('+12 months', strtotime($hoy)));
                $relacion->fecha_proxima_aplicacion =$nueva_fecha;

                $relacion->save(); 
            }
                
                /*$egresado = Egresado::find($data->egresado_id);
                return \View::make('messages')->with('type','alert-info')->with('title','Atención!')->with('mensaje','Este egresado ya tiene asociada esta encuesta. Intenta actualizar la fecha de aplicacion de la encuesta para enviarla nuevamente');
                //var_dump($egresado);
                //echo "|" . $egresado->correo. "|";
                $encuesta = Encuesta::find($data->encuesta_id);
                \Mail::send('email', ['egresado' => $egresado, 'encuesta' => $encuesta], function($message) use ($egresado, $encuesta)
                {
                    $message->to($egresado->correo, $egresado->nombre . " " . $egresado->apellidos)->subject('Invitación a Encuesta');
                });*/
                $i++;
                
            }
            
           
           

        
        

        
        
        $egresado = Egresado::find($data->egresado_id);
        //var_dump($egresado);
        //echo "|" . $egresado->correo. "|";
        $encuesta = Encuesta::find($data->encuesta_id);

        \Mail::send('email', ['encuesta' => $encuesta], function($message) use ($data)
        {
            $message->to($data->correos, "UTM")->subject('Invitación a Encuesta');
        });
        return \View::make('messages')->with('type','alert-success')->with('title','Éxito!')->with('mensaje','Se ha enviado un correo con la dirección de la encuesta');

        /*
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
        return \View::make('messages')->with('type','alert-success')->with('title','Éxito!')->with('mensaje','Se ha enviado un correo con la dirección de la encuesta');*/
    }

    public function email(Request $data)
    {
        var_dump($data->egresados);
        echo "<br>";
        var_dump($data->correos);
        echo "<br>";
        var_dump($data->vigencia);
        echo "<br>";

        /*
        $hola=[ "2011020360" , "2011020021" ,"32322122" ,"32323332" ,"232323" ];
        var_dump($hola);
        \Mail::send('email', [], function($message) use ($data)
        {
            $message->to($data->egresados, "kevin")->subject('Invitación a Encuesta');
        });
        return \View::make('messages')->with('type','alert-success')->with('title','Éxito!')->with('mensaje','Se ha enviado un correo con la dirección de la encuesta');*/
    }

}
