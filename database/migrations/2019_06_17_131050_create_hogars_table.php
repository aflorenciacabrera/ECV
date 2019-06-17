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
            $table->bigIncrements('id');
        // I. Identificación
            $table->string('codigo_area');
            $table->string('numero_listado');
            $table->string('numero_semana');
            $table->string('trimestre');
            $table->string('anio');
            $table->string('numero_vivienda');
            $table->string('numero_hogar');
            $table->string('respondiente');
            $table->string('visitas_fecha_hora_1');
            $table->string('visitas_fecha_hora_2');
            $table->string('visitas_fecha_hora_3');
            $table->string('visitas_fecha_hora_4');
            $table->string('visitas_fecha_hora_5');
            $table->string('entrevista_realizada');
            $table->string('modalidad_aplicacion');
            $table->string('encuestador');
            $table->string('numero_encuestador');
           
        // II. Caracteristicas Habitacionales del Hogar (sólo para hogares que responden por primera vez o mal tomado en la participación anterior)
            $table->string('II1'); 
            $table->string('II2');         
            $table->string('II3'); 
            $table->string('II3_1'); 
            $table->string('II4_1'); 
            $table->string('II4_2');
            $table->string('II4_3'); 
            $table->string('II5'); 
            $table->string('II5_1'); 
            $table->string('II6'); 
            $table->string('II6_1'); 
            $table->string('II7'); 
            $table->string('II7_Esp');
            $table->string('II8');
            $table->string('II8_Esp');
            $table->string('II9');
            $table->string('II9_Esp');
            
        // III. EXCLUSIVAMENTE PARA HOGARES DE PENSIONISTAS Y SERVICIO DOMÉSTICO CON CAMA
            $table->string('III1_1'); 
            $table->string('III1_2');
            $table->string('III2');
            
        // IV. CARACTERÍSTICAS DE LOS MIEMBROS DEL HOGAR
            $table->string('CH01'); 
            $table->string('CH02');     
            $table->string('CH03');    
            $table->string('CH04'); 
            $table->string('CH05');
            $table->string('CH06');
            $table->string('CH07');
            $table->string('CH08');
            $table->string('CH08_1');
            $table->string('CH08_2');
            $table->string('CH08_3');
            $table->string('CH08_4');
            $table->string('CH09');
            $table->string('CH10');
            $table->string('CH10_1');
            $table->string('CH10_2');
            $table->string('CH10_3');
            $table->string('CH11');
            $table->string('CH12');
            $table->string('CH13');
            $table->string('CH14');
            $table->string('CH15');
            $table->string('CH15_Cod');
            $table->string('CH16');
            $table->string('CH16_Cod');
            $table->string('CH17');
            $table->string('CH18');
        // V. ESTRATEGIAS DEL HOGAR
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
