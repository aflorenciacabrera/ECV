<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividuosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuos', function (Blueprint $table) {
            $table->increments('id');
            // Relaciones
            $table->unsignedInteger('user_id');//ingresador
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('hogar_id');
            $table->foreign('hogar_id')->references('id')->on('hogars');

            $table->integer('nro_componente');//borra nomas en el merge
            $table->text('nombre'); //borra nomas en el merge

            $table->integer('estado')->default(0);//iniciado
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
        Schema::dropIfExists('individuos');
    }
}
