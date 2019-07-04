<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViviendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viviendas', function (Blueprint $table) {
            $table->increments('id');
            // seccion I. IDENTIFICACIÓN
            $table->text('codigo_area')->nullable();
            $table->text('numero_listado')->nullable()->nullable();
            $table->text('numero_vivienda')->nullable()->nullable();
            $table->text('numero_semana')->nullable()->nullable();
            $table->text('grupo_rotacion')->nullable()->nullable();
            $table->text('hogar1')->nullable()->nullable();
            $table->text('hogar2')->nullable()->nullable();
            // seccion II. UBICACIÓN
            $table->text('manz')->nullable();
            $table->text('lado')->nullable();
            $table->text('calle')->nullable();
            $table->text('numero')->nullable();
            $table->text('piso')->nullable();
            $table->text('deptoocasa')->nullable();
            $table->text('habitacion')->nullable();
            $table->text('tipoVivienda')->nullable();
            $table->text('descripcion')->nullable();
            // Primera Particion
            $table->text('p1_trimestre')->nullable();
            $table->text('p1_anio')->nullable();
            $table->text('p1_sem_referencia')->nullable();
            $table->text('p1_cant_hogar')->nullable();
            $table->text('p1_p_entrevistada')->nullable();
            $table->text('p1_visitas_fecha_hora_1')->nullable();
            $table->text('p1_visitas_fecha_hora_2')->nullable();
            $table->text('p1_visitas_fecha_hora_3')->nullable();
            $table->text('p1_visitas_fecha_hora_4')->nullable();
            $table->text('p1_visitas_fecha_hora_5')->nullable();
            $table->text('p1_entrevista_realizada')->nullable();
            $table->text('p1_modalidad_aplicacion')->nullable();
            $table->text('p1_encuestador')->nullable();
            $table->text('p1_numero_encuestador')->nullable();
            $table->text('p1_acompaniamiento')->nullable();
            $table->text('p1_nombre')->nullable();
            $table->text('p1_numero')->nullable();
            // Primera Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
            $table->text('p1_otra_viv_direc')->nullable();
            $table->text('p1_comparten_gastos')->nullable();
            $table->text('p1_N_hogar_viv')->nullable();
            $table->text('p1_domestico_cama_adentro')->nullable();
            $table->text('p1_pensionistas')->nullable();
            // Segunda Particion
            $table->text('p2_trimestre')->nullable();
            $table->text('p2_anio')->nullable();
            $table->text('p2_sem_referencia')->nullable();
            $table->text('p2_cant_hogar')->nullable();
            $table->text('p2_p_entrevistada')->nullable();
            $table->text('p2_visitas_fecha_hora_1')->nullable();
            $table->text('p2_visitas_fecha_hora_2')->nullable();
            $table->text('p2_visitas_fecha_hora_3')->nullable();
            $table->text('p2_visitas_fecha_hora_4')->nullable();
            $table->text('p2_visitas_fecha_hora_5')->nullable(); 
            $table->text('p2_entrevista_realizada')->nullable();
            $table->text('p2_modalidad_aplicacion')->nullable();
            $table->text('p2_encuestador')->nullable();
            $table->text('p2_numero_encuestador')->nullable();
            $table->text('p2_acompaniamiento')->nullable();
            $table->text('p2_nombre')->nullable();
            $table->text('p2_numero')->nullable();
            // Segunda Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
            $table->text('p2_otra_viv_direc')->nullable();
            $table->text('p2_comparten_gastos')->nullable();
            $table->text('p2_N_hogar_viv')->nullable();
            $table->text('p2_domestico_cama_adentro')->nullable();
            $table->text('p2_pensionistas')->nullable();
            // Tercera Particion
            $table->text('p3_trimestre')->nullable();
            $table->text('p3_anio')->nullable();
            $table->text('p3_sem_referencia')->nullable();
            $table->text('p3_cant_hogar')->nullable();
            $table->text('p3_p_entrevistada')->nullable();
            $table->text('p3_visitas_fecha_hora_1')->nullable();
            $table->text('p3_visitas_fecha_hora_2')->nullable();
            $table->text('p3_visitas_fecha_hora_3')->nullable();
            $table->text('p3_visitas_fecha_hora_4')->nullable();
            $table->text('p3_visitas_fecha_hora_5')->nullable(); 
            $table->text('p3_entrevista_realizada')->nullable();
            $table->text('p3_modalidad_aplicacion')->nullable();
            $table->text('p3_encuestador')->nullable();
            $table->text('p3_numero_encuestador')->nullable();
            $table->text('p3_acompaniamiento')->nullable();
            $table->text('p3_nombre')->nullable();
            $table->text('p3_numero')->nullable();
            // Tercera Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
            $table->text('p3_otra_viv_direc')->nullable();
            $table->text('p3_comparten_gastos')->nullable();
            $table->text('p3_N_hogar_viv')->nullable();
            $table->text('p3_domestico_cama_adentro')->nullable();
            $table->text('p3_pensionistas')->nullable();
            // Cuarta Particion
            $table->text('p4_trimestre')->nullable();
            $table->text('p4_anio')->nullable();
            $table->text('p4_sem_referencia')->nullable();
            $table->text('p4_cant_hogar')->nullable();
            $table->text('p4_p_entrevistada')->nullable();
            $table->text('p4_visitas_fecha_hora_1')->nullable();
            $table->text('p4_visitas_fecha_hora_2')->nullable();
            $table->text('p4_visitas_fecha_hora_3')->nullable();
            $table->text('p4_visitas_fecha_hora_4')->nullable();
            $table->text('p4_visitas_fecha_hora_5')->nullable(); 
            $table->text('p4_entrevista_realizada')->nullable();
            $table->text('p4_modalidad_aplicacion')->nullable();
            $table->text('p4_encuestador')->nullable();
            $table->text('p4_numero_encuestador')->nullable();
            $table->text('p4_acompaniamiento')->nullable();
            $table->text('p4_nombre')->nullable();
            $table->text('p4_numero')->nullable();
            // Cuarta Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
            $table->text('p4_otra_viv_direc')->nullable();
            $table->text('p4_comparten_gastos')->nullable();
            $table->text('p4_N_hogar_viv')->nullable();
            $table->text('p4_domestico_cama_adentro')->nullable();
            $table->text('p4_pensionistas')->nullable();
            // Seccion IV. CARACTERÍSTICA DE LA VIVIENDA
            $table->text('tipo_viv')->nullable();
            $table->text('tipo_viv_otro')->nullable();
            $table->text('ambientes')->nullable();
            $table->text('piso_int')->nullable();
            $table->text('piso_int_otro')->nullable();
            $table->text('cubierta_exterior')->nullable();
            $table->text('cielorraso')->nullable();
            $table->text('electricidad')->nullable();
            $table->text('agua')->nullable();
            $table->text('tipo_agua')->nullable();
            $table->text('tipo_agua_otro')->nullable();
            $table->text('banio')->nullable();
            $table->text('banio_lugar')->nullable();
            $table->text('banio_tiene')->nullable();
            $table->text('desague')->nullable();
            $table->text('basural')->nullable();
            $table->text('inundable')->nullable();
            $table->text('villa')->nullable();
            $table->text('internet')->nullable();
            $table->text('conexion')->nullable();
            // Seccion V. CODICIÓN DE RESIDENCIA
            $table->text('CH01')->nullable();
            $table->text('CH02')->nullable();
            $table->text('CH03')->nullable();
            $table->text('CH04')->nullable();
            $table->text('CH05')->nullable();
            $table->text('CH06')->nullable();
            $table->text('CH07')->nullable();
            $table->text('CH08')->nullable();
            $table->text('CH09')->nullable();
             // Seccion VI CONTROL DE CAMBIOS
            $table->text('CH10')->nullable();
            $table->text('CH11')->nullable();
            $table->text('CH12')->nullable();
            $table->text('CH13')->nullable();
            $table->text('CH14')->nullable();
            $table->text('CH15')->nullable();
            $table->text('CH16')->nullable();
            //Seccion VII. CAUSAS POR LA QUE NO SE REALIZÓ LA ENTREVISTA
            // Primera participación
            $table->text( 'p1_no_entrevista')->nullable();
            $table->text('p1_no_entrevista_1')->nullable();
            $table->text('p1_no_entrevista_2')->nullable();
            $table->text('p1_no_entrevista_3')->nullable();
            $table->text('p1_no_entrevista_4')->nullable();
            $table->text('p1_no_entrevista_5')->nullable();
            $table->text('p1_no_entrevista_6')->nullable();
            $table->text('p1_no_entrevista_7')->nullable();
            $table->text('p1_no_entrevista_8')->nullable();
            $table->text('p1_no_entrevista_9')->nullable();
            $table->text( 'p1_observaciones')->nullable();
            // Segunda participación
            $table->text('p2_no_entrevista')->nullable();
            $table->text('p2_no_entrevista_1')->nullable();
            $table->text('p2_no_entrevista_2')->nullable();
            $table->text('p2_no_entrevista_3')->nullable();
            $table->text('p2_no_entrevista_4')->nullable();
            $table->text('p2_no_entrevista_5')->nullable();
            $table->text('p2_no_entrevista_6')->nullable();
            $table->text('p2_no_entrevista_7')->nullable();
            $table->text('p2_no_entrevista_8')->nullable();
            $table->text('p2_no_entrevista_9')->nullable();
            $table->text('p2_observaciones')->nullable();
            // Tercera participación
            $table->text('p3_no_entrevista')->nullable();
            $table->text('p3_no_entrevista_1')->nullable();
            $table->text('p3_no_entrevista_2')->nullable();
            $table->text('p3_no_entrevista_3')->nullable();
            $table->text('p3_no_entrevista_4')->nullable();
            $table->text('p3_no_entrevista_5')->nullable();
            $table->text('p3_no_entrevista_6')->nullable();
            $table->text('p3_no_entrevista_7')->nullable();
            $table->text('p3_no_entrevista_8')->nullable();
            $table->text('p3_no_entrevista_9')->nullable();
            $table->text('p3_observaciones')->nullable();
            // Cuarta participación
            $table->text('p4_no_entrevista')->nullable();
            $table->text('p4_no_entrevista_1')->nullable();
            $table->text('p4_no_entrevista_2')->nullable();
            $table->text('p4_no_entrevista_3')->nullable();
            $table->text('p4_no_entrevista_4')->nullable();
            $table->text('p4_no_entrevista_5')->nullable();
            $table->text('p4_no_entrevista_6')->nullable();
            $table->text('p4_no_entrevista_7')->nullable();
            $table->text('p4_no_entrevista_8')->nullable();
            $table->text('p4_no_entrevista_9')->nullable();
            $table->text('p4_observaciones')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viviendas');
    }
}
