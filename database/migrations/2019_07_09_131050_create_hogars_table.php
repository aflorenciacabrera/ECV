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
            $table->text('codigo_area');
            $table->text('numero_listado');
            $table->text('numero_semana');
            $table->text('trimestre');
            $table->text('ano4');
            $table->text('numero_vivienda');
            $table->text('numero_hogar');
            $table->text('respondiente');
            $table->text('visitas_fecha_hora_1');
            $table->text('visitas_fecha_hora_2');
            $table->text('visitas_fecha_hora_3');
            $table->text('visitas_fecha_hora_4');
            $table->text('visitas_fecha_hora_5');
            $table->text('entrevista_realizada');
            $table->text('modalidad_aplicacion');
            $table->text('encuestador');
            $table->text('numero_encuestador');
        // II. Caracteristicas Habitacionales del Hogar (sólo para hogares que responden por primera vez o mal tomado en la participación anterior)
            $table->text('II1');
            $table->text('II2');
            $table->text('II3');
            $table->text('II3_1');
            $table->text('II4_1');
            $table->text('II4_2');
            $table->text('II4_3');
            $table->text('II5');
            $table->text('II5_1');
            $table->text('II6');
            $table->text('II6_1');
            $table->text('II7');
            $table->text('II7_Esp');
            $table->text('II8');
            $table->text('II8_Esp');
            $table->text('II9');
        // III. EXCLUSIVAMENTE PARA HOGARES DE PENSIONISTAS Y SERVICIO DOMÉSTICO CON CAMA
            $table->text('III1_1');
            $table->text('III1_2');
            $table->text('III2');
        // IV. CARACTERÍSTICAS DE LOS MIEMBROS DEL HOGAR
            $table->text('CH01');
            $table->text('CH02');
            $table->text('CH03');
            $table->text('CH04');
            $table->text('CH05');
            $table->text('CH06');
            $table->text('CH07');
            $table->text('CH08');
                $table->text('CH08_A');
                $table->text('CH08_B');
                $table->text('CH08_C');
                $table->text('CH08_D');
            $table->text('CH09');
            $table->text('CH10');
                $table->text('CH10_E');
                $table->text('CH10_M');
                $table->text('CH10_G');
            $table->text('CH11');
            $table->text('CH12');
            $table->text('CH13');
            $table->text('CH14');
            $table->text('CH15');
            $table->text('CH15_Cod');
            $table->text('CH16');
            $table->text('CH16_Cod');
            $table->text('CH24');
            $table->text('CH25');
        // V. ESTRATEGIAS DEL HOGAR
            $table->text('V1');
            $table->text('V2');
            $table->text('V3');
            $table->text('V4');
            $table->text('V5');
            $table->text('V6');
            $table->text('V7');
            $table->text('V8');
            $table->text('V9');
            $table->text('V10');
            $table->text('V11');
            $table->text('V12');
            $table->text('V13');
            $table->text('V14');
            $table->text('V15');
            $table->text('V16');
            $table->text('V17');
            $table->text('V18');
            $table->text('V19_A');
            $table->text('V19_B');
        // VI. Ingreso no laborales
            $table->text('VImes');
            $table->text('VIcobr');
            $table->text('V2_M');
            $table->text('V21_M');
            $table->text('V22_M');
            $table->text('V3_M');
            $table->text('V4_M');
            $table->text('V5_M');
            $table->text('V8_M');
            $table->text('V9_M');
            $table->text('V10_M');
            $table->text('V11_M');
            $table->text('V12_M');
            $table->text('V18_M');
            $table->text('V19_AM');
            $table->text('T_Vi');
        // HOGAR - PLANES Y PROGRAMAS GUBERNAMENTALES
            $table->text('DI');
            $table->text('DI_1');
            $table->text('AI');
            $table->text('AI_1');
            $table->text('MI');
            $table->text('MI_1');
            $table->text('TSA');
            $table->text('TSA_1');
            $table->text('TSA_2');
            $table->text('TV');
            $table->text('TV_1');
            $table->text('TE');
            $table->text('TE_1');
            $table->text('TM');
            $table->text('TM_1');
            $table->text('TS');
            $table->text('TS_1');
            $table->text('PM');
            $table->text('PM_1');
            $table->text('BE');
            $table->text('BE_1');
            $table->text('AUH');
            $table->text('AUH_1');
            $table->text('AUH_2');
            $table->text('AUH_3');
        // VII. ORGANIZACIÓN DEL HOGAR
            $table->text('VII1');
            $table->text('VII2');
            $table->text('VII3');
        // RAZON POR LA CUAL NO SE REALIZÓ LA ENTREVISTA
            $table->text('motivo');
            $table->text('ausencia');
            $table->text('rechazo');
            $table->text('otro');
            $table->text('informante');
            $table->text('observaciones');
        // XI. CONTROL DE CAMPO DE LA RECUPERACIÓN DE AUSENCIAS,RECHAZOS Y OTRAS CAUSAS(hogares)
            $table->text('supervision');
            $table->text('super_nombre');
            $table->text('super_num');
            $table->text('r_visitas_fecha_hora_1');
            $table->text('r_visitas_fecha_hora_2');
            $table->text('r_visitas_fecha_hora_3');
            $table->text('r_visitas_fecha_hora_4');
            $table->text('r_visitas_fecha_hora_5');
            $table->text('entrega');
            $table->text('mal_tomado');
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
