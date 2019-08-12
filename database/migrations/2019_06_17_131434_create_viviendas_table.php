<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViviendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viviendas', function (Blueprint $table) {
            $table->increments('id');

            //

             // Relaciones
                $table->unsignedInteger('user_id')->nullable();//ingresador
                $table->foreign('user_id')->references('id')->on('users');
                $table->unsignedInteger('encuestador_id')->nullable();
                $table->foreign('encuestador_id')->references('id')->on('users');
             //  *Relaciones
            //
    // seccion I. IDENTIFICACIÓN
            $table->text('codigo_area')->nullable();
            $table->text('numero_listado')->nullable();
            $table->text('numero_vivienda')->nullable();
            $table->text('numero_semana')->nullable();
            $table->text('grupo_rotacion')->nullable();
            $table->text('telefono_hogar1')->nullable();
            $table->text('telefono_hogar2')->nullable();
    // seccion II. UBICACIÓN
            $table->text('manz')->nullable();
            $table->text('lado')->nullable();
            $table->text('calle')->nullable();
            $table->text('numero')->nullable();////TODO preguntar en el diccionario dice numero nomas pero esta repetido con numero de call->nullable()e
            $table->text('piso')->nullable();
            $table->text('deptoocasa')->nullable();
            $table->text('habitacion')->nullable();
            $table->text('tipoVivienda')->nullable();
            $table->text('descripcion')->nullable();
    //  Particion
            $table->text('trimestre')->nullable();
            $table->integer('ano4',false)->nullable();
            $table->text('sem_referencia')->nullable();
            $table->text('cant_hogar')->nullable();
            $table->text('p_entrevistada')->nullable();
            $table->text('visitas_fecha_hora_1')->nullable();
            $table->text('visitas_fecha_hora_2')->nullable();
            $table->text('visitas_fecha_hora_3')->nullable();
            $table->text('visitas_fecha_hora_4')->nullable();
            $table->text('visitas_fecha_hora_5')->nullable();
            $table->text('entrevista_realizada')->nullable();
            $table->text('modalidad_aplicacion')->nullable();
            $table->text('encuestador')->nullable();
            $table->text('numero_encuestador')->nullable();
            $table->text('acompaniamiento')->nullable();
            $table->text('nombre')->nullable();
            $table->text('numero_particion')->nullable();//TODO (creo que fuimos nosotros te pregunto mañana )preguntar en el diccionario dice numero nomas pero esta repetido con numero de call->nullable()e
    //  Particion -- Seccion III. IDENTIFICACIÓN DE VIVIENDAS Y HOGARES
            $table->text('otra_viv_direc')->nullable();
            $table->text('comparten_gastos')->nullable();
            $table->text('N_hogar_viv')->nullable();
            $table->text('domestico_cama_adentro')->nullable();
            $table->text('pensionistas')->nullable();
    // Seccion IV. CARACTERÍSTICA DE LA VIVIENDA
            $table->text('IV1')->nullable();
            $table->text('IV1_Esp')->nullable();
            $table->text('IV2')->nullable();
            $table->text('IV3')->nullable();
            $table->text('IV3_Esp')->nullable();
            $table->text('IV4')->nullable();
            $table->text('IV5')->nullable();
            $table->text('IVE')->nullable();
            $table->text('IV6')->nullable();
            $table->text('IV7')->nullable();
            $table->text('IV7_Esp')->nullable();
            $table->text('IV8')->nullable();
            $table->text('IV9')->nullable();
            $table->text('IV10')->nullable();
            $table->text('IV11')->nullable();
            $table->text('IV12_1')->nullable();
            $table->text('IV12_2')->nullable();
            $table->text('IV12_3')->nullable();
            $table->text('IV14')->nullable();
            $table->text('IV15')->nullable();

            /**
             * MANDE SECCION V a OTRA TABLA que se llama seccion5 jaja
             */
    // Seccion V. CODICIÓN DE RESIDENCIA
    //         $table->text('NRO_HOGAR')->nullable();
    //         $table->text('NRO_COMPONENTE')->nullable();
    //         $table->text('NOMBRE_JEFE')->nullable();
    //         $table->text('VIVIO_SEM')->nullable();
    //         $table->text('VIVIO_MES')->nullable();
    //         $table->text('FIJAR_RES')->nullable();
    //         $table->text('ESTABA')->nullable();
    //         $table->text('AUSENCIA');///TODO Campo repetid->nullable()o
    //         $table->text('OTRA_RES')->nullable();
    // // Seccion VI CONTROL DE CAMBIOS
    //         $table->text('NO_ESTABA')->nullable();
    //         $table->text('CAMBIOS')->nullable();
    //         $table->text('MOTIVO')->nullable();
    //         $table->text('CH13')->nullable();
    //         $table->text('CH14')->nullable();
    //         $table->text('CH15')->nullable();
    //         $table->text('CH16')->nullable();
                // $table->text('MOTIVO-OTRO')->nullable(); //TODO no estan en diccionario
            // $table->text('CH14-OTRO')->nullable(); //TODO no estan en diccionario
            // $table->text('CH16-OTRO')->nullable(); //TODO no estan en diccionario

            //Seccion VII. CAUSAS POR LA QUE NO SE REALIZÓ LA ENTREVISTA
            //  participación
            $table->text('CAUSAS')->nullable();
            $table->text('DESHABILITADA')->nullable();
            $table->text('DEMOLIDA')->nullable();
            $table->text('FIN_DE_SEMANA')->nullable();
            $table->text('CONSTRUCCION')->nullable();
            $table->text('ESTABLECIMIENTO')->nullable();
            $table->text('VARIACION')->nullable();
            $table->text('AUSENCIA_PARTICIPACION')->nullable();//TODO campo repetido en seccion 6 se renombr->nullable()o
            $table->text('RECHAZO')->nullable();
            $table->text('OTRO')->nullable();
            $table->text('INFORMANTE')->nullable();
            //Seccion  VIII . CONTROL DE CAMPO DE LA RECUPERACIÓN DE AUSENCIAS,RECHAZOS Y OTRAS CAUSAS
             //  participación
            $table->text('supervision')->nullable();
            $table->text('num_super')->nullable();
            $table->text('visita_1')->nullable();
            $table->text('visita_2')->nullable();
            $table->text('visita_3')->nullable();
            $table->text('modalidad')->nullable();
            $table->text('entrega')->nullable();
            $table->text('observaciones')->nullable();

            $table->timestamps();

            $table->text('estado')->nullable();//iniciado
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viviendas');
    }
}
