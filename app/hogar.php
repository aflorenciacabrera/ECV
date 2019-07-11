<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hogar extends Model
{
    //
    public function vivienda()
    {
        return $this->belongsTo('App\vivienda');
    }
    public function individuos()
    {
        return $this->hasMany('App\individuos');
    }
}
