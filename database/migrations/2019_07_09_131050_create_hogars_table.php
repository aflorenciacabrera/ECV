<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHogarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hogars', function (Blueprint $table) {
            $table->increments('id');

 // Relaciones
            $table->unsignedInteger('user_id');//ingresador
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('vivienda_id');
            $table->foreign('vivienda_id')->references('id')->on('viviendas');
            //  *Relaciones


            $table->text('codigo_area')->nullable();
            $table->text('numero_listado')->nullable();
            $table->text('numero_semana')->nullable();
            $table->text('trimestre')->nullable();
            $table->text('ano4')->nullable();
            $table->text('numero_vivienda')->nullable();
            $table->text('numero_hogar')->nullable();
            $table->text('respondiente')->nullable();
            $table->text('visitas_fecha_hora_1')->nullable();
            $table->text('visitas_fecha_hora_2')->nullable();
            $table->text('visitas_fecha_hora_3')->nullable();
            $table->text('visitas_fecha_hora_4')->nullable();
            $table->text('visitas_fecha_hora_5')->nullable();
            $table->text('entrevista_realizada')->nullable();
            $table->text('modalidad_aplicacion')->nullable();
            $table->text('encuestador')->nullable();
            $table->text('numero_encuestador')->nullable();
            $table->text('II1')->nullable();
            $table->text('II2')->nullable();
            $table->text('II3')->nullable();
            $table->text('II3_1')->nullable();
            $table->text('II4_1')->nullable();
            $table->text('II4_2')->nullable();
            $table->text('II4_3')->nullable();
            $table->text('II5')->nullable();
            $table->text('II5_1')->nullable();
            $table->text('II6')->nullable();
            $table->text('II6_1')->nullable();
            $table->text('II7')->nullable();
            $table->text('II7_Esp')->nullable();
            $table->text('II8')->nullable();
            $table->text('II8_Esp')->nullable();
            $table->text('II9')->nullable();
            $table->text('III1_1')->nullable();
            $table->text('III1_2')->nullable();
            $table->text('III2')->nullable();

            $table->text('V1')->nullable();
            $table->text('V2')->nullable();
            $table->text('V3')->nullable();
            $table->text('V4')->nullable();
            $table->text('V5')->nullable();
            $table->text('V6')->nullable();
            $table->text('V7')->nullable();
            $table->text('V8')->nullable();
            $table->text('V9')->nullable();
            $table->text('V10')->nullable();
            $table->text('V11')->nullable();
            $table->text('V12')->nullable();
            $table->text('V13')->nullable();
            $table->text('V14')->nullable();
            $table->text('V15')->nullable();
            $table->text('V16')->nullable();
            $table->text('V17')->nullable();
            $table->text('V18')->nullable();
            $table->text('V19_A')->nullable();
            $table->text('V19_B')->nullable();

            $table->text('V2_M_NO_ASIGNABLE')->nullable();


            $table->text('V21_M_NO_ASIGNABLE')->nullable();

            $table->text('V22_M_NO_ASIGNABLE')->nullable();

            $table->text('V3_M_NO_ASIGNABLE')->nullable();

            $table->text('V4_M_NO_ASIGNABLE')->nullable();

            $table->text('V5_M_NO_ASIGNABLE')->nullable();

            $table->text('V8_M_NO_ASIGNABLE')->nullable();

            $table->text('V9_M_NO_ASIGNABLE')->nullable();

            $table->text('V10_M_NO_ASIGNABLE')->nullable();

            $table->text('V11_M_NO_ASIGNABLE')->nullable();

            $table->text('V12_M_NO_ASIGNABLE')->nullable();

            $table->text('V18_M_NO_ASIGNABLE')->nullable();

            $table->text('V19_AM_NO_ASIGNABLE')->nullable();

            $table->text('DI_1')->nullable();
            $table->text('DI')->nullable();
            $table->text('AI_1')->nullable();
            $table->text('AI')->nullable();
            $table->text('MI_1')->nullable();
            $table->text('MI')->nullable();
            $table->text('TS_1')->nullable();
            $table->text('TS')->nullable();
            $table->text('TE_1')->nullable();
            $table->text('TE')->nullable();
            $table->text('TV')->nullable();
            $table->text('TM_1')->nullable();
            $table->text('TM')->nullable();
            $table->text('PM_1')->nullable();
            $table->text('PM')->nullable();
            $table->text('TSAP_1')->nullable();
            $table->text('TSAP')->nullable();
            $table->text('BE_1')->nullable();
            $table->text('BE')->nullable();
            $table->text('AUH')->nullable();
            $table->text('AUH_1')->nullable();
            $table->text('AUH_2')->nullable();
            $table->text('AUH_3')->nullable();
            $table->text('AUH_1_2')->nullable();
            $table->text('AUH_2_2')->nullable();
            $table->text('AUH_3_2')->nullable();
            $table->text('AUH_1_3')->nullable();
            $table->text('AUH_2_3')->nullable();
            $table->text('AUH_3_3')->nullable();
            $table->text('tarea_hogar_numero_1')->nullable();
            $table->text('tarea_hogar_nombre_1')->nullable();
            $table->text('tarea_hogar_numero_2')->nullable();
            $table->text('tarea_hogar_nombre_2')->nullable();
            $table->text('tarea_hogar_numero_3')->nullable();
            $table->text('tarea_hogar_nombre_3')->nullable();
            $table->text('VII1')->nullable();
            $table->text('ayuda_hogar_numero_1')->nullable();
            $table->text('ayuda_hogar_nombre_1')->nullable();
            $table->text('ayuda_hogar_numero_2')->nullable();
            $table->text('ayuda_hogar_nombre_2')->nullable();
            $table->text('ayuda_hogar_numero_3')->nullable();
            $table->text('ayuda_hogar_nombre_3')->nullable();
            $table->text('VII2')->nullable();
            $table->text('discapacidad_hogar_numero_1')->nullable();
            $table->text('discapacidad_hogar_nombre_1')->nullable();
            $table->text('discapacidad_hogar_numero_2')->nullable();
            $table->text('discapacidad_hogar_nombre_2')->nullable();
            $table->text('discapacidad_hogar_numero_3')->nullable();
            $table->text('discapacidad_hogar_nombre_3')->nullable();
            $table->text('discapacidad_hogar_numero_4')->nullable();
            $table->text('discapacidad_hogar_nombre_4')->nullable();
            $table->text('discapacidad_hogar_numero_5')->nullable();
            $table->text('discapacidad_hogar_nombre_5')->nullable();
            $table->text('VII3')->nullable();
            $table->text('tiene_telefono')->nullable();
            $table->text('numero_telefono')->nullable();
            $table->text('seccion_organizacion_observaciones')->nullable();
            $table->text('resumen_personas_habitan')->nullable();
            $table->text('resumen_personas_menores')->nullable();
            $table->text('resumen_personas_mayores')->nullable();
            $table->text('resumen_encuestadas')->nullable();
            $table->text('resumen_no_encuestadas')->nullable();
            $table->text('motivo')->nullable();
            $table->text('ausencia')->nullable();
            $table->text('rechazo')->nullable();
            $table->text('otro')->nullable();
            $table->text('informante_no_encuesta')->nullable();
            $table->text('observaciones_no_encuesta')->nullable();
            $table->text('supervision')->nullable();
            $table->text('super_nombre')->nullable();
            $table->text('super_num')->nullable();
            $table->text('r_visitas_fecha_hora_1')->nullable();
            $table->text('r_visitas_fecha_hora_2')->nullable();
            $table->text('r_visitas_fecha_hora_3')->nullable();
            $table->text('r_visitas_fecha_hora_4')->nullable();
            $table->text('r_visitas_fecha_hora_5')->nullable();
            $table->text('entrega')->nullable();
            $table->text('mal_tomado')->nullable();

            $table->timestamps();

            $table->integer('estado')->default(0);//iniciado
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hogars');
    }
}
