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
           
            // II. Caracteristicas Habitacionales del Hogar
            // $table->string('');

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
