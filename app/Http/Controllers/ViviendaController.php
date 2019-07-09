<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\encuesta;
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
    // seccion I. IDENTIFICACIÓN
    $v->codigo_area = $request->codigo_area;
    $v->numero_listado = $request->numero_listado;
    $v->numero_vivienda = $request->numero_vivienda;
    $v->numero_semana = $request->numero_semana;
    $v->grupo_rotacion = $request->grupo_rotacion;
    $v->hogar1 = $request->hogar1;
    $v->hogar2 = $request->hogar2;
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
    // Primera Particion
    $v->p1_trimestre = $request->p1_trimestre;
    $v->p1_anio = $request->p1_anio;
    $v->p1_sem_referencia = $request->p1_sem_referencia;
    $v->p1_cant_hogar = $request->p1_cant_hogar;
    $v->p1_p_entrevistada = $request->p1_p_entrevistada;
    $v->p1_visitas_fecha_hora_1 = $request->p1_visitas_fecha_hora_1;
    $v->p1_visitas_fecha_hora_2 = $request->p1_visitas_fecha_hora_2;
    $v->p1_visitas_fecha_hora_3 = $request->p1_visitas_fecha_hora_3;
    $v->p1_visitas_fecha_hora_4 = $request->p1_visitas_fecha_hora_4;
    $v->p1_visitas_fecha_hora_5 = $request->p1_visitas_fecha_hora_5;
    $v->p1_entrevista_realizada = $request->p1_entrevista_realizada;
    $v->p1_modalidad_aplicacion = $request->p1_modalidad_aplicacion;
    $v->p1_encuestador = $request->p1_encuestador;
    $v->p1_numero_encuestador = $request->p1_numero_encuestador;
    $v->p1_acompaniamiento = $request->p1_acompaniamiento;
    $v->p1_nombre = $request->p1_nombre;
    $v->p1_numero = $request->p1_numero;
    // Primera Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
    $v->p1_otra_viv_direc = $request->p1_otra_viv_direc;
    $v->p1_comparten_gastos = $request->p1_comparten_gastos;
    $v->p1_N_hogar_viv = $request->p1_N_hogar_viv;
    $v->p1_domestico_cama_adentro = $request->p1_domestico_cama_adentro;
    $v->p1_pensionistas = $request->p1_pensionistas;
    // Segunda Particion
    $v->p2_trimestre = $request->p2_trimestre;
    $v->p2_anio = $request->p2_anio;
    $v->p2_sem_referencia = $request->p2_sem_referencia;
    $v->p2_cant_hogar = $request->p2_cant_hogar;
    $v->p2_p_entrevistada = $request->p2_p_entrevistada;
    $v->p2_visitas_fecha_hora_1 = $request->p2_visitas_fecha_hora_1;
    $v->p2_visitas_fecha_hora_2 = $request->p2_visitas_fecha_hora_2;
    $v->p2_visitas_fecha_hora_3 = $request->p2_visitas_fecha_hora_3;
    $v->p2_visitas_fecha_hora_4 = $request->p2_visitas_fecha_hora_4;
    $v->p2_visitas_fecha_hora_5 = $request->p2_visitas_fecha_hora_5;
    $v->p2_entrevista_realizada = $request->p2_entrevista_realizada;
    $v->p2_modalidad_aplicacion = $request->p2_modalidad_aplicacion;
    $v->p2_encuestador = $request->p2_encuestador;
    $v->p2_numero_encuestador = $request->p2_numero_encuestador;
    $v->p2_acompaniamiento = $request->p2_acompaniamiento;
    $v->p2_nombre = $request->p2_nombre;
    $v->p2_numero = $request->p2_numero;
    // Segunda Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
    $v->p2_otra_viv_direc = $request->p2_otra_viv_direc;
    $v->p2_comparten_gastos = $request->p2_comparten_gastos;
    $v->p2_N_hogar_viv = $request->p2_N_hogar_viv;
    $v->p2_domestico_cama_adentro = $request->p2_domestico_cama_adentro;
    $v->p2_pensionistas = $request->p2_pensionistas;
    // Tercera Particion
    $v->p3_trimestre = $request->p3_trimestre;
    $v->p3_anio = $request->p3_anio;
    $v->p3_sem_referencia = $request->p3_sem_referencia;
    $v->p3_cant_hogar = $request->p3_cant_hogar;
    $v->p3_p_entrevistada = $request->p3_p_entrevistada;
    $v->p3_visitas_fecha_hora_1 = $request->p3_visitas_fecha_hora_1;
    $v->p3_visitas_fecha_hora_2 = $request->p3_visitas_fecha_hora_2;
    $v->p3_visitas_fecha_hora_3 = $request->p3_visitas_fecha_hora_3;
    $v->p3_visitas_fecha_hora_4 = $request->p3_visitas_fecha_hora_4;
    $v->p3_visitas_fecha_hora_5 = $request->p3_visitas_fecha_hora_5;
    $v->p3_entrevista_realizada = $request->p3_entrevista_realizada;
    $v->p3_modalidad_aplicacion = $request->p3_modalidad_aplicacion;
    $v->p3_encuestador = $request->p3_encuestador;
    $v->p3_numero_encuestador = $request->p3_numero_encuestador;
    $v->p3_acompaniamiento = $request->p3_acompaniamiento;
    $v->p3_nombre = $request->p3_nombre;
    $v->p3_numero = $request->p3_numero;
    // Tercera Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
    $v->p3_otra_viv_direc = $request->p3_otra_viv_direc;
    $v->p3_comparten_gastos = $request->p3_comparten_gastos;
    $v->p3_N_hogar_viv = $request->p3_N_hogar_viv;
    $v->p3_domestico_cama_adentro = $request->p3_domestico_cama_adentro;
    $v->p3_pensionistas = $request->p3_pensionistas;
    // Cuarta Particion
    $v->p4_trimestre = $request->p4_trimestre;
    $v->p4_anio = $request->p4_anio;
    $v->p4_sem_referencia = $request->p4_sem_referencia;
    $v->p4_cant_hogar = $request->p4_cant_hogar;
    $v->p4_p_entrevistada = $request->p4_p_entrevistada;
    $v->p4_visitas_fecha_hora_1 = $request->p4_visitas_fecha_hora_1;
    $v->p4_visitas_fecha_hora_2 = $request->p4_visitas_fecha_hora_2;
    $v->p4_visitas_fecha_hora_3 = $request->p3_visitas_fecha_hora_3;
    $v->p4_visitas_fecha_hora_4 = $request->p4_visitas_fecha_hora_4;
    $v->p4_visitas_fecha_hora_5 = $request->p4_visitas_fecha_hora_5;
    $v->p4_entrevista_realizada = $request->p4_entrevista_realizada;
    $v->p4_modalidad_aplicacion = $request->p4_modalidad_aplicacion;
    $v->p4_encuestador = $request->p4_encuestador;
    $v->p4_numero_encuestador = $request->p4_numero_encuestador;
    $v->p4_acompaniamiento = $request->p4_acompaniamiento;
    $v->p4_nombre = $request->p4_nombre;
    $v->p4_numero = $request->p4_numero;
    // Cuarta Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
    $v->p4_otra_viv_direc = $request->p4_otra_viv_direc;
    $v->p4_comparten_gastos = $request->p4_comparten_gastos;
    $v->p4_N_hogar_viv = $request->p4_N_hogar_viv;
    $v->p4_domestico_cama_adentro = $request->p4_domestico_cama_adentro;
    $v->p4_pensionistas = $request->p4_pensionistas;
    // Seccion IV. CARACTERÍSTICA DE LA VIVIENDA
    $v->tipo_viv = $request->tipo_viv;
    $v->tipo_viv_otro = $request->tipo_viv_otro;
    $v->ambientes = $request->ambientes;
    $v->piso_int = $request->piso_int;
    $v->piso_int_otro = $request->piso_int_otro;
    $v->cubierta_exterior = $request->cubierta_exterior;
    $v->cielorraso = $request->cielorraso;
    $v->electricidad = $request->electricidad;
    $v->agua = $request->agua;
    $v->tipo_agua = $request->tipo_agua;
    $v->tipo_agua_otro = $request->tipo_agua_otro;
    $v->banio = $request->banio;
    $v->banio_lugar = $request->banio_lugar;
    $v->banio_tiene = $request->banio_tiene;
    $v->desague = $request->desague;
    $v->basural = $request->basural;
    $v->inundable = $request->inundable;
    $v->villa = $request->villa;
    $v->internet = $request->internet;
    $v->conexion = $request->conexion;
    // Seccion V. CODICIÓN DE RESIDENCIA
    $v->CH01 = $request->CH01;
    $v->CH02 = $request->CH02;
    $v->CH03 = $request->CH03;
    $v->CH04 = $request->CH04;
    $v->CH05 = $request->CH05;
    $v->CH06 = $request->CH06;
    $v->CH07 = $request->CH07;
    $v->CH08 = $request->CH08;
    $v->CH09 = $request->CH09;
    // Seccion VI CONTROL DE CAMBIOS
    $v->CH10 = $request->CH10;
    $v->CH11 = $request->CH11;
    $v->CH12 = $request->CH12;
    $v->CH13 = $request->CH13;
    $v->CH14 = $request->CH14;
    $v->CH15 = $request->CH15;
    $v->CH16 = $request->CH16;
    //Seccion VII. CAUSAS POR LA QUE NO SE REALIZÓ LA ENTREVISTA
    // Primera participación
    $v->p1_no_entrevista= $request->p1_no_entrevista;
    $v->p1_no_entrevista_1= $request->p1_no_entrevista_1;
    $v->p1_no_entrevista_2= $request->p1_no_entrevista_2;
    $v->p1_no_entrevista_3= $request->p1_no_entrevista_3;
    $v->p1_no_entrevista_4= $request->p1_no_entrevista_4;
    $v->p1_no_entrevista_5= $request->p1_no_entrevista_5;
    $v->p1_no_entrevista_6= $request->p1_no_entrevista_6;
    $v->p1_no_entrevista_7= $request->p1_no_entrevista_7;
    $v->p1_no_entrevista_8= $request->p1_no_entrevista_8;
    $v->p1_no_entrevista_9= $request->p1_no_entrevista_9;
    $v->p1_observaciones= $request->p1_observaciones;
    // Segunda participación
    $v->p2_no_entrevista= $request->p2_no_entrevista;
    $v->p2_no_entrevista_1= $request->p2_no_entrevista_1;
    $v->p2_no_entrevista_2= $request->p2_no_entrevista_2;
    $v->p2_no_entrevista_3= $request->p2_no_entrevista_3;
    $v->p2_no_entrevista_4= $request->p2_no_entrevista_4;
    $v->p2_no_entrevista_5= $request->p2_no_entrevista_5;
    $v->p2_no_entrevista_6= $request->p2_no_entrevista_6;
    $v->p2_no_entrevista_7= $request->p2_no_entrevista_7;
    $v->p2_no_entrevista_8= $request->p2_no_entrevista_8;
    $v->p2_no_entrevista_9= $request->p2_no_entrevista_9;
    $v->p2_observaciones= $request->p2_observaciones;
    // Tercera participación
    $v->p3_no_entrevista= $request->p3_no_entrevista;
    $v->p3_no_entrevista_1= $request->p3_no_entrevista_1;
    $v->p3_no_entrevista_2= $request->p3_no_entrevista_2;
    $v->p3_no_entrevista_3= $request->p3_no_entrevista_3;
    $v->p3_no_entrevista_4= $request->p3_no_entrevista_4;
    $v->p3_no_entrevista_5= $request->p3_no_entrevista_5;
    $v->p3_no_entrevista_6= $request->p3_no_entrevista_6;
    $v->p3_no_entrevista_7= $request->p3_no_entrevista_7;
    $v->p3_no_entrevista_8= $request->p3_no_entrevista_8;
    $v->p3_no_entrevista_9= $request->p3_no_entrevista_9;
    $v->p3_observaciones= $request->p3_observaciones;
    // Cuarta participación
    $v->p4_no_entrevista= $request->p4_no_entrevista;
    $v->p4_no_entrevista_1= $request->p4_no_entrevista_1;
    $v->p4_no_entrevista_2= $request->p4_no_entrevista_2;
    $v->p4_no_entrevista_3= $request->p4_no_entrevista_3;
    $v->p4_no_entrevista_4= $request->p4_no_entrevista_4;
    $v->p4_no_entrevista_5= $request->p4_no_entrevista_5;
    $v->p4_no_entrevista_6= $request->p4_no_entrevista_6;
    $v->p4_no_entrevista_7= $request->p4_no_entrevista_7;
    $v->p4_no_entrevista_8= $request->p4_no_entrevista_8;
    $v->p4_no_entrevista_9= $request->p4_no_entrevista_9;
    $v->p4_observaciones= $request->p4_observaciones;
    $v->save();


      return redirect(url('home'))->with('status', 'Formulario de Encuensta Vivienda cargado');;
    }

    public function verListadoVivienda()
    {
        $viviendas = Auth::user()->viviendas();

        return view("listadoVivienda")->with('viviendas',$viviendas);
    }

    public function verVivienda($id)
    {
        //TODO trae listado pero para eso necesitamos hacer la clave en la base de datos
        return "... en contruccion";
    }





}
