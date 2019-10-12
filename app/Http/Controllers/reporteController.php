<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\individuo;
use App\hogar;
use App\vivienda;
class reporteController extends Controller
{
    public function reporte()
    {
        // $individuos = individuo::all();
        $viviendas = vivienda::all()->sortBy("codigo_area");//->take(10);
        // return view('reportes.individuos')->with('individuos', $individuos);
        return view('reportes.individuos')->with('viviendas', $viviendas);
    }

    public function hogares()
    {
        // $hogar = hogar::all();
        $viviendas = vivienda::all()->sortBy("codigo_area");//->take(10);;

        return view('reportes.hogares')->with('viviendas', $viviendas);
    }


}
