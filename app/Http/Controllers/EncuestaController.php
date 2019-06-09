<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\encuesta;
class EncuestaController extends Controller
{
    //

    public function verEncuesta(){
      return view('encuesta');
    }
    public function verseccion1(){
      return view('encuesta/seccion_1');
    }
    public function verseccion2(){
      return view('encuesta/seccion_2');
    }
    public function verseccion3(){
      return view('encuesta/seccion_3');
    }
    public function verseccion4(){
      return view('encuesta/seccion_4');
    }
    public function verseccion5(){
      return view('encuesta/seccion_5');
    }
    public function verseccion6(){
      return view('encuesta/seccion_6');
    }
    public function crearEncuesta (Request $request)
      {
        $e = new encuesta; 

        $e->codigo_area= $request->codigo_area;
        $e->numero_listado= $request->numero_listado;
        $e->numero_semana= $request->numero_semana;
        $e->trimestre= $request->trimestre;
        $e->anio= $request->anio;
        $e->numero_vivienda= $request->numero_vivienda;
        $e->numero_hogar= $request->numero_hogar;
        $e->respondiente= $request->respondiente;
        $e->visitas_fecha_hora_1= $request->visitas_fecha_hora_1;
        $e->visitas_fecha_hora_2= $request->visitas_fecha_hora_2;
        $e->visitas_fecha_hora_3= $request->visitas_fecha_hora_3;
        $e->visitas_fecha_hora_4= $request->visitas_fecha_hora_4;
        $e->visitas_fecha_hora_5= $request->visitas_fecha_hora_5;
        $e->entrevista_realizada= $request->entrevista_realizada;
        $e->modalidad_aplicacion= $request->modalidad_aplicacion;
        $e->encuestador= $request->encuestador;
        $e->numero_encuestador= $request->numero_encuestador;

        $e->save();
     
      return redirect(url('home'))->with('status','Formulario de Encuensta cargado');;
      }
}
