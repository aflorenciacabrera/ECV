<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class individuo extends Model
{
    //
    public function hogar()
    {
        return $this->belongsTo('App\hogar');
    }

    public function nolaboral()
    {
        return $this->hasOne('App\hogarSeccionSeis');
    }
    public function caracteristicas()
    {
        return $this->hasOne('App\hogar_seccion_cuatro');
    }
}
