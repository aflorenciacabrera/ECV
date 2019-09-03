<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\vivienda;
use Auth;
use App\hogar;
use App\hogarSeccionSeis;
use App\vivienda_seccion_v;
use App\individuo;

use App\hogar_seccion_cuatro;

class ViviendaController extends Controller
{


    public function verEncuestaVivienda()
    {
        return view('encuestaVivienda')->with('editar',false);
    }

    public function editarVivienda($id_vivienda){
        $v = vivienda::find($id_vivienda);

        return view('encuestaVivienda')->with('editar',true)->with('vivienda',$v);
    }

    public function actualizarVivienda(request $request)
    {
        $v = vivienda::find($request->vivienda_id);
        $v->fill($request->all());
        $v->save();


        return redirect(route("verListadoVivienda"));
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


                //guardo cada nombre de inviduo para el individual solo si es residente
                if (!($request['ESTABA_' . $i] == 1 ||
                    $request['ESTABA_' . $i] == 2 ||
                    $request['AUSENCIA_' . $i] == 2 ||
                    $request['NO_ESTABA_' . $i] == 4 ||
                    $request['NO_ESTABA_' . $i] == 5 ||
                    $request['NO_ESTABA_' . $i] == 6 ||
                    $request['NO_ESTABA_' . $i] == 7 ||
                    $request['NO_ESTABA_' . $i] == 8 ||
                    $request['OTRA_RES_' . $i] == 1 ))
                {
                    $_componentes[$request['NRO_HOGAR_' . $i]][$request['NRO_COMPONENTE_' . $i]] = $request['NOMBRE_JEFE_' . $i];//nombre
                }
                //creo registro de vivienda_seccion_5
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
        // print_r($_componentes);
        $hogares = (array_unique(($_hogares)));
        // creo el registro de cada hogar ??
        //Cuantos hogares son?
        foreach ($hogares as $value)
        {
            $h = new hogar();
            $h->vivienda_id = $vivienda_id;
            $h->numero_hogar = $value;
            print_r($value);
            print_r($h->numero_hogar);
            // campos similares
            $h->codigo_area = $v->codigo_area;
            $h->numero_listado = $v->numero_listado;
            $h->numero_semana = $v->numero_semana;
            $h->trimestre = $v->trimestre;
            $h->ano4 = $v->ano4;
            $h->numero_vivienda = $v->numero_vivienda;


            //
            $h->user_id = Auth::user()->id;
            $h->save();
           if(sizeOf($_componentes))
           {
                foreach ($_componentes[$value] as $nro_componente => $nombre) {
                    // cre el registro de cada individuo ??
                    $hogar_id = $h->id;
                    $individuo = new individuo();
                    $individuo->hogar_id = $hogar_id;
                    $individuo->user_id = Auth::user()->id;

                    $individuo->numero_componente = $nro_componente;
                    $individuo->nombre = $nombre;


                    //
                    $individuo->codigo_area = $v->codigo_area;
                    $individuo->numero_listado = $v->numero_listado;
                    $individuo->numero_semana = $v->numero_semana;
                    $individuo->trimestre = $v->trimestre;
                    $individuo->ano4 = $v->ano4;
                    $individuo->numero_vivienda = $v->numero_vivienda;
                    $individuo->numero_hogar = $h->numero_hogar;


                    //

                    $individuo->save();
                    // Tambien creo registro de la seccion 6 de hogar por cada coso
                    $seccion4 = new hogar_seccion_cuatro();
                    $seccion4->hogar_id = $hogar_id;
                    $seccion4->individuo_id = $individuo->id;
                    $seccion4->save();
                    //TODO no asignable

                    // Tambien creo registro de la seccion 6 de hogar por cada coso
                    $seccion6 = new hogarSeccionSeis();
                    $seccion6->hogar_id = $hogar_id;
                    $seccion6->individuo_id = $individuo->id;
                    $seccion6->save();
                    //TODO no asignable
                }
           }
        }



        return redirect(route("viviendaok",['id_vivienda=>'=>$v->id]));
        // return redirect(route('verHogares',['id_vivienda'=>$v->id]));

    }


    public function verListadoVivienda()
    {
        if(Auth::user()->rol == "admin")
        {
            $viviendas = vivienda::all();
            // echo"admin";
        }
        else
        {

            $viviendas = Auth::user()->viviendas;
        }
        // $viviendas = vivienda::all();

        return view("listadoVivienda")->with('viviendas',$viviendas);
    }

    public function verVivienda($id)
    {
        //TODO trae listado pero para eso necesitamos hacer la clave en la base de datos
        return "... en contruccion";
    }



    public function verHogares($id_vivienda)
    {
        $vivienda = vivienda::find($id_vivienda);

        //TODO aca mandamos al listado de hogares de la vivienda
        // pero si tiene un solo hogar podriamos mandar directo al hogar pero bueno la proxima nomas

        return view('hogares_en_vivienda')->with('vivienda',$vivienda);
    }

    public function ok($id_vivienda)
    {
        $vivienda = vivienda::find($id_vivienda);
        return view('viviendaok')->with('vivienda',$vivienda);
    }





}
