<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHogarSeccionCuatrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hogar_seccion_cuatros', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('hogar_id')->nullable();
            $table->foreign('hogar_id')->references('id')->on('hogars');

            $table->unsignedInteger('individuo_id')->nullable();
            $table->foreign('individuo_id')->references('id')->on('individuos');

            $table->text('CH01')->nullable();
            $table->text('CH02')->nullable();
            $table->text('CH03')->nullable();
            $table->text('CH04')->nullable();
            $table->text('CH05')->nullable();
            $table->text('CH06')->nullable();
            $table->text('CH07')->nullable();
            $table->text('CH08')->nullable();
            $table->text('CH08_A')->nullable();
            $table->text('CH08_B')->nullable();
            $table->text('CH08_C')->nullable();
            $table->text('CH08_D')->nullable();
            $table->text('CH09')->nullable();
            $table->text('CH10')->nullable();
            $table->text('CH10_E')->nullable();
            $table->text('CH10_M')->nullable();
            $table->text('CH10_G')->nullable();
            $table->text('CH11')->nullable();
            $table->text('CH12')->nullable();
            $table->text('CH13')->nullable();
            $table->text('CH14')->nullable();
            $table->text('CH15')->nullable();
            $table->text('CH15_Cod')->nullable();
            $table->text('CH16')->nullable();
            $table->text('CH16_Cod')->nullable();
            $table->text('CH24')->nullable();
            $table->text('CH25')->nullable();


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
        Schema::dropIfExists('hogar_seccion_cuatros');
    }
}
