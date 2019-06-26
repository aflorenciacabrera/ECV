<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\encuesta;
use App\vivienda;
class ViviendaController extends Controller
{
    //

    public function verEncuestaVivienda(){
        return view('encuestaVivienda');
      }

    public function crearEncuestaVivienda(Request $request)
    {
      $v = new vivienda;
      // seccion I. IDENTIFICACIÓN
      $v->codigo_area = $request->codigo_area;
      $v->numero_listado = $request->numero_listado;
      $v->numero_vivienda = $request->numero_vivienda;
      $v->numero_semana = $request->numero_semana;
      $v->grupo_rotacion = $request->grupo_rotacion;
      $v->hogar1 = $request->hogar1;
      $v->hogar2 = $request->hogar2;
      // seccion II. UBICACIÓN
      $v->manz = $request->manz;
      $v->lado = $request->lado;
      $v->calle = $request->calle;
      $v->numero = $request->numero;
      $v->piso = $request->piso;
      $v->deptoocasa = $request->deptoocasa;
      $v->habitacion = $request->habitacion;
      $v->tipoVivienda = $request->tipoVivienda;
      $v->descripcion = $request->descripcion;
      

      
      $v->save();

      return redirect(url('home'))->with('status', 'Formulario de Encuensta cargado');;
    }
}
