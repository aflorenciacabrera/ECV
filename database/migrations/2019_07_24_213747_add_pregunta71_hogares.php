<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPregunta71Hogares extends Migration
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
            $table->text("PP07F11")->nullable();
$table->text("PP07F12")->nullable();
$table->text("PP07F13")->nullable();
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
