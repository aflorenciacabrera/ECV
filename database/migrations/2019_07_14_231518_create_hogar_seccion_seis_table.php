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
            $table->text('V2_M')->nullable();
            $table->text('V21_M')->nullable();
            $table->text('V22_M')->nullable();
            $table->text('V3_M')->nullable();
            $table->text('V4_M')->nullable();
            $table->text('V5_M')->nullable();
            $table->text('V8_M')->nullable();
            $table->text('V9_M')->nullable();
            $table->text('V10_M')->nullable();
            $table->text('V11_M')->nullable();
            $table->text('V12_M')->nullable();
            $table->text('V18_M')->nullable();
            $table->text('V19_AM')->nullable();
            $table->text('T_Vi')->nullable();


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
