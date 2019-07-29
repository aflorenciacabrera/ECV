<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hogar;
use App\vivienda;
use Auth;
use App\hogarSeccionSeis;
use App\hogar_seccion_cuatro;

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

    public function verIndividuos($hogar_id)
    {
        $h = hogar::find($hogar_id);
        return view('individuos_en_hogar')->with('hogar',$h);
    }



    public function crearEncuestaHogar(Request $request)
      {
        //Actualizo Registro Hogar
        $h = hogar::find($request->hogar_id);
        if($h)
        {
          echo "Continue";
        }
        else
        {
          return "No se Encontro el Hogar"
        }
        $h->user_id = Auth::user()->id;
        $h->fill($request->all());
        $h->estado = 1;///cambio estado a completado
        $h->save();

        //actualizo seccion 4
        for ($i = 0; $i < 20; $i++) {
            if ($request['carateristica_id_' . $i]) {
                //id de seccion
                $carateristica_id = $request['carateristica_id_' . $i];
                $c = hogar_seccion_cuatro::find($carateristica_id);
                  if($c)
                  {
                    echo "Continue";
                  }
                  else
                  {
                    return "No se Encontro caracteristica del hogar"
                  }
               $c->CH01 = $request['CH01_'.$i];
               $c->CH02 = $request['CH02_'.$i];
               $c->CH03 = $request['CH03_'.$i];
               $c->CH04 = $request['CH04_'.$i];
               $c->CH05 = $request['CH05_'.$i];
               $c->CH06 = $request['CH06_'.$i];
               $c->CH07 = $request['CH07_'.$i];
               $c->CH08 = $request['CH08_'.$i];
               $c->CH08_A = $request['CH08_A_'.$i];
               $c->CH08_B = $request['CH08_B_'.$i];
               $c->CH08_C = $request['CH08_C_'.$i];
               $c->CH08_D = $request['CH08_D_'.$i];
               $c->CH09 = $request['CH09_'.$i];
               $c->CH10 = $request['CH10_'.$i];
               $c->CH10_E = $request['CH10_E_'.$i];
               $c->CH10_M = $request['CH10_M_'.$i];
               $c->CH10_G = $request['CH10_G_'.$i];
               $c->CH11 = $request['CH11_'.$i];
               $c->CH12 = $request['CH12_'.$i];
               $c->CH13 = $request['CH13_'.$i];
               $c->CH14 = $request['CH14_'.$i];
               $c->CH15 = $request['CH15_'.$i];
               $c->CH15_Cod = $request['CH15_Cod_'.$i];
               $c->CH16 = $request['CH16_'.$i];
               $c->CH16_Cod = $request['CH16_Cod_'.$i];
               $c->CH24 = $request['CH24_'.$i];
               $c->CH25 = $request['CH25_'.$i];

                $c->save();
            }
        }


        //actualizo seccion 6
        for ($i=0; $i < 20; $i++)
        {
            if($request['id_seccion_'.$i])
            {
                //id de seccion
                $seccion_id = $request['_'.$i];
                $s = hogarSeccionSeis::find($seccion_id);
                if($s)
                {
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
        }

        // return redirect()->route('verListadoVivienda');
        return redirect(route("individuosEnHogar",['hogar'=>$h->id]));

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
