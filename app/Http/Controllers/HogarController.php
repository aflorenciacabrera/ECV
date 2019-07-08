<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hogar;
class HogarController extends Controller
{
    //
    public function verEncuestaHogar(){
        return view('encuestaHogar');
      }
      // public function verHogarseccion1(){
      //   return view('encuestaHogar/seccion_1');
      // }
      // public function verHogarseccion2(){
      //   return view('encuestaHogar/seccion_2');
      // }
      // public function verHogarseccion3(){
      //   return view('encuestaHogar/seccion_3');
      // }
      // public function verHogarseccion4(){
      //   return view('encuestaHogar/seccion_4');
      // }
      // public function verHogarseccion5(){
      //   return view('encuestaHogar/seccion_5');
      // }
      // public function verHogarseccion6(){
      //   return view('encuestaHogar/seccion_6');
      // }
      public function crearEncuestaHogar (Request $request)
        {
          $h = new hogar; 
  
          $h->codigo_area= $request->codigo_area;
          $h->numero_listado= $request->numero_listado;
          $h->numero_semana= $request->numero_semana;
          $h->trimestre= $request->trimestre;
          $h->anio= $request->anio;
          $h->numero_vivienda= $request->numero_vivienda;
          $h->numero_hogar= $request->numero_hogar;
          $h->respondiente= $request->respondiente;
          $h->visitas_fecha_hora_1= $request->visitas_fecha_hora_1;
          $h->visitas_fecha_hora_2= $request->visitas_fecha_hora_2;
          $h->visitas_fecha_hora_3= $request->visitas_fecha_hora_3;
          $h->visitas_fecha_hora_4= $request->visitas_fecha_hora_4;
          $h->visitas_fecha_hora_5= $request->visitas_fecha_hora_5;
          $h->entrevista_realizada= $request->entrevista_realizada;
          $h->modalidad_aplicacion= $request->modalidad_aplicacion;
          $h->encuestador= $request->encuestador;
          $h->numero_encuestador= $request->numero_encuestador;
  
          $h->save();
       
        return redirect(url('home'))->with('status','Formulario de Encuensta Hogar cargado');;
        }

       
}
