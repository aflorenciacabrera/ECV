<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHogarSeccionSeisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hogar_seccion_seis', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('hogar_id')->nullable();
            $table->foreign('hogar_id')->references('id')->on('hogars');
            $table->unsignedInteger('individuo_id')->nullable();
            $table->foreign('individuo_id')->references('id')->on('individuos');
            $table->double('V2_M')->nullable();
            $table->double('V21_M')->nullable();
            $table->double('V22_M')->nullable();
            $table->double('V3_M')->nullable();
            $table->double('V4_M')->nullable();
            $table->double('V5_M')->nullable();
            $table->double('V8_M')->nullable();
            $table->double('V9_M')->nullable();
            $table->double('V10_M')->nullable();
            $table->double('V11_M')->nullable();
            $table->double('V12_M')->nullable();
            $table->double('V18_M')->nullable();
            $table->double('V19_AM')->nullable();
            $table->double('T_Vi')->nullable();


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
        Schema::dropIfExists('hogar_seccion_seis');
    }
}
