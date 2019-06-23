<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HogarController extends Controller
{
    //
    public function verEncuestaHogar(){
        return view('encuestaHogar');
      }
      public function verHogarseccion1(){
        return view('encuestaHogar/seccion_1');
      }
      public function verHogarseccion2(){
        return view('encuestaHogar/seccion_2');
      }
      public function verHogarseccion3(){
        return view('encuestaHogar/seccion_3');
      }
      public function verHogarseccion4(){
        return view('encuestaHogar/seccion_4');
      }
      public function verHogarseccion5(){
        return view('encuestaHogar/seccion_5');
      }
      public function verHogarseccion6(){
        return view('encuestaHogar/seccion_6');
      }
      public function crearEncuestaHogar (Request $request)
        {
          $e = new encuesta; 
  
          // $e->codigo_area= $request->codigo_area;
          // $e->numero_listado= $request->numero_listado;
          // $e->numero_semana= $request->numero_semana;
          // $e->trimestre= $request->trimestre;
          // $e->anio= $request->anio;
          // $e->numero_vivienda= $request->numero_vivienda;
          // $e->numero_hogar= $request->numero_hogar;
          // $e->respondiente= $request->respondiente;
          // $e->visitas_fecha_hora_1= $request->visitas_fecha_hora_1;
          // $e->visitas_fecha_hora_2= $request->visitas_fecha_hora_2;
          // $e->visitas_fecha_hora_3= $request->visitas_fecha_hora_3;
          // $e->visitas_fecha_hora_4= $request->visitas_fecha_hora_4;
          // $e->visitas_fecha_hora_5= $request->visitas_fecha_hora_5;
          // $e->entrevista_realizada= $request->entrevista_realizada;
          // $e->modalidad_aplicacion= $request->modalidad_aplicacion;
          // $e->encuestador= $request->encuestador;
          // $e->numero_encuestador= $request->numero_encuestador;
  
          $e->save();
       
        return redirect(url('home'))->with('status','Formulario de Encuensta cargado');;
        }

        public function verEncuestaVivienda(){
          return view('encuestaVivienda');
        }
        public function verEncuestaIndividuo(){
          return view('encuestaIndividuo');
        }
}
