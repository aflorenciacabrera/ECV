<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OnDeleteCascadeSeccionVs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vivienda_seccion_vs', function (Blueprint $table) {
            //vivienda_seccion_vs
            $table->dropForeign('vivienda_seccion_vs_vivienda_id_foreign');
            $table->foreign('vivienda_id')->references('id')->on('viviendas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vivienda_seccion_vs', function (Blueprint $table) {
            //
        });
    }
}
