<?php

namespace App\Http\Controllers;

use App\individuo;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function reporte_general()
    {
    	$individuos = individuo::with('hogar_seccion_cuatro', 'hogarSeccionSeis', 'hogar')->get()->take(2);
    	dd($individuos);
    }
}
