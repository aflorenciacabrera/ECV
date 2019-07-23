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
          $i = new individuo;
    // seccion I. IDENTIFICACIÓN
          $i->codigo_area= $request->codigo_area;
          $i->numero_listado= $request->numero_listado;
          $i->numero_semana= $request->numero_semana;
          $i->ano4= $request->ano4;
          $i->trimestre= $request->trimestre;
          $i->numero_vivienda = $request->numero_vivienda;
          $i->numero_hogar= $request->numero_hogar;
    //Parte 1
          $i->PP01A = $request->PP01A;
          $i->PP01B = $request->PP01B;
          $i->PP01C = $request->PP01C;
          $i->PP01D = $request->PP01D;
          $i->PP01E = $request->PP01E;
          $i->PP01F = $request->PP01F;
          $i->PP01G = $request->PP01G;
          $i->PP01H = $request->PP01H;
    //Parte 2
          $i->PP02A = $request->PP02A;
          $i->PP02B = $request->PP02B;
          $i->PP02C1 = $request->PP02C1;
          $i->PP02C2 = $request->PP02C2;
          $i->PP02C3 = $request->PP02C3;
          $i->PP02C4 = $request->PP02C4;
          $i->PP02C5 = $request->PP02C5;
          $i->PP02C6 = $request->PP02C6;
          $i->PP02C7 = $request->PP02C7;
          $i->PP02C8 = $request->PP02C8;
          $i->PP02D = $request->PP02D;
          $i->PP02E = $request->PP02E;
          $i->PP02F = $request->PP02F;
          $i->PP02G = $request->PP02G;
          $i->PP02H = $request->PP02H;
          $i->PP02I = $request->PP02I;
    //Parte 3
          $i->PP03A = $request->PP03A;
          $i->PP03B = $request->PP03B;
          $i->PP03C = $request->PP03C;
          $i->PP03D = $request->PP03D;
          $i->PP03E = $request->PP03E;
          $i->PP03F = $request->PP03F;
          $i->PP03G = $request->PP03G;
          $i->PP03H = $request->PP03H;
          $i->PP03I = $request->PP03I;
          $i->PP03J = $request->PP03J;
          $i->PP03K = $request->PP03K;
    //Parte 4
          $i->PP04A = $request->PP04A;
          $i->PP04B = $request->PP04B;
            $i->PP04B1 = $request->PP04B1;
            $i->PP04B2 = $request->PP04B2;
          $i->PP04B3_MES = $request->PP04B3_MES;
          $i->PP04B3_ANO = $request->PP04B3_ANO;
          $i->PP04B3_DIA = $request->PP04B3_DIA;
          $i->PP04C = $request->PP04C;
          $i->PP04C99 = $request->PP04C99;
          $i->PP04D = $request->PP04D;
          $i->PP04E = $request->PP04E;
          $i->PP04F = $request->PP04F;
          $i->PP04G = $request->PP04G;
    //Parte 5
          $i->PP05A = $request->PP05A;
          $i->PP05B = $request->PP05B;
          $i->PP05B1 = $request->PP05B1;
          $i->PP05B_MES = $request->PP05B_MES;
          $i->PP05B2_ANO = $request->PP05B2_ANO;
          $i->PP05B2_DIA = $request->PP05B2_DIA;
          $i->PP05C_1 = $request->PP05C_1;
          $i->PP05C_2 = $request->PP05C_2;
          $i->PP05C_3 = $request->PP05C_3;
          $i->PP05D = $request->PP05D;
          $i->PP05E = $request->PP05E;
          $i->PP05F = $request->PP05F;
          $i->PP05G = $request->PP05G;
          $i->PP05H = $request->PP05H;
    //Parte 6
          $i->PP06A = $request->PP06A;
          $i->PP06B = $request->PP06B;
          $i->PP06C = $request->PP06C;
          $i->PP06D = $request->PP06D;
          $i->PP06E = $request->PP06E;
          $i->PP06F = $request->PP06F;
          $i->PP06G = $request->PP06G;
          $i->PP06H = $request->PP06H;
          $i->PP06I = $request->PP06I;
          $i->PP06J = $request->PP06J;
          $i->PP06K = $request->PP06K;
          $i->PP06L = $request->PP06L;
    //Parte 7
          $i->PP07A = $request->PP07A;
          $i->PP07B = $request->PP07B;
          $i->PP07C = $request->PP07C;
          $i->PP07D = $request->PP07D;
          $i->PP07E = $request->PP07E;
          $i->PP07F1 = $request->PP07F1;
          $i->PP07F2 = $request->PP07F2;
          $i->PP07F3 = $request->PP07F3;
          $i->PP07F4 = $request->PP07F4;
          $i->PP07F5 = $request->PP07F5;
          $i->PP07G1 = $request->PP07G1;
          $i->PP07G2 = $request->PP07G2;
          $i->PP07G3 = $request->PP07G3;
          $i->PP07G4 = $request->PP07G4;
          $i->PP07G5 = $request->PP07G5;
          $i->PP07G6 = $request->PP07G6;
          $i->PP07H = $request->PP07H;
          $i->PP07I = $request->PP07I;
          $i->PP07J = $request->PP07J;
          $i->PP07K = $request->PP07K;
    //Parte 8
    $i->PP08A = $request->PP08A;
    $i->PP08B = $request->PP08B;
    $i->PP08C = $request->PP08C;
    $i->PP08D2 = $request->PP08D2;
    $i->PP08D3 = $request->PP08D3;
    $i->PP08D4 = $request->PP08D4;
    $i->PP08E = $request->PP08E;
    $i->PP08D2 = $request->PP08D2;

          $i->save();

        return redirect(url('home'))->with('status','Formulario de Encuensta Individuo cargado');;
        }
}
