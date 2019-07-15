<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hogar;
use App\vivienda;
use Auth;
use App\hogarSeccionSeis;

class HogarController extends Controller
{
    /**
     * El hogar ya existe cuando se completa el formulario de vivienda
     * Entonces busco nomas el registro y lo devuelvo modo "editar"
     */
    public function verEncuestaHogar($hogar_id){
        $hogar = hogar::find($hogar_id);
        return view('encuestaHogar')->with('hogar',$hogar);
      }

    public function crearEncuestaHogar(Request $request)
      {
        //Actualizo Registro Hogar
        $h = hogar::find($request->hogar_id);
        $h->user_id = Auth::user()->id;
        $h->fill($request->all());
        $h->estado = 1;///cambio estado a completado
        $h->save();


        //actualizo seccion 6
        for ($i=0; $i < 20; $i++)
        {
            if($request['V2_M_'.$i])
            {
                //id de seccion
                $seccion_id = $request['id_seccion_'.$i];
                $s = hogarSeccionSeis::find($seccion_id);

                $s->V2_M = $request['V2_M_'.$i];
                $s->V21_M = $request['V21_M_'.$i];
                $s->V22_M = $request['V22_M_'.$i];
                $s->V3_M = $request['V3_M_'.$i];
                $s->V4_M = $request['V4_M_'.$i];
                $s->V5_M = $request['V5_M_'.$i];
                $s->V8_M = $request['V8_M_'.$i];
                $s->V9_M = $request['V9_M_'.$i];
                $s->V10_M = $request['V10_M_'.$i];
                $s->V11_M = $request['V11_M_'.$i];
                $s->V12_M = $request['V12_M_'.$i];
                $s->V18_M = $request['V18_M_'.$i];
                $s->V19_AM = $request['V19_AM_'.$i];
                ///sumatoria
                $s->T_Vi = $s->V2_M + $s->V21_M + $s->V22_M +$s->V3_M +$s->V4_M +$s->V5_M +$s->V8_M +$s->V9_M +$s->V10_M +$s->V11_M +$s->V12_M +$s->V18_M +$s->V19_AM;
                $s->save();
            }
        }

        return redirect()->route('verListadoVivienda');

      }


        public function autogenerar($id)
        {
        $h = new hogar;

        $h->user_id = Auth::user()->id;
        $h->vivienda_id = $id;
        $h->save();
        //TODO rediccionar a la vista de vivienda $h->vivienda->id;
        return redirect()->route('verListadoVivienda')->with('vivienda', $h->vivienda->id);
        }


}
