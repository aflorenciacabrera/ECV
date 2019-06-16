<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
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
           
            // II. Caracteristicas Habitacionales del Hogar (sólo para hogares que responden por primera vez o mal tomado en la
            //     participación anterior)
            // 1.
            $table->string('ambientes_habitaciones'); 
            // 2.
            $table->string('uso_para_dormir'); //de la pregunta 1
            // 3.
            $table->boolean('uso_para_trabajar1'); //si-no  si es todo no sala al 7
                $table->string('cuantos_uso_trabajo'); //si
            // 4.
            $table->boolean('cuarto_cocina'); //si-no 
            $table->boolean('lavadero');//si-no
            $table->boolean('garage'); //si-no
            // 5.
            $table->boolean('para_dormir'); //de los Si de la pregunta 4
                $table->string('cuantos_uso_dormir'); //si
            // 6.
            $table->boolean('cuantos_uso_trabajo1'); //si
                $table->string('cuantos_uso'); //si
            // 7.
            $table->string('propietario_vivienda_terreno'); 
            $table->string('propietario_vivienda');
            $table->string('inquilino_vivienda'); 
            $table->string('pago_imp_expensa');
            $table->string('relacion_dependencia');
            $table->string('ocupante_con_permiso');
            $table->string('ocupante_sin_permiso');  
            $table->string('sucesion');
            $table->string('otra_situacion'); //especificar
            // 8.
            $table->string('gas_red');
            $table->string('garrafa');
            $table->string('kersone_leña_carbon');
            $table->string('otro');
            // 9.
            $table->string('banio_exclusivo1');
            $table->string('banio_compartido_misma_vivienda');
            $table->string('banio_compartido_otra_vivienda');
            $table->string('sin_baño');
            
            // III. EXCLUSIVAMENTE PARA HOGARES DE PENSIONISTAS Y SERVICIO DOMÉSTICO CON CAMA
            $table->boolean('habitacion_exclusivo'); //si-no
            $table->boolean('banio_exclusivo'); //si-no
            $table->boolean('ingresos_otro_hogar');//si-no
            
            // IV.
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
        Schema::dropIfExists('encuestas');
    }
}
