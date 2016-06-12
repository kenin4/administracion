<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Encuesta;

class Empleador extends Model
{
    protected $table = 'empleadores';

    public function encuestas()
    {
    	return $this->belongsToMany('App\Encuesta', 'empleador_encuesta', 'id_empleador','id_encuesta');
    }
}
