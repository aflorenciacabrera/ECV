<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    //
    public function crearEncuesta (Request $request)
      {
        $e = new encuesta; 

        $e->name= $request->name;
    
        $e->save();
     // return view("institucion.mostrarCapacidad");
      return redirect(url('inicio'))->with('status','El usuario cliente fue registrado');;
      }
}
