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

    public function ingresosNoLaborales()
    {
        $c = 0;
        if ($this->V2_M == -9) {
            $c=-9;
            return $c;
        }else{
            $c+= $this->V2_M;
        }

        if ($this->V21_M == -9) {
            $c=-9;
            return $c;
        }else{
            $c+= $this->V21_M;
        }

        if ($this->V22_M == -9) {
            $c=-9;
            return $c;
        }else{
            $c+= $this->V22_M;
        }

        if ($this->V3_M == -9) {
            $c=-9;
            return $c;
        }else{
            $c+= $this->V3_M;
        }

        if ($this->V4_M == -9) {
            $c=-9;
            return $c;
        }else{
            $c+= $this->V4_M;
        }

        if ($this->V5_M == -9) {
            $c=-9;
            return $c;
        }else{
            $c+= $this->V5_M;
        }

        if ($this->V8_M == -9) {
            $c=-9;
            return $c;
        }else{
            $c+= $this->V8_M;
        }

        if ($this->V9_M == -9) {
            $c=-9;
            return $c;
        }else{
            $c+= $this->V9_M;
        }

        if ($this->V10_M == -9) {
            $c=-9;
            return $c;
        }else{
            $c+= $this->V10_M;
        }

        if ($this->V11_M == -9) {
            $c=-9;
            return $c;
        }else{
            $c+= $this->V11_M;
        }

        if ($this->V12_M == -9) {
            $c=-9;
            return $c;
        }else{
            $c+= $this->V12_M;
        }

        if ($this->V18_M == -9) {
            $c=-9;
            return $c;
        }else{
            $c+= $this->V18_M;
        }

        if ($this->V19_AM == -9) {
            $c=-9;
            return $c;
        }else{
            $c+= $this->V19_AM;
        }

        /*$c = $this->PP06C == -9? -9 true : $c+= $this->PP06C;//Operador ternario: Si pp06c es igual a -9 suma 0 sino suma pp06c
        $c = $this->PP06D == -9? -9 true : $c+= $this->PP06D;
        $c = $this->PP06G == -9? -9 true : $c+= $this->PP06G;
        $c = $this->PP08D2 == -9? -9 true : $c+= $this->PP08D2;
        $c = $this->PP08D3 == -9? -9 true : $c+= $this->PP08D3;
        $c = $this->PP08D4 == -9? -9 true : $c+= $this->PP08D4;
        $c = $this->PP08J1 == -9? -9 true : $c+= $this->PP08J1;
        $c = $this->PP08J2 == -9? -9 true : $c+= $this->PP08J2;
        $c = $this->PP08J3 == -9? -9 true : $c+= $this->PP08J3;
        $c = $this->PP08F1 == -9? -9 true : $c+= $this->PP08F1;
        $c = $this->PP08F2 == -9? -9 true : $c+= $this->PP08F2;
        $c = $this->PP12B1 == -9? -9 true : $c+= $this->PP12B1;
        $c = $this->PP12B12 == -9? -9 true : $c+= $this->PP12B12;
        $c = $this->PP12B2 == -9? -9 true : $c+= $this->PP12B2;
        $c = $this->PP12B22 == -9? -9 true : $c+= $this->PP12B22;
        $c = $this->PP12B3 == -9? -9 true : $c+= $this->PP12B3;
        $c = $this->PP12B32 == -9? -9 true : $c+= $this->PP12B32;
*/      return $c;
    }
}
