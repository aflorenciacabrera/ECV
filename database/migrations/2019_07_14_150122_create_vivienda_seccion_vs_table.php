<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViviendaSeccionVsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vivienda_seccion_vs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedInteger('vivienda_id')->nullable();
            $table->foreign('vivienda_id')->references('id')->on('viviendas');
    //  Seccion V. CODICIÓN DE RESIDENCIA
            $table->text('NRO_HOGAR')->nullable();
            $table->text('NRO_COMPONENTE')->nullable();
            $table->text('NOMBRE_JEFE')->nullable();
            $table->text('VIVIO_SEM')->nullable();
            $table->text('VIVIO_MES')->nullable();
            $table->text('FIJAR_RES')->nullable();
            $table->text('ESTABA')->nullable();
            $table->text('AUSENCIA')->nullable();///TODO Campo repetid->nullable()o
            $table->text('OTRA_RES')->nullable();
    // Seccion VI CONTROL DE CAMBIOS
            $table->text('NO_ESTABA')->nullable();
            $table->text('CAMBIOS')->nullable();
            $table->text('MOTIVO')->nullable();
            $table->text('MOTIVO_OTRO')->nullable(); //TODO no estan en diccionario
            $table->text('CH13')->nullable();
            $table->text('CH14')->nullable();
            $table->text('CH14_OTRO')->nullable(); //TODO no estan en diccionario
            $table->text('CH15')->nullable();
            $table->text('CH16')->nullable();
            $table->text('CH16_OTRO')->nullable(); //TODO no estan en diccionario
            $table->text('IV3_1')->nullable(); //TODO no estan en diccionario

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vivienda_seccion_vs');
    }
}
