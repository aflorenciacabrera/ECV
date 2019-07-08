<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\individuo;
class IndividuoController extends Controller
{
    //
    public function verEncuestaIndividuo(){
        return view('encuestaIndividuo');
      }

        public function crearEncuestaIndividuo (Request $request)
        {
          $i = new individuo; 
  
        
          // $h->numero_encuestador= $request->numero_encuestador;
  
          $i->save();
       
        return redirect(url('home'))->with('status','Formulario de Encuensta Individuo cargado');;
        }
}
