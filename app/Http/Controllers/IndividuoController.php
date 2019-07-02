<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndividuoController extends Controller
{
    //
    public function verEncuestaIndividuo(){
        return view('encuestaIndividuo');
      }

        public function crearEncuestaHogar (Request $request)
        {
          $i = new hogar; 
  
        
          // $h->numero_encuestador= $request->numero_encuestador;
  
          $i->save();
       
        return redirect(url('home'))->with('status','Formulario de Encuensta Individuo cargado');;
        }
}
