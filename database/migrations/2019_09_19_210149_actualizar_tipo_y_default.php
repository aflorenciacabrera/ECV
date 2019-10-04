<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActualizarTipoYDefault extends Migration
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
            DB::statement("ALTER TABLE individuos CHANGE PP06C PP06C INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP06D PP06D INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP06G PP06G INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP08D2 PP08D2 INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP08D3 PP08D3 INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP08D4 PP08D4 INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP08J1 PP08J1 INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP08J2 PP08J2 INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP08J3 PP08J3 INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP08F1 PP08F1 INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP08F2 PP08F2 INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP12B1 PP12B1 INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP12B12 PP12B12 INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP12B2 PP12B2 INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP12B22 PP12B22 INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP12B3 PP12B3 INT(11) ");
            DB::statement("ALTER TABLE individuos CHANGE PP12B32 PP12B32 INT(11) ");

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
