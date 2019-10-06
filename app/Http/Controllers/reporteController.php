<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\individuo;
use App\hogar;
class reporteController extends Controller
{
    public function reporte()
    {
        $individuos = individuo::all()->take(100);

        return view('reportes.ingresos')->with('individuos', $individuos);
    }


}
