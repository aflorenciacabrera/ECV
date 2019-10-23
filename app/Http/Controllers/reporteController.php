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

    public function indicadores()
    {
        $viviendas = vivienda::all();
        $totales = $viviendas->count();
        $efectivas = vivienda::whereIn('CAUSAS',array('7','8','9'))->orWhereNull('CAUSAS')->get();

        $no_efectivas = vivienda::whereIn('CAUSAS', array('1', '2', '3', '4', '5', '6'))->get();
        $total_individuales = 0;
        $completos = 0;
        $incompletos = 0;
        $total_hogares = 0;
        $con_respuesta = $efectivas->where('CAUSAS', null);

        foreach ($viviendas as $vivienda) {
            // Por cada vivienda
            $total_hogares += $vivienda->hogares->count();
            foreach ($vivienda->hogares as $hogar) {
                // por cada hogar
                $total_individuales += $hogar->individuos->count();
                }
            }

        foreach ($con_respuesta as $v) {
                $v->completo() ? $completos++ : $incompletos++;
        }




        return view('reportes.indicadores',
                [
                    'totales'=>$totales,
                    'total_individuales'=>$total_individuales,
                'efectivas' => $efectivas->count(),
                'no_efectivas' => $no_efectivas->count(),
                'deshabitada'=> $no_efectivas->where('CAUSAS','1')->count(),
                                'demolida'=>$no_efectivas->where('CAUSAS','2')->count(),
                                'fin_de_semana'=>$no_efectivas->where('CAUSAS','3')->count(),
                                'construccion'=>$no_efectivas->where('CAUSAS','4')->count(),
                                'establecimiento' => $no_efectivas->where('CAUSAS', '5')->count(),
                                'variacion' => $no_efectivas->where('CAUSAS', '6')->count(),
                'sin_respuesta' => $efectivas->whereIn('CAUSAS',array('7','8','9'))->count(),
                'con_respuesta' => $con_respuesta->count(),
                'ausencias' => $efectivas->where('CAUSAS', '7')->count(),
                'rechazos' => $efectivas->where('CAUSAS', '8')->count(),
                'otros' => $efectivas->where('CAUSAS', '9')->count(),
                'completos'=>$completos,
                'incompletos' => $incompletos,


                ]
    );
    }


}
