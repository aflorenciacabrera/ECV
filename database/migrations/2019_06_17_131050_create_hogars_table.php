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
        // I. Identificación
            $table->text('codigo_area')->nullable();
            $table->text('numero_listado')->nullable()->nullable()->nullable();
            $table->text('numero_semana')->nullable()->nullable()->nullable();
            $table->text('trimestre')->nullable()->nullable()->nullable();
            $table->text('anio')->nullable()->nullable()->nullable();
            $table->text('numero_vivienda')->nullable()->nullable()->nullable();
            $table->text('numero_hogar')->nullable()->nullable()->nullable();
            $table->text('respondiente')->nullable()->nullable()->nullable();
            $table->text('visitas_fecha_hora_1')->nullable()->nullable();
            $table->text('visitas_fecha_hora_2')->nullable()->nullable();
            $table->text('visitas_fecha_hora_3')->nullable()->nullable();
            $table->text('visitas_fecha_hora_4')->nullable()->nullable();
            $table->text('visitas_fecha_hora_5')->nullable()->nullable();
            $table->text('entrevista_realizada')->nullable()->nullable();
            $table->text('modalidad_aplicacion')->nullable()->nullable();
            $table->text('encuestador')->nullable();
            $table->text('numero_encuestador')->nullable()->nullable();
        
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
            $table->text('CH01')->nullable(); 
            $table->text('CH02')->nullable();     
            $table->text('CH03')->nullable();    
            $table->text('CH04')->nullable(); 
            $table->text('CH05')->nullable();
            $table->text('CH06')->nullable();
            $table->text('CH07')->nullable();
            $table->text('CH08')->nullable();
                $table->text('CH08_1')->nullable();
                $table->text('CH08_2')->nullable();
                $table->text('CH08_3')->nullable();
                $table->text('CH08_4')->nullable();
            $table->text('CH09')->nullable();
            $table->text('CH10')->nullable();
                $table->text('CH10_1')->nullable();
                $table->text('CH10_2')->nullable();
                $table->text('CH10_3')->nullable();
            $table->text('CH11')->nullable();
            $table->text('CH12')->nullable();
            $table->text('CH13')->nullable();
            $table->text('CH14')->nullable();
            $table->text('CH15')->nullable();
            $table->text('CH15_Cod')->nullable();
            $table->text('CH16')->nullable();
            $table->text('CH16_Cod')->nullable();
            $table->text('CH17')->nullable();
            $table->text('CH18')->nullable();
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
            $table->text('V2_M')->nullable();
                $table->text('V2_M_1')->nullable();
                $table->text('V2_M_2')->nullable();
                $table->text('V2_M_3')->nullable();
                $table->text('V2_M_4')->nullable();
                $table->text('V2_M_5')->nullable();
            $table->text('V21_M')->nullable();
                $table->text('V21_M_1')->nullable();
                $table->text('V21_M_2')->nullable();
                $table->text('V21_M_3')->nullable();
                $table->text('V21_M_4')->nullable();
                $table->text('V21_M_5')->nullable();
            $table->text('V3_M')->nullable();
                $table->text('V3_M_1')->nullable();
                $table->text('V3_M_2')->nullable();
                $table->text('V3_M_3')->nullable();
                $table->text('V3_M_4')->nullable();
                $table->text('V3_M_5')->nullable();
            $table->text('V4_M')->nullable();
                $table->text('V4_M_1')->nullable();
                $table->text('V4_M_2')->nullable();
                $table->text('V4_M_3')->nullable();
                $table->text('V4_M_4')->nullable();
                $table->text('V4_M_5')->nullable();
            $table->text('V5_M')->nullable();
                $table->text('V5_M_1')->nullable();
                $table->text('V5_M_2')->nullable();
                $table->text('V5_M_3')->nullable();
                $table->text('V5_M_4')->nullable();
                $table->text('V5_M_5')->nullable();
            $table->text('V8_M')->nullable();
                $table->text('V8_M_1')->nullable();
                $table->text('V8_M_2')->nullable();
                $table->text('V8_M_3')->nullable();
                $table->text('V8_M_4')->nullable();
                $table->text('V8_M_5')->nullable();
            $table->text('V9_M')->nullable();
                $table->text('V9_M_1')->nullable();
                $table->text('V9_M_2')->nullable();
                $table->text('V9_M_3')->nullable();
                $table->text('V9_M_4')->nullable();
                $table->text('V9_M_5')->nullable();
            $table->text('V10_M')->nullable();
                $table->text('V10_M_1')->nullable();
                $table->text('V10_M_2')->nullable();
                $table->text('V10_M_3')->nullable();
                $table->text('V10_M_4')->nullable();
                $table->text('V10_M_5')->nullable();
            $table->text('V11_M')->nullable();
                $table->text('V11_M_1')->nullable();
                $table->text('V11_M_2')->nullable();
                $table->text('V11_M_3')->nullable();
                $table->text('V11_M_4')->nullable();
                $table->text('V11_M_5')->nullable();
            $table->text('V12_M')->nullable();
                $table->text('V12_M_1')->nullable();
                $table->text('V12_M_2')->nullable();
                $table->text('V12_M_3')->nullable();
                $table->text('V12_M_4')->nullable();
                $table->text('V12_M_5')->nullable();
            $table->text('V18_M')->nullable();
                $table->text('V18_M_1')->nullable();
                $table->text('V18_M_2')->nullable();
                $table->text('V18_M_3')->nullable();
                $table->text('V18_M_4')->nullable();
                $table->text('V18_M_5')->nullable();
            $table->text('V19_M')->nullable();
                $table->text('V19_M_1')->nullable();
                $table->text('V19_M_2')->nullable();
                $table->text('V19_M_3')->nullable();
                $table->text('V19_M_4')->nullable();
                $table->text('V19_M_5')->nullable();
            $table->text('T_Vi')->nullable();
        // VII. Organizacion del hogar 
            $table->text('VII1')->nullable();
            $table->text('VII2')->nullable();
            $table->text('VII3')->nullable();
        // VIII. Planes y programas Gubernamentales
            $table->text('DI')->nullable();
            $table->text('DI_1')->nullable();
            $table->text('AI')->nullable();
            $table->text('AI_1')->nullable();
            $table->text('MI')->nullable();
            $table->text('MI_1')->nullable();
            $table->text('TS')->nullable();
            $table->text('TS_1')->nullable();
            $table->text('TV')->nullable();
            $table->text('TV_1')->nullable();
            $table->text('BE')->nullable();
            $table->text('BE_1')->nullable();
            $table->text('TM')->nullable();
            $table->text('TM_1')->nullable();
            // $table->text('TS');
            // $table->text('TS_1');
            $table->text('PM')->nullable();
            $table->text('PM_1')->nullable();
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
        Schema::dropIfExists('hogars');
    }
}
