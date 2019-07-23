<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\individuo;
class IndividuoController extends Controller
{
      //

    public function verEncuestaIndividuo($individuo_id){
        // return view('encuestaIndividuo');
        $individuo = individuo::find($individuo_id);
        return view('encuestaIndividuo')->with('individuo', $individuo);
      }

        public function crearEncuestaIndividuo (Request $request)
        {
          $i = individuo::find($request->individuo_id);

           $i->fill($request->all()) ;
        //    print_r($request->input());
        $i->estado = 1;
          $i->save();

        //   return "ok";
        return redirect(route("individuosEnHogar", ['hogar' => $i->hogar_id]));

        // return redirect(url('home'))->with('status','Formulario de Encuensta Individuo cargado');;
        }
}
