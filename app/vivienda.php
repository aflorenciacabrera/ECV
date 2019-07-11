<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vivienda extends Model
{
    //
    public function hogar()
    {
        return $this->hasMany('App\hogar');
    }
}
