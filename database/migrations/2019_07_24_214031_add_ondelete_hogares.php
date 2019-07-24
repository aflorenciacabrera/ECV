<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOndeleteHogares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hogars', function (Blueprint $table) {
            //
            $table->dropForeign('hogars_vivienda_id_foreign');
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
        Schema::table('hogars', function (Blueprint $table) {
            //
        });
    }
}
