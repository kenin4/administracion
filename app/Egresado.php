<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Encuesta;

class Egresado extends Model
{
    public function encuestas()
    {
    	return $this->belongsToMany('App\Encuesta', 'egresado_encuesta', 'egresado_id','encuesta_id');
    }
}
