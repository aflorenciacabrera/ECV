<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OnDeleteCascadeSeccionSeis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hogar_seccion_seis', function (Blueprint $table) {
            //
            $table->dropForeign('hogar_seccion_seis_hogar_id_foreign');
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
        Schema::table('hogar_seccion_seis', function (Blueprint $table) {
            //
        });
    }
}
