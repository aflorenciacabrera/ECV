<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vivienda extends Model
{
    //

    protected $fillable = [
        'codigo_area',
        'numero_listado',
        'numero_vivienda',
        'numero_semana',
        'grupo_rotacion',
        'telefono_hogar1',
        'telefono_hogar2',
        'manz',
        'lado',
        'calle',
        'numero',
        'piso',
        'deptoocasa',
        'habitacion',
        'tipoVivienda',
        'descripcion',
        'trimestre',
        'ano4',
        'sem_referencia',
        'cant_hogar',
        'p_entrevistada',
        'visitas_fecha_hora_1',
        'visitas_fecha_hora_2',
        'visitas_fecha_hora_3',
        'visitas_fecha_hora_4',
        'visitas_fecha_hora_5',
        'entrevista_realizada',
        'modalidad_aplicacion',
        'encuestador',
        'numero_encuestador',
        'acompaniamiento',
        'nombre',
        'numero_particion',
        'otra_viv_direc',
        'comparten_gastos',
        'N_hogar_viv',
        'domestico_cama_adentro',
        'pensionistas',
        'IV1',
        'IV1_Esp',
        'IV2',
        'IV3',
        'IV3_Esp',
        'IV4',
        'IV5',
        'IVE',
        'IV6',
        'IV7',
        'IV7_Esp',
        'IV8',
        'IV9',
        'IV10',
        'IV11',
        'IV12_1',
        'IV12_2',
        'IV12_3',
        'IV14',
        'IV15',
        // 'NRO_HOGAR',
        // 'NRO_COMPONENTE',
        // 'NOMBRE_JEFE',
        // 'VIVIO_SEM',
        // 'VIVIO_MES',
        // 'FIJAR_RES',
        // 'ESTABA',
        // 'AUSENCIA',
        // 'OTRA_RES',
        // 'NO_ESTABA',
        // 'CAMBIOS',
        // 'MOTIVO',
        // 'CH13',
        // 'CH14',
        // 'CH15',
        // 'CH16',
        'CAUSAS',
        'DESHABILITADA',
        'DEMOLIDA',
        'FIN_DE_SEMANA',
        'CONSTRUCCION',
        'ESTABLECIMIENTO',
        'VARIACION',
        'AUSENCIA_PARTICIPACION',
        'RECHAZO',
        'OTRO',
        'INFORMANTE',
        'supervision',
        'num_super',
        'visita_1',
        'visita_2',
        'visita_3',
        'modalidad',
        'entrega',
        'observaciones'];
    public function hogares()
    {
        return $this->hasMany('App\hogar');
    }

    public function seccionv(){ //para saber cuantos hogares cargaron en la seccion 5 para control
        return $this->hasMany('App\vivienda_seccion_v');
    }

    public function estado(){
        $hogares = $this->hogares;
        $flag = 'ok';
        foreach ($hogares as $hogar)
        {
            if(!$hogar->estado)
            {
                $flag = 'hogar incompleto';
                return $flag;
            }
            else
            {
                $individuos = $hogar->individuos;
                foreach ($individuos as $individuo)
                {
                    if(!$individuo->estado)
                    {
                        $flag = 'individuo incompleto';
                    }

                }
            }
        }
        return $flag;

    }
}
