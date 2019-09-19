<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActualizarCamposMontos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('individuos', function (Blueprint $table) {
            //

            DB::statement('UPDATE individuos SET PP06C = REPLACE(PP06C,".",""),
                                                PP06D = REPLACE(PP06D,".",""),
                                                PP06G = REPLACE(PP06G,".",""),
                                                PP08D2 = REPLACE(PP08D2,".",""),
                                                PP08D3 = REPLACE(PP08D3,".",""),
                                                PP08D4 = REPLACE(PP08D4,".",""),
                                                PP08J1 = REPLACE(PP08J1,".",""),
                                                PP08J2 = REPLACE(PP08J2,".",""),
                                                PP08J3 = REPLACE(PP08J3,".",""),
                                                PP08F1 = REPLACE(PP08F1,".",""),
                                                PP08F2 = REPLACE(PP08F2,".","");');
            DB::statement('UPDATE individuos SET PP12B1 = REPLACE(PP12B1,".",""),
                                                PP12B12 = REPLACE(PP12B12,".",""),
                                                PP12B2 = REPLACE(PP12B2,".",""),
                                                PP12B22 = REPLACE(PP12B22,".",""),
                                                PP12B3 = REPLACE(PP12B3,".",""),
                                                PP12B32 = REPLACE(PP12B32,".","");');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('individuos', function (Blueprint $table) {
            //
        });
    }
}
