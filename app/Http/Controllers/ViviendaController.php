<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\vivienda;
use Auth;
use App\hogar;
use App\vivienda_seccion_v;
use App\individuo;

class ViviendaController extends Controller
{


    public function verEncuestaVivienda(){
        return view('encuestaVivienda');
      }

    public function crearEncuestaVivienda(Request $request)
    {

        ///creo el registro de vivienda
        $v = new vivienda;
        $v->user_id = Auth::user()->id;
        $v->fill($request->all());
        $v->save();

        //grabo registro seccion v
        $vivienda_id = $v->id;
        $_hogares = array();//guardo todos los numeros de hogar para despues
        $_componentes = array();//guardo los individuales por cada hogar para crear los individuales
        for ($i=1; $i <= 14; $i++)
        {
            if($request['NRO_HOGAR_'.$i])///existe
            {
                //
                //guardo cada hogar
                $_hogares[] = $request['NRO_HOGAR_' . $i];
                //guardo cada nombre de inviduo
                $_componentes[$request['NRO_HOGAR_' . $i]][$request['NRO_COMPONENTE_' . $i]] = $request['NOMBRE_JEFE_' . $i];//nombre

                $vs = new vivienda_seccion_v();
                $vs->vivienda_id = $vivienda_id;
                $vs->NRO_HOGAR = $request['NRO_HOGAR_'.$i];
                $vs->NRO_COMPONENTE = $request['NRO_COMPONENTE_'.$i];
                $vs->NOMBRE_JEFE = $request['NOMBRE_JEFE_'.$i];
                $vs->VIVIO_SEM = $request['VIVIO_SEM_'.$i];
                $vs->VIVIO_MES = $request['VIVIO_MES_'.$i];
                $vs->FIJAR_RES = $request['FIJAR_RES_'.$i];
                $vs->ESTABA = $request['ESTABA_'.$i];
                $vs->AUSENCIA = $request['AUSENCIA_'.$i];
                $vs->OTRA_RES = $request['OTRA_RES_'.$i];
                $vs->NO_ESTABA = $request['NO_ESTABA_'.$i];
                $vs->CAMBIOS = $request['CAMBIOS_'.$i];
                $vs->MOTIVO = $request['MOTIVO_'.$i];
                $vs->MOTIVO_OTRO = $request['MOTIVO_OTRO_'.$i];
                $vs->CH13 = $request['CH13_'.$i];
                $vs->CH14 = $request['CH14_'.$i];
                $vs->CH14_OTRO = $request['CH14_OTRO_'.$i];
                $vs->CH15 = $request['CH15_'.$i];
                $vs->CH16 = $request['CH16_'.$i];
                $vs->CH16_OTRO = $request['CH16_OTRO_'.$i];
                $vs->save();
            }
        }
        print_r($_componentes);
        $hogares = (array_unique(($_hogares)));
        // creo el registro de cada hogar ??
        //Cuantos hogares son?
        foreach ($hogares as $key => $value)
        {
            $h = new hogar();
            $h->vivienda_id = $vivienda_id;
            $h->numero_hogar = $value;
            $h->user_id = Auth::user()->id;
            $h->save();
            foreach ($_componentes[$value] as $nro_componente => $nombre)
            {
                // cre el registro de cada individuo ??
                $hogar_id = $h->id;
                $individuo = new individuo();
                $individuo->hogar_id = $hogar_id;
                $individuo->user_id = Auth::user()->id;
                $individuo->nro_componente = $nro_componente;
                $individuo->nombre = $nombre;
                $individuo->save();

            }
        }



        return redirect(url('home'))->with('status', 'Formulario de Encuensta Vivienda cargado');;

    }


    public function verListadoVivienda()
    {
        $viviendas = Auth::user()->viviendas    ;
        // $viviendas = vivienda::all();

        return view("listadoVivienda")->with('viviendas',$viviendas);
    }

    public function verVivienda($id)
    {
        //TODO trae listado pero para eso necesitamos hacer la clave en la base de datos
        return "... en contruccion";
    }

    public function autogenerar(){


        $v = new vivienda;

        $v->user_id = Auth::user()->id;
        $v->save();
        //devuelvo el ultimo generado
        return redirect()->route('verListadoVivienda')->with('vivienda',$v->id);

    }

    public function verHogares($id_vivienda)
    {
        $vivienda = vivienda::find($id_vivienda);

        //TODO aca mandamos al listado de hogares de la vivienda
        // pero si tiene un solo hogar podriamos mandar directo al hogar pero bueno la proxima nomas

        return view('hogares_en_vivienda')->with('vivienda',$vivienda);
    }





}
