<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViviendaController extends Controller
{
    //

    public function verEncuestaVivienda(){
        return view('encuestaVivienda');
      }
     
      public function crearEncuestaVivienda (Request $request)
      {
        $v = new vivienda; 
        $v->codigo_area= $request->codigo_area;
       
        $v->save();
    }
}
