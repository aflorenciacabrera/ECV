<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\individuo;
use App\hogar;
class reporteController extends Controller
{
    public function reporte()
    {
        $individuos = individuo::all();

        return view('reportes.individuos')->with('individuos', $individuos);
    }

    public function hogares()
    {
        $hogar = hogar::all();

        return view('reportes.hogares')->with('hogares', $hogar);
    }


}
