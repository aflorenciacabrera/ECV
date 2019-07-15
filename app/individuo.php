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
}
