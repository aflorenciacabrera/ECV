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
            $table->string('codigo_area');
            $table->string('numero_listado');
            $table->string('numero_vivienda');
            $table->string('numero_semana');
            $table->string('grupo_rotacion');
            $table->string('hogar1');
            $table->string('hogar2');
            // seccion II. UBICACIÓN
            $table->string('manz');
            $table->string('lado');
            $table->string('calle');
            $table->string('numero');
            $table->string('piso');
            $table->string('deptoocasa');
            $table->string('habitacion');
            $table->string('tipoVivienda');
            $table->string('descripcion');
            // Primera Particion
            $table->string('1_trimestre');
            $table->string('1_anio');
            $table->string('1_sem_referencia');
            $table->string('1_cant_hogar');
            $table->string('1_p_entrevistada');
            $table->string('1_visitas_fecha_hora_1');
            $table->string('1_visitas_fecha_hora_2');
            $table->string('1_visitas_fecha_hora_3');
            $table->string('1_visitas_fecha_hora_4');
            $table->string('1_visitas_fecha_hora_5');
            $table->string('1_entrevista_realizada');
            $table->string('1_modalidad_aplicacion');
            $table->string('1_encuestador');
            $table->string('1_numero_encuestador');
            $table->string('1_acompaniamiento');
            $table->string('1_nombre');
            $table->string('1_numero');
            // Primera Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
            $table->string('1_otra_viv_direc');
            $table->string('1_comparten_gastos');
            $table->string('1_N_hogar_viv');
            $table->string('1_domestico_cama_adentro');
            $table->string('1_pensionistas');
            // Segunda Particion
            // $table->string('2_trimestre');
            // $table->string('2_anio');
            // $table->string('2_sem_referencia');
            // $table->string('2_cant_hogar');
            // $table->string('2_p_entrevistada');
            // $table->string('2_visitas_fecha_hora_1');
            // $table->string('2_visitas_fecha_hora_2');
            // $table->string('2_visitas_fecha_hora_3');
            // $table->string('2_visitas_fecha_hora_4');
            // $table->string('2_visitas_fecha_hora_5'); 
            // $table->string('2_entrevista_realizada');
            // $table->string('2_modalidad_aplicacion');
            // $table->string('2_encuestador');
            // $table->string('2_numero_encuestador');
            // $table->string('2_acompaniamiento');
            // $table->string('2_nombre');
            // $table->string('2_numero');
            // // Segunda Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
            // $table->string('2_otra_viv_direc');
            // $table->string('2_comparten_gastos');
            // $table->string('2_N_hogar_viv');
            // $table->string('2_domestico_cama_adentro');
            // $table->string('2_pensionistas');
            // // Tercera Particion
            // $table->string('3_trimestre');
            // $table->string('3_anio');
            // $table->string('3_sem_referencia');
            // $table->string('3_cant_hogar');
            // $table->string('3_p_entrevistada');
            // $table->string('3_visitas_fecha_hora_1');
            // $table->string('3_visitas_fecha_hora_2');
            // $table->string('3_visitas_fecha_hora_3');
            // $table->string('3_visitas_fecha_hora_4');
            // $table->string('3_visitas_fecha_hora_5'); 
            // $table->string('3_entrevista_realizada');
            // $table->string('3_modalidad_aplicacion');
            // $table->string('3_encuestador');
            // $table->string('3_numero_encuestador');
            // $table->string('3_acompaniamiento');
            // $table->string('3_nombre');
            // $table->string('3_numero');
            // // Tercera Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
            // $table->string('3_otra_viv_direc');
            // $table->string('3_comparten_gastos');
            // $table->string('3_N_hogar_viv');
            // $table->string('3_domestico_cama_adentro');
            // $table->string('3_pensionistas');
            // // Cuarta Particion
            // $table->string('4_trimestre');
            // $table->string('4_anio');
            // $table->string('4_sem_referencia');
            // $table->string('4_cant_hogar');
            // $table->string('4_p_entrevistada');
            // $table->string('4_visitas_fecha_hora_1');
            // $table->string('4_visitas_fecha_hora_2');
            // $table->string('4_visitas_fecha_hora_3');
            // $table->string('4_visitas_fecha_hora_4');
            // $table->string('4_visitas_fecha_hora_5'); 
            // $table->string('4_entrevista_realizada');
            // $table->string('4_modalidad_aplicacion');
            // $table->string('4_encuestador');
            // $table->string('4_numero_encuestador');
            // $table->string('4_acompaniamiento');
            // $table->string('4_nombre');
            // $table->string('4_numero');
            // // Cuarta Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
            // $table->string('4_otra_viv_direc');
            // $table->string('4_comparten_gastos');
            // $table->string('4_N_hogar_viv');
            // $table->string('4_domestico_cama_adentro');
            // $table->string('4_pensionistas');
            // // Seccion IV. CARACTERÍSTICA DE LA VIVIENDA
            // $table->string('tipo_viv');
            // $table->string('tipo_viv_otro');
            // $table->string('ambientes');
            // $table->string('piso_int');
            // $table->string('piso_int_otro');
            // $table->string('cubierta_exterior');
            // $table->string('cielorraso');
            // $table->string('agua');
            // $table->string('tipo_agua');
            // $table->string('tipo_agua_otro');
            // $table->string('banio');
            // $table->string('banio_lugar');
            // $table->string('banio_tiene');
            // $table->string('desague');
            // $table->string('basural');
            // $table->string('inundable');
            // $table->string('villa');
            // $table->string('internet');
            // $table->string('conexion');
            // // Seccion V. CODICIÓN DE RESIDENCIA
            // $table->string('CH01');
            // $table->string('CH02');
            // $table->string('CH03');
            // $table->string('CH04');
            // $table->string('CH05');
            // $table->string('CH06');
            // $table->string('CH07');
            // $table->string('CH08');
            // $table->string('CH09');
            //  // Seccion VI CONTROL DE CAMBIOS
            // $table->string('CH10');
            // $table->string('CH11');
            // $table->string('CH12');
            // $table->string('CH13');
            // $table->string('CH14');
            // $table->string('CH15');
            // $table->string('CH16');
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
