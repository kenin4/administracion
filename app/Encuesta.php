<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Egresado;
use App\Empleador;

class Encuesta extends Model
{
    //

    public $timestamps = false;

    public function usuario()
    {
    	return $this->belongsTo('App\User','id_usuario');
    }

    public function egresados()
    {
        return $this->belongsToMany('App\Egresado', 'egresado_encuesta', 'encuesta_id','egresado_id');
    }

    public function empleadores()
    {
        return $this->belongsToMany('App\Empleador', 'empleador_encuesta', 'id_encuesta','id_empleador');
    }
}
