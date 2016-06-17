<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Encuesta;
use View;

class EncuestaController extends Controller
{
    public function showAll()
    {
        $encuestas = Encuesta::all();
        return View::make('encuestas')->with('encuestas', $encuestas);
    }

    public function addEncuesta(Request $data)
    {        
        $encuesta = new Encuesta;
        $encuesta->codigo = $data->codigo;
        $encuesta->nombre = $data->nombre;
        $encuesta->descripcion = $data->descripcion;
        $encuesta->link = $data->link;
        $encuesta->tipo = $data->tipo;
        $encuesta->save();

        return redirect()->action('EncuestaController@showAll');
    }


    public function editEncuesta(Request $data)
    {        
        $encuesta = Encuesta::find($data->id);
        $encuesta->codigo = $data->codigo;
        $encuesta->nombre = $data->nombre;
        $encuesta->descripcion = $data->descripcion;
        $encuesta->link = $data->link;
        $encuesta->tipo = $data->tipo;
        $encuesta->save();

        return redirect()->action('EncuestaController@showAll');
    }

    public function deleteEncuesta($id)
    {
        $encuesta = Encuesta::find($id);
        $encuesta->forceDelete();
        return "Éxito";
    }
}
