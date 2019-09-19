<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hogarSeccionSeis extends Model
{
    protected $table = 'hogar_seccion_seis';
    protected $fillable = ['hogar_id', 'individuo_id', 'V2_M', 'V21_M', 'V22_M', 'V3_M', 'V4_M', 'V5_M', 'V8_M', 'V9_M', 'V10_M', 'V11_M', 'V12_M', 'V18_M', 'V19_AM', 'T_Vi'];

    public function individuo()
    {
        return $this->belongsTo(individuo::class, 'individuo_id', 'id');
    }
}
