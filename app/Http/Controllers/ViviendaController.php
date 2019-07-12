<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\vivienda;
use Auth;
class ViviendaController extends Controller
{


    public function verEncuestaVivienda(){
        return view('encuestaVivienda');
      }

    public function crearEncuestaVivienda(Request $request)
    {
        $v = new vivienda;
        $v->user_id = Auth::user()->id;
        $v->fill($request->all());
        $v->save();
        return redirect(url('home'))->with('status', 'Formulario de Encuensta Vivienda cargado');;
    }

    public function crearEncuestaVivienda2(Request $request)
    {
    $v = new vivienda;
    $v->user_id = Auth::user()->id;
    // seccion I. IDENTIFICACIÓN
    $v->codigo_area = $request->codigo_area;
    $v->numero_listado = $request->numero_listado;
    $v->numero_vivienda = $request->numero_vivienda;
    $v->numero_semana = $request->numero_semana;
    $v->grupo_rotacion = $request->grupo_rotacion;
    $v->telefono_hogar1 = $request->telefono_hogar1;
    $v->telefono_hogar2 = $request->telefono_hogar2;
    // seccion II. UBICACIÓN
    $v->manz = $request->manz;
    $v->lado = $request->lado;
    $v->calle = $request->calle;
    $v->numero = $request->numero;
    $v->piso = $request->piso;
    $v->deptoocasa = $request->deptoocasa;
    $v->habitacion = $request->habitacion;
    $v->tipoVivienda = $request->tipoVivienda;
    $v->descripcion = $request->descripcion;
    //  Particion
    $v->trimestre=$request->trimestre;
    $v->ano4=$request->ano4;
    $v->sem_referencia=$request->sem_referencia;
    $v->cant_hogar=$request->cant_hogar;
    $v->p_entrevistada=$request->p_entrevistada;
    $v->visitas_fecha_hora_1=$request->visitas_fecha_hora_1;
    $v->visitas_fecha_hora_2=$request->visitas_fecha_hora_2;
    $v->visitas_fecha_hora_3=$request->visitas_fecha_hora_3;
    $v->visitas_fecha_hora_4=$request->visitas_fecha_hora_4;
    $v->visitas_fecha_hora_5=$request->visitas_fecha_hora_5;
    $v->entrevista_realizada=$request->entrevista_realizada;
    $v->modalidad_aplicacion=$request->modalidad_aplicacion;
    $v->encuestador=$request->encuestador;
    $v->numero_encuestador=$request->numero_encuestador;
    $v->acompaniamiento=$request->acompaniamiento;
    $v->nombre=$request->nombre;
    $v->numero=$request->numero;
    //  Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
    $v->otra_viv_direc=$request->otra_viv_direc;
    $v->comparten_gastos=$request->comparten_gastos;
    $v->N_hogar_viv=$request->N_hogar_viv;
    $v->domestico_cama_adentro=$request->domestico_cama_adentro;
    $v->pensionistas=$request->pensionistas;
    //Seccion IV. CARACTERÍSTICA DE LA VIVIENDA
    $v->IV1= $request->IV1;
    $v->IV1_Esp= $request->IV1_Esp;
    $v->IV2= $request->IV2;
    $v->IV3= $request->IV3;
    $v->IV3_Esp= $request->IV3_Esp;
    $v->IV4= $request->IV4;
    $v->IV5= $request->IV5;
    $v->IVE= $request->IVE;
    $v->IV6= $request->IV6;
    $v->IV7= $request->IV7;
    $v->IV7_Esp= $request->IV7_Esp;
    $v->IV8= $request->IV8;
    $v->IV9= $request->IV9;
    $v->IV10= $request->IV10;
    $v->IV11= $request->IV11;
    $v->IV12_1= $request->IV12_1;
    $v->IV12_2= $request->IV12_2;
    $v->IV12_3= $request->IV12_3;
    $v->IV14= $request->IV14;
    $v->IV15= $request->IV15;
    // Seccion V. CODICIÓN DE RESIDENCIA
    $v->NRO_HOGAR = $request->NRO_HOGAR;
    $v->NRO_COMPONENTE = $request->NRO_COMPONENTE;
    $v->NOMBRE_JEFE = $request->NOMBRE_JEFE;
    $v->VIVIO_SEM = $request->VIVIO_SEM;
    $v->VIVIO_MES = $request->VIVIO_MES;
    $v->FIJAR_RES = $request->FIJAR_RES;
    $v->ESTABA = $request->ESTABA;
    $v->AUSENCIA = $request->AUSENCIA;
    $v->OTRA_RES = $request->OTRA_RES;
    // Seccion VI CONTROL DE CAMBIOS
    $v->NO_ESTABA = $request->NO_ESTABA;
    $v->CAMBIOS = $request->CAMBIOS;
    $v->MOTIVO = $request->MOTIVO;
    $v->CH13 = $request->CH13;
    $v->CH14 = $request->CH14;
    $v->CH15 = $request->CH15;
    $v->CH16 = $request->CH16;
    //Seccion VII. CAUSAS POR LA QUE NO SE REALIZÓ LA ENTREVISTA
    //  participación
    $v->CAUSAS=$request->CAUSAS;
    $v->DESHABILITADA=$request->DESHABILITADA;
    $v->DEMOLIDA=$request->DEMOLIDA;
    $v->FIN_DE_SEMANA=$request->FIN_DE_SEMANA;
    $v->CONSTRUCCION=$request->CONSTRUCCION;
    $v->ESTABLECIMIENTO=$request->ESTABLECIMIENTO;
    $v->VARIACION=$request->VARIACION;
    $v->AUSENCIA=$request->AUSENCIA;
    $v->RECHAZO=$request->RECHAZO;
    $v->OTRO=$request->OTRO;
    $v->INFORMANTE=$request->INFORMANTE;

    //Seccion  VIII . CONTROL DE CAMPO DE LA RECUPERACIÓN DE AUSENCIAS,RECHAZOS Y OTRAS CAUSAS
    //  participación
    $v->supervision=$request->supervision;
    $v->num_super=$request->num_super;
    $v->visita_1=$request->visita_1;
    $v->visita_2=$request->visita_2;
    $v->visita_3=$request->visita_3;
    $v->modalidad=$request->modalidad;
    $v->entrega=$request->entrega;
    $v->observaciones=$request->observaciones;

    $v->save();


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





}
