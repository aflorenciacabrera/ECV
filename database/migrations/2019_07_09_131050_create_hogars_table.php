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


        // I. Identificación
            $table->text('codigo_area')->nullable();
            $table->text('numero_listado')->nullable();
            $table->text('numero_semana')->nullable();
            $table->text('trimestre')->nullable();
            $table->integer('ano4', false)->nullable();
            $table->integer('numero_vivienda')->nullable();
            $table->integer('numero_hogar')->nullable();
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
        // II. Caracteristicas Habitacionales del Hogar (sólo para hogares que responden por primera vez o mal tomado en la participación anterior)
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
        // III. EXCLUSIVAMENTE PARA HOGARES DE PENSIONISTAS Y SERVICIO DOMÉSTICO CON CAMA
            $table->text('III1_1')->nullable();
            $table->text('III1_2')->nullable();
            $table->text('III2')->nullable();
        // IV. CARACTERÍSTICAS DE LOS MIEMBROS DEL HOGAR
            // $table->text('CH01')->nullable();
            // $table->text('CH02')->nullable();
            // $table->text('CH03')->nullable();
            // $table->text('CH04')->nullable();
            // $table->text('CH05')->nullable();
            // $table->text('CH06')->nullable();
            // $table->text('CH07')->nullable();
            // $table->text('CH08')->nullable();
            //     $table->text('CH08_A')->nullable();
            //     $table->text('CH08_B')->nullable();
            //     $table->text('CH08_C')->nullable();
            //     $table->text('CH08_D')->nullable();
            // $table->text('CH09')->nullable();
            // $table->text('CH10')->nullable();
            //     $table->text('CH10_E')->nullable();
            //     $table->text('CH10_M')->nullable();
            //     $table->text('CH10_G')->nullable();
            // $table->text('CH11')->nullable();
            // $table->text('CH12')->nullable();
            // $table->text('CH13')->nullable();
            // $table->text('CH14')->nullable();
            // $table->text('CH15')->nullable();
            // $table->text('CH15_Cod')->nullable();
            // $table->text('CH16')->nullable();
            // $table->text('CH16_Cod')->nullable();
            // $table->text('CH24')->nullable();
            // $table->text('CH25')->nullable();
        // V. ESTRATEGIAS DEL HOGAR
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
        // VI. Ingreso no laborales
            $table->text('VImes')->nullable();
            $table->text('VIcobr')->nullable();
            /**
             * MANDE A TABLA APARTE
             */
            // $table->text('V2_M')->nullable();
            // $table->text('V21_M')->nullable();
            // $table->text('V22_M')->nullable();
            // $table->text('V3_M')->nullable();
            // $table->text('V4_M')->nullable();
            // $table->text('V5_M')->nullable();
            // $table->text('V8_M')->nullable();
            // $table->text('V9_M')->nullable();
            // $table->text('V10_M')->nullable();
            // $table->text('V11_M')->nullable();
            // $table->text('V12_M')->nullable();
            // $table->text('V18_M')->nullable();
            // $table->text('V19_AM')->nullable();
            // $table->text('T_Vi')->nullable();
        // HOGAR - PLANES Y PROGRAMAS GUBERNAMENTALES
            $table->text('DI')->nullable();
            $table->text('DI_1')->nullable();
            $table->text('AI')->nullable();
            $table->text('AI_1')->nullable();
            $table->text('MI')->nullable();
            $table->text('MI_1')->nullable();
            $table->text('TSA')->nullable();
            $table->text('TSA_1')->nullable();
            $table->text('TSA_2')->nullable();
            $table->text('TV')->nullable();
            $table->text('TV_1')->nullable();
            $table->text('TE')->nullable();
            $table->text('TE_1')->nullable();
            $table->text('TM')->nullable();
            $table->text('TM_1')->nullable();
            $table->text('TS')->nullable();
            $table->text('TS_1')->nullable();
            $table->text('PM')->nullable();
            $table->text('PM_1')->nullable();
            $table->text('BE')->nullable();
            $table->text('BE_1')->nullable();
            $table->text('AUH')->nullable();
            $table->text('AUH_1')->nullable();
            $table->text('AUH_2')->nullable();
            $table->text('AUH_3')->nullable();
        // VII. ORGANIZACIÓN DEL HOGAR
            $table->text('VII1')->nullable();
            $table->text('VII2')->nullable();
            $table->text('VII3')->nullable();
        // RAZON POR LA CUAL NO SE REALIZÓ LA ENTREVISTA
            $table->text('motivo')->nullable();
            $table->text('ausencia')->nullable();
            $table->text('rechazo')->nullable();
            $table->text('otro')->nullable();
            $table->text('informante')->nullable();
            $table->text('observaciones')->nullable();
        // XI. CONTROL DE CAMPO DE LA RECUPERACIÓN DE AUSENCIAS,RECHAZOS Y OTRAS CAUSAS(hogares)
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
