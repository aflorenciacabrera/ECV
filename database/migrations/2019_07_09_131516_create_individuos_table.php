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
            $table->unsignedInteger('user_id')->nullable();//ingresador
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('hogar_id')->nullable();
            $table->foreign('hogar_id')->references('id')->on('hogars');

            // $table->integer('nro_componente')->nullable();//borra nomas en el merge
            // $table->text('nombre')->nullable(); //borra nomas en el merge
            //
            $table->text('Entrev_realiz')->nullable();
            $table->text('numero_componente')->nullable();
            $table->text('numero_respondente')->nullable();
            $table->text('nombre')->nullable();
            $table->text('codigo_area')->nullable();
            $table->text('numero_listado')->nullable();
            $table->text('numero_semana')->nullable();
            $table->text('trimestre')->nullable();
            $table->text('ano4')->nullable();
            $table->text('numero_vivienda')->nullable();
            $table->text('numero_hogar')->nullable();
            $table->text('PP01A')->nullable();
            $table->text('PP01B')->nullable();
            $table->text('PP01C')->nullable();
            $table->text('PP01D')->nullable();
            $table->text('PP01D_Esp')->nullable();
            $table->text('PP01E')->nullable();
            $table->text('PP01F')->nullable();
            $table->text('PP01F_Esp')->nullable();
            $table->text('PP01G')->nullable();
            $table->text('PP01H')->nullable();
            $table->text('PP02A')->nullable();
            $table->text('PP02B')->nullable();
            $table->text('PP02C')->nullable();
            $table->text('PP02C_Esp')->nullable();
            $table->text('PP02D')->nullable();
            $table->text('PP02D_Esp')->nullable();
            $table->text('PP02E')->nullable();
            $table->text('PP02E_Esp')->nullable();
            $table->text('PP02F')->nullable();
            $table->text('PP02G')->nullable();
            $table->text('PP02H')->nullable();
            $table->text('PP02I')->nullable();
            $table->text('PP02Obser')->nullable();
            $table->text('PP03A')->nullable();
            $table->text('PP03B')->nullable();
            $table->text('PP03C')->nullable();
            $table->text('PP03D')->nullable();
            $table->text('PP03E_domigo')->nullable();
            $table->text('PP03E_lunes')->nullable();
            $table->text('PP03E_martes')->nullable();
            $table->text('PP03E_miercoles')->nullable();
            $table->text('PP03E_jueves')->nullable();
            $table->text('PP03E_viernes')->nullable();
            $table->text('PP03E_sabado')->nullable();
            $table->text('PP03E')->nullable();
            $table->text('PP03F_domingo')->nullable();
            $table->text('PP03F_lunes')->nullable();
            $table->text('PP03F_martes')->nullable();
            $table->text('PP03F_miercoles')->nullable();
            $table->text('PP03F_jueves')->nullable();
            $table->text('PP03F_viernes')->nullable();
            $table->text('PP03F_sabado')->nullable();
            $table->text('PP03F')->nullable();
            $table->text('PP03G')->nullable();
            $table->text('PP03H')->nullable();
            $table->text('PP03I')->nullable();
            $table->text('PP03J')->nullable();
            $table->text('PP03K')->nullable();
            $table->text('PP04A')->nullable();
            $table->text('PP04A_Esp')->nullable();
            $table->text('PP04B')->nullable();
            $table->text('PP04B1')->nullable();
            $table->text('PP04B2')->nullable();
            $table->text('PP04B3_ANO')->nullable();
            $table->text('PP04B3_MES')->nullable();
            $table->text('PP04B3_DIA')->nullable();
            $table->text('PP04B4')->nullable();
            $table->text('PP04C')->nullable();
            $table->text('PP04C99')->nullable();
            $table->text('PP04D')->nullable();
            $table->text('PP04E')->nullable();
            $table->text('PP04F')->nullable();
            $table->text('PP04G')->nullable();
            $table->text('PP04G_Esp')->nullable();
            $table->text('PP05A')->nullable();
            $table->text('PP05C_1')->nullable();
            $table->text('PP05C_2')->nullable();
            $table->text('PP05C_3')->nullable();
            $table->text('PP05B')->nullable();
            $table->text('PP05B1')->nullable();
            $table->text('PP05B2_ANO')->nullable();
            $table->text('PP05B_MES')->nullable();
            $table->text('PP05B2_DIA')->nullable();
            $table->text('PP05D')->nullable();
            $table->text('PP05E')->nullable();
            $table->text('PP05F')->nullable();
            $table->text('PP05G')->nullable();
            $table->text('PP05H')->nullable();
            $table->text('PP06A')->nullable();
            $table->text('PP06B')->nullable();
            $table->text('PP06C')->nullable();
            $table->text('PP06C_op')->nullable();
            $table->text('PP06D')->nullable();
            $table->text('PP06D_op')->nullable();
            $table->text('PP06E')->nullable();
            $table->text('PP06F')->nullable();
            $table->text('PP06G')->nullable();
            $table->text('PP06G_op')->nullable();
            $table->text('PP06H')->nullable();
            $table->text('PP06H_Esp')->nullable();
            $table->text('PP06I')->nullable();
            $table->text('PP06J')->nullable();
            $table->text('PP06L')->nullable();
            $table->text('PP06K')->nullable();
            $table->text('PP06k_sem')->nullable();
            $table->text('PP06k_mes')->nullable();
            $table->text('PP07A')->nullable();
            $table->text('PP07B')->nullable();
            $table->text('PP07B_Esp')->nullable();
            $table->text('PP07C')->nullable();
            $table->text('PP07D')->nullable();
            $table->text('PP07E')->nullable();
            $table->text('PP07G1')->nullable();
            $table->text('PP07G2')->nullable();
            $table->text('PP07G3')->nullable();
            $table->text('PP07G4')->nullable();
            $table->text('PP07G5')->nullable();
            $table->text('PP07F1')->nullable();
            $table->text('PP07F2')->nullable();
            $table->text('PP07F3')->nullable();
            $table->text('PP07F4')->nullable();
            $table->text('PP07F5')->nullable();
            $table->text('PP07F1_1')->nullable();
            $table->text('PP07H')->nullable();
            $table->text('PP07I')->nullable();
            $table->text('PP07J')->nullable();
            $table->text('PP07K')->nullable();
            $table->text('PP08A')->nullable();
            $table->text('PP08B')->nullable();
            $table->text('PP08C')->nullable();
            $table->text('PP08D2')->nullable();
            $table->text('PP08D3')->nullable();
            $table->text('PP08D4')->nullable();
            $table->text('PP08E')->nullable();
            $table->text('PP08F1')->nullable();
            $table->text('PP08F2')->nullable();
            $table->text('PP08G')->nullable();
            $table->text('PP08G1')->nullable();
            $table->text('PP08G2')->nullable();
            $table->text('PP08H')->nullable();
            $table->text('PP08I')->nullable();
            $table->text('PP08J1')->nullable();
            $table->text('PP08J2')->nullable();
            $table->text('PP08J3')->nullable();
            $table->text('PP08K')->nullable();
            $table->text('PP09A')->nullable();
            $table->text('PP09A_ESP')->nullable();
            $table->text('PP09B')->nullable();
            $table->text('PP09B_ESP')->nullable();
            $table->text('PP09C')->nullable();
            $table->text('PP10A')->nullable();
            $table->text('PP10B1')->nullable();
            $table->text('PP10B2')->nullable();
            $table->text('PP10B3')->nullable();
            $table->text('PP10B4')->nullable();
            $table->text('PP10B5')->nullable();
            $table->text('PP10B6')->nullable();
            $table->text('PP10B7')->nullable();
            $table->text('PP10B8')->nullable();
            $table->text('PP10B9')->nullable();
            $table->text('PP10B10')->nullable();
            $table->text('PP10C')->nullable();
            $table->text('PP10D')->nullable();
            $table->text('PP10E')->nullable();
            $table->text('PP11A')->nullable();
            $table->text('PP11B')->nullable();
            $table->text('PP11B1')->nullable();
            $table->text('PP11B2_ANO')->nullable();
            $table->text('PP11B2_MES')->nullable();
            $table->text('PP11B2_DIA')->nullable();
            $table->text('PP11B3')->nullable();
            $table->text('PP11C')->nullable();
            $table->text('PP11C99')->nullable();
            $table->text('PP11D')->nullable();
            $table->text('PP11E')->nullable();
            $table->text('PP11F')->nullable();
            $table->text('PP11G_ANO')->nullable();
            $table->text('PP11G_MES')->nullable();
            $table->text('PP11G_DIA')->nullable();
            $table->text('PP11H')->nullable();
            $table->text('PP11I')->nullable();
            $table->text('PP11J')->nullable();
            $table->text('PP11K')->nullable();
            $table->text('PP11K1')->nullable();
            $table->text('PP11K2')->nullable();
            $table->text('PP11K3')->nullable();
            $table->text('PP11L')->nullable();
            $table->text('PP11L1')->nullable();
            $table->text('PP11M')->nullable();
            $table->text('PP11M1')->nullable();
            $table->text('PP11N')->nullable();
            $table->text('PP11O')->nullable();
            $table->text('PP11P')->nullable();
            $table->text('PP11Q')->nullable();
            $table->text('PP11R')->nullable();
            $table->text('PP11S')->nullable();
            $table->text('PP11T')->nullable();
            $table->text('seccion_12_mes')->nullable();
            $table->text('PP12A')->nullable();
            $table->text('PP12B1')->nullable();
            $table->text('PP12B12')->nullable();
            $table->text('PP12B2')->nullable();
            $table->text('PP12B22')->nullable();
            $table->text('PP12B3')->nullable();
            $table->text('PP12B32')->nullable();
            $table->text('seccion_13_observaciones')->nullable();
            $table->text('seccion_13_encuestador')->nullable();
            $table->text('seccion_13_encuestador_numero')->nullable();
            $table->text('seccion_13_fecha1')->nullable();
            $table->text('seccion_13_hora1')->nullable();
            $table->text('seccion_13_fecha2')->nullable();
            $table->text('seccion_13_hora2')->nullable();
            $table->text('seccion_13_fecha3')->nullable();
            $table->text('seccion_13_hora3')->nullable();
            $table->text('seccion_13_modalidad')->nullable();

            //
            $table->text('estado')->default(0);//iniciado
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
