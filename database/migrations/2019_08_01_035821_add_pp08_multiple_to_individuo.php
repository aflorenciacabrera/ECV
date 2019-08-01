<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPp08MultipleToIndividuo extends Migration
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
            $table->text("PP08A_1")->nullable();
$table->text("PP08A_2")->nullable();
$table->text("PP08A_3")->nullable();
$table->text("PP08A_4")->nullable();
$table->text("PP08A_5")->nullable();
$table->text("PP08A_6")->nullable();
$table->text("PP08E_1")->nullable();
$table->text("PP08E_2")->nullable();
$table->text("PP08E_3")->nullable();
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
