<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Egresado;

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
}
