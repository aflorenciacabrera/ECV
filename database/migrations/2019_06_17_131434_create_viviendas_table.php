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
            $table->text('1_trimestre')->nullable();
            $table->text('1_anio')->nullable();
            $table->text('1_sem_referencia')->nullable();
            $table->text('1_cant_hogar')->nullable();
            $table->text('1_p_entrevistada')->nullable();
            $table->text('1_visitas_fecha_hora_1')->nullable();
            $table->text('1_visitas_fecha_hora_2')->nullable();
            $table->text('1_visitas_fecha_hora_3')->nullable();
            $table->text('1_visitas_fecha_hora_4')->nullable();
            $table->text('1_visitas_fecha_hora_5')->nullable();
            $table->text('1_entrevista_realizada')->nullable();
            $table->text('1_modalidad_aplicacion')->nullable();
            $table->text('1_encuestador')->nullable();
            $table->text('1_numero_encuestador')->nullable();
            $table->text('1_acompaniamiento')->nullable();
            $table->text('1_nombre')->nullable();
            $table->text('1_numero')->nullable();
            // Primera Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
            $table->text('1_otra_viv_direc')->nullable();
            $table->text('1_comparten_gastos')->nullable();
            $table->text('1_N_hogar_viv')->nullable();
            $table->text('1_domestico_cama_adentro')->nullable();
            $table->text('1_pensionistas')->nullable();
            // Segunda Particion
            $table->text('2_trimestre')->nullable();
            $table->text('2_anio')->nullable();
            $table->text('2_sem_referencia')->nullable();
            $table->text('2_cant_hogar')->nullable();
            $table->text('2_p_entrevistada')->nullable();
            $table->text('2_visitas_fecha_hora_1')->nullable();
            $table->text('2_visitas_fecha_hora_2')->nullable();
            $table->text('2_visitas_fecha_hora_3')->nullable();
            $table->text('2_visitas_fecha_hora_4')->nullable();
            $table->text('2_visitas_fecha_hora_5')->nullable(); 
            $table->text('2_entrevista_realizada')->nullable();
            $table->text('2_modalidad_aplicacion')->nullable();
            $table->text('2_encuestador')->nullable();
            $table->text('2_numero_encuestador')->nullable();
            $table->text('2_acompaniamiento')->nullable();
            $table->text('2_nombre')->nullable();
            $table->text('2_numero')->nullable();
            // Segunda Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
            $table->text('2_otra_viv_direc')->nullable();
            $table->text('2_comparten_gastos')->nullable();
            $table->text('2_N_hogar_viv')->nullable();
            $table->text('2_domestico_cama_adentro')->nullable();
            $table->text('2_pensionistas')->nullable();
            // Tercera Particion
            $table->text('3_trimestre')->nullable();
            $table->text('3_anio')->nullable();
            $table->text('3_sem_referencia')->nullable();
            $table->text('3_cant_hogar')->nullable();
            $table->text('3_p_entrevistada')->nullable();
            $table->text('3_visitas_fecha_hora_1')->nullable();
            $table->text('3_visitas_fecha_hora_2')->nullable();
            $table->text('3_visitas_fecha_hora_3')->nullable();
            $table->text('3_visitas_fecha_hora_4')->nullable();
            $table->text('3_visitas_fecha_hora_5')->nullable(); 
            $table->text('3_entrevista_realizada')->nullable();
            $table->text('3_modalidad_aplicacion')->nullable();
            $table->text('3_encuestador')->nullable();
            $table->text('3_numero_encuestador')->nullable();
            $table->text('3_acompaniamiento')->nullable();
            $table->text('3_nombre')->nullable();
            $table->text('3_numero')->nullable();
            // Tercera Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
            $table->text('3_otra_viv_direc')->nullable();
            $table->text('3_comparten_gastos')->nullable();
            $table->text('3_N_hogar_viv')->nullable();
            $table->text('3_domestico_cama_adentro')->nullable();
            $table->text('3_pensionistas')->nullable();
            // Cuarta Particion
            $table->text('4_trimestre')->nullable();
            $table->text('4_anio')->nullable();
            $table->text('4_sem_referencia')->nullable();
            $table->text('4_cant_hogar')->nullable();
            $table->text('4_p_entrevistada')->nullable();
            $table->text('4_visitas_fecha_hora_1')->nullable();
            $table->text('4_visitas_fecha_hora_2')->nullable();
            $table->text('4_visitas_fecha_hora_3')->nullable();
            $table->text('4_visitas_fecha_hora_4')->nullable();
            $table->text('4_visitas_fecha_hora_5')->nullable(); 
            $table->text('4_entrevista_realizada')->nullable();
            $table->text('4_modalidad_aplicacion')->nullable();
            $table->text('4_encuestador')->nullable();
            $table->text('4_numero_encuestador')->nullable();
            $table->text('4_acompaniamiento')->nullable();
            $table->text('4_nombre')->nullable();
            $table->text('4_numero')->nullable();
            // Cuarta Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
            $table->text('4_otra_viv_direc')->nullable();
            $table->text('4_comparten_gastos')->nullable();
            $table->text('4_N_hogar_viv')->nullable();
            $table->text('4_domestico_cama_adentro')->nullable();
            $table->text('4_pensionistas')->nullable();
            // Seccion IV. CARACTERÍSTICA DE LA VIVIENDA
            $table->text('tipo_viv')->nullable();
            $table->text('tipo_viv_otro')->nullable();
            $table->text('ambientes')->nullable();
            $table->text('piso_int')->nullable();
            $table->text('piso_int_otro')->nullable();
            $table->text('cubierta_exterior')->nullable();
            $table->text('cielorraso')->nullable();
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
