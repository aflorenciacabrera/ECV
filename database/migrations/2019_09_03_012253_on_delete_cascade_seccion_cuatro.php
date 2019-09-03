<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OnDeleteCascadeSeccionCuatro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hogar_seccion_cuatros', function (Blueprint $table) {

            $table->dropForeign('hogar_seccion_cuatros_hogar_id_foreign');
            $table->foreign('hogar_id')->references('id')->on('hogars')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hogar_seccion_cuatros', function (Blueprint $table) {
            //
        });
    }
}
