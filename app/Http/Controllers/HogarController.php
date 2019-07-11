<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hogar;
use App\vivienda;
use Auth;
class HogarController extends Controller
{
    //
    public function verEncuestaHogar($vivienda_id){
        $v = vivienda::find($vivienda_id);
        return view('encuestaHogar')->with('vivienda',$v);
      }

      public function crearEncuestaHogar (Request $request)
        {
          $h = new hogar;
    // I. Identificación
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
    // II. Caracteristicas Habitacionales del Hogar (sólo para hogares que responden por primera vez o mal tomado en la participación anterior)
          $h->II1= $request->II1;
          $h->II2= $request->II2;
          $h->II3= $request->II3;
          $h->II3_1= $request->II3_1;
          $h->II4_1= $request->II4_1;
          $h->II4_2= $request->II4_2;
          $h->II4_3= $request->II4_3;
          $h->II5= $request->II5;
          $h->II5_1= $request->II5_1;
          $h->II6= $request->II6;
          $h->II6_1= $request->II6_1;
          $h->II7= $request->II7;
          $h->II7_Esp= $request->II7_Esp;
          $h->II8= $request->II8;
          $h->II8_Esp= $request->II8_Esp;
          $h->II9= $request->II9;
    // III . EXCLUSIVAMENTE PARA HOGARES DE PENSIONISTAS Y SERVICIO DOMÉSTICO CON CAMA
          $h->III1_1= $request->III1_1;
          $h->III1_2= $request->III1_2;
          $h->III2= $request->III2;
    // IV. CARACTERÍSTICAS DE LOS MIEMBROS DEL HOGAR
           $h->CH01 = $request->CH01;
           $h->CH02 = $request->CH02;
           $h->CH03 = $request->CH03;
           $h->CH04 = $request->CH04;
           $h->CH05 = $request->CH05;
           $h->CH06 = $request->CH06;
           $h->CH07 = $request->CH07;
           $h->CH08 = $request->CH08;
           $h->CH08_A = $request->CH08_A;
           $h->CH08_B = $request->CH08_B;
           $h->CH08_C = $request->CH08_C;
           $h->CH08_D = $request->CH08_D;
           $h->CH09 = $request->CH09;
           $h->CH10 = $request->CH10;
           $h->CH10_E = $request->CH10_E;
           $h->CH10_M = $request->CH10_M;
           $h->CH10_G = $request->CH10_G;
           $h->CH11 = $request->CH11;
           $h->CH12 = $request->CH12;
           $h->CH13 = $request->CH13;
           $h->CH14 = $request->CH14;
           $h->CH15 = $request->CH15;
           $h->CH15_Cod = $request->CH15_Cod;
           $h->CH16 = $request->CH16;
           $h->CH16_Cod = $request->CH16_Cod;
           $h->CH24 = $request->CH24;
           $h->CH25 = $request->CH25;
    // V. ESTRATEGIAS DEL HOGAR
          $h->V1= $request->V1;
          $h->V2= $request->V2;
          $h->V3= $request->V3;
          $h->V4= $request->V4;
          $h->V5= $request->V5;
          $h->V6= $request->V6;
          $h->V7= $request->V7;
          $h->V8= $request->V8;
          $h->V9= $request->V9;
          $h->V10= $request->V10;
          $h->V11= $request->V11;
          $h->V12= $request->V12;
          $h->V13= $request->V13;
          $h->V14= $request->V14;
          $h->V15= $request->V15;
          $h->V16= $request->V16;
          $h->V17= $request->V17;
          $h->V18= $request->V18;
          $h->V19_A= $request->V19_A;
          $h->V19_B= $request->V19_B;
    // VI. Ingreso no laborales
          $h->VImes= $request->VImes;
          $h->VIcobr= $request->VIcobr;
          $h->V2_M= $request->V2_M;
          $h->V21_M= $request->V21_M;
          $h->V22_M= $request->V22_M;
          $h->V3_M= $request->V3_M;
          $h->V4_M= $request->V4_M;
          $h->V5_M= $request->V5_M;
          $h->V8_M= $request->V8_M;
          $h->V9_M= $request->V9_M;
          $h->V10_M= $request->V10_M;
          $h->V11_M= $request->V11_M;
          $h->V12_M= $request->V12_M;
          $h->V18_M= $request->V18_M;
          $h->V19_AM= $request->V19_AM;
          $h->T_Vi= $request->T_Vi;
    // HOGAR - PLANES Y PROGRAMAS GUBERNAMENTALES
          $h->DI= $request->DI;
          $h->DI_1= $request->DI_1;
          $h->AI= $request->AI;
          $h->AI_1= $request->AI_1;
          $h->MI= $request->MI;
          $h->MI_1= $request->MI_1;
          $h->TSA= $request->TSA;
          $h->TSA_1= $request->TSA_1;
          $h->TSA_2= $request->TSA_2;
          $h->TV= $request->TV;
          $h->TV_1= $request->TV_1;
          $h->TE= $request->TE;
          $h->TE_1= $request->TE_1;
          $h->TM= $request->TM;
          $h->TM_1= $request->TM_1;
          $h->TS= $request->TS;
          $h->TS_1= $request->TS_1;
          $h->PM= $request->PM;
          $h->PM_1= $request->PM_1;
          $h->BE= $request->BE;
          $h->BE_1= $request->BE_1;
          $h->AUH= $request->AUH;
          $h->AUH_1= $request->AUH_1;
          $h->AUH_2= $request->AUH_2;
          $h->AUH_3= $request->AUH_3;
    // VII. ORGANIZACIÓN DEL HOGAR
          $h->VII1= $request->VII1;
          $h->VII2= $request->VII2;
          $h->VII3= $request->VII3;
    // RAZON POR LA CUAL NO SE REALIZÓ LA ENTREVISTA
          $h->motivo= $request->motivo;
          $h->ausencia= $request->ausencia;
          $h->rechazo= $request->rechazo;
          $h->otro= $request->otro;
          $h->informante= $request->informante;
          $h->observaciones= $request->observaciones;
    // XI. CONTROL DE CAMPO DE LA RECUPERACIÓN DE AUSENCIAS,RECHAZOS Y OTRAS CAUSAS(hogares)
          $h->supervision= $request->supervision;
          $h->super_nombre= $request->super_nombre;
          $h->super_num= $request->super_num;
          $h->r_visitas_fecha_hora_1= $request->r_visitas_fecha_hora_1;
          $h->r_visitas_fecha_hora_2= $request->r_visitas_fecha_hora_2;
          $h->r_visitas_fecha_hora_3= $request->r_visitas_fecha_hora_3;
          $h->r_visitas_fecha_hora_4= $request->r_visitas_fecha_hora_4;
          $h->r_visitas_fecha_hora_5= $request->r_visitas_fecha_hora_5;
          $h->entrega= $request->entrega;
          $h->mal_tomado= $request->mal_tomado;

    $h->save();

        return redirect(url('home'))->with('status','Formulario de Encuensta Hogar cargado');;
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
