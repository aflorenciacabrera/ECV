<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\vivienda;
use Auth;
use App\hogar;
use App\hogarSeccionSeis;
use App\vivienda_seccion_v;
use App\individuo;
use DB;
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

        /** CREAR UN REGISTRO DE VIVIEDA */
            $v = new vivienda;
            $v->user_id = Auth::user()->id;
            $v->fill($request->all());
            $v->save();
        /** VIVIENDA CREADA */


        $vivienda_id = $v->id; //handshake

        /**
         * CREO ARREGLOS PARA OCNTAR
         */
            $_hogares = array(); //guardo todos los numeros de hogar para despues
            $_componentes = array(); //guardo los individuales por cada hogar para crear los individuales
            $_residencia = array();//guardo los individuales por cada hogar para crear los individuales
        /** */
        /**
         * RECORRO Y CONTROLO LOS CAMPOS DEL CUATRO DE HOGAR
         */
        for ($i=1; $i <= 25; $i++)
        {
            if($request['NRO_HOGAR_'.$i])///existe
            {
                /**GUARDO EL HOGAR PARA COMPLETAR DESPUES */
                    $_hogares[] = $request['NRO_HOGAR_' . $i];

                /**GUARDO UNA MATRIZ [hogar][componente] */
                    $_componentes[$request['NRO_HOGAR_' . $i]][$request['NRO_COMPONENTE_' . $i]] = $request['NOMBRE_JEFE_' . $i];//nombre
                /**GUARDO CONDICION DE RESIDENCIA */
                 if (
                     (!(
                            $request['ESTABA_' . $i] == 1 ||///7
                            $request['ESTABA_' . $i] == 2 ||//7
                            $request['AUSENCIA_' . $i] == 1 ||//8
                            $request['NO_ESTABA_' . $i] == 4 ||//10
                            $request['NO_ESTABA_' . $i] == 5 ||//10
                            $request['NO_ESTABA_' . $i] == 6 ||//10
                            $request['NO_ESTABA_' . $i] == 7 ||//10
                            $request['NO_ESTABA_' . $i] == 8 ||//10
                            $request['OTRA_RES_' . $i] == 1  ||
                            $request['CAMBIOS_'.$i] == 3 || 
                            $request['CAMBIOS_'.$i] == 4 ||
                            $request['CH13_'.$i] == 3 || 
                            $request['CH13_'.$i] == 4 ||
                            $request['CH15_' . $i] == 3 || 
                            $request['CH15_' . $i] == 4))
                    )//9
                {
                    echo "ES RESIDENTE";
                    $_residencia[$request['NRO_HOGAR_' . $i]][$request['NRO_COMPONENTE_' . $i]] = true;
                }
                else
                {
                    echo "NO RESIDENTE!";
                    $_residencia[$request['NRO_HOGAR_' . $i]][$request['NRO_COMPONENTE_' . $i]] = false;
                }


                /*
                 * GUARDO TABLA SECCION 5 de VIVIENDA
                 */
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
                /** FIN GUARGAR TABLA SECCION 5 de VIVIENDA */
            }
        }

        /**QUITO LOS REPETIDOS DE LOS ID DE HOGARES */
        $hogares = (array_unique(($_hogares)));

        /**CREO LOS REGISTROS EN HOGARES */
        foreach ($hogares as $value)
        {
            /**CREO UN REGISTRO HOGAR */
                $h = new hogar();
                $h->vivienda_id = $vivienda_id;
                $h->numero_hogar = $value;
                // campos similares con vivienda para precargar
                $h->codigo_area = $v->codigo_area;
                $h->numero_listado = $v->numero_listado;
                $h->numero_semana = $v->numero_semana;
                $h->trimestre = $v->trimestre;
                $h->ano4 = $v->ano4;
                $h->numero_vivienda = $v->numero_vivienda;
                $h->user_id = Auth::user()->id;
                $h->save();
            /*** FIN CREAR HOGAR*/

            //**RECORRO LA MATRIZ DE COMPONENTES PARA CREAR LOS REGISTROS INDIVIDUALES */
                foreach ($_componentes[$value] as $nro_componente => $nombre) {

                    $hogar_id = $h->id; //hand shake
                //**CREO INDIVIDUAL */
                /**REGISTRO SECCION 4 de HOGARES */
                $seccion4 = new hogar_seccion_cuatro();
                $seccion4->hogar_id = $hogar_id;
                /**REGISTRO SECCION 6 de HOGARES */
                $seccion6 = new hogarSeccionSeis();
                $seccion6->hogar_id = $hogar_id;
                    if($_residencia[$value][$nro_componente])
                    {
                        $individuo = new individuo();
                        $individuo->hogar_id = $hogar_id;
                        $individuo->user_id = Auth::user()->id;

                        $individuo->numero_componente = $nro_componente;
                        $individuo->nombre = $nombre;

                        $individuo->codigo_area = $v->codigo_area;
                        $individuo->numero_listado = $v->numero_listado;
                        $individuo->numero_semana = $v->numero_semana;
                        $individuo->trimestre = $v->trimestre;
                        $individuo->ano4 = $v->ano4;
                        $individuo->numero_vivienda = $v->numero_vivienda;
                        $individuo->numero_hogar = $h->numero_hogar;
                        $individuo->save();

                    //
                    $seccion4->individuo_id = $individuo->id;
                    $seccion6->individuo_id = $individuo->id;
                    }
                    /** FIN CREO INDIVIDUAL */
                    $seccion4->save();
                    $seccion6->save();

                }
        //    }
        }



        return redirect(route("viviendaok",['id_vivienda=>'=>$v->id]));


    }


    public function verListadoVivienda()
    {
        //busco trimestre actual
        $trimestre = vivienda::all()->sortByDesc('id')->first()->trimestre;
        return $this->verListadoViviendaTrimestre($trimestre);
    }

    public function verListadoViviendaTrimestre($t)
    {

        $y = '2019';

        if(Auth::user()->rol == "admin")
        {
            $viviendas = vivienda::where('trimestre',$t)->where('ano4',$y)->orderBy("codigo_area")->get();
        }
        else if(Auth::user()->rol == "supervisor")
        {
            $date = \Carbon\Carbon::today()->subDays(7);

            $viviendas = vivienda::where('created_at', '>=', $date)->get();
            // $viviendas = vivienda::where('trimestre', $t)->where('ano4', $y)->orderBy("codigo_area")->get();
            // dd($viviendas);
        }
        else
        {
            $viviendas = Auth::user()->viviendas->where('trimestre',$t)->where('ano4',$y)->sortBy("codigo_area");
        }

        $tr = DB::table('viviendas')->select(['ano4','trimestre'])->distinct()->orderByDesc('trimestre')->get();
        // print($t);
        return view("listadoVivienda")->with('viviendas',$viviendas)->with('trimestres',$tr)->with('seleccionado',$t);
    }




    public function borrarVivienda($vivienda_id){
        if(Auth::user()->rol == 'admin')
        {
            $v = vivienda::find($vivienda_id);
            $v->borrar();
        }
        return redirect(route('verListadoVivienda'));
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
