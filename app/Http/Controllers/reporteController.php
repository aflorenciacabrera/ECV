<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\individuo;
class reporteController extends Controller
{
    public function reporte()
    {
        $individuos = individuo::all();

        return view('reportes.ingresos')->with('individuos', $individuos);
    }
}
