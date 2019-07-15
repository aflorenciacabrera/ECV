<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hogar extends Model
{

    protected $fillable = [
        // 'vivienda_id',
        'codigo_area',
        'numero_listado',
        'numero_semana',
        'trimestre',
        'ano4',
        'numero_vivienda',
        'numero_hogar',
        'respondiente',
        'visitas_fecha_hora_1',
        'visitas_fecha_hora_2',
        'visitas_fecha_hora_3',
        'visitas_fecha_hora_4',
        'visitas_fecha_hora_5',
        'entrevista_realizada',
        'modalidad_aplicacion',
        'encuestador',
        'numero_encuestador',
        'II1',
        'II2',
        'II3',
        'II3_1',
        'II4_1',
        'II4_2',
        'II4_3',
        'II5',
        'II5_1',
        'II6',
        'II6_1',
        'II7',
        'II7_Esp',
        'II8',
        'II8_Esp',
        'II9',
        'III1_1',
        'III1_2',
        'III2',
        'CH01',
        'CH02',
        'CH03',
        'CH04',
        'CH05',
        'CH06',
        'CH07',
        'CH08',
        'CH08_A',
        'CH08_B',
        'CH08_C',
        'CH08_D',
        'CH09',
        'CH10',
        'CH10_E',
        'CH10_M',
        'CH10_G',
        'CH11',
        'CH12',
        'CH13',
        'CH14',
        'CH15',
        'CH15_Cod',
        'CH16',
        'CH16_Cod',
        'CH24',
        'CH25',
        'V1',
        'V2',
        'V3',
        'V4',
        'V5',
        'V6',
        'V7',
        'V8',
        'V9',
        'V10',
        'V11',
        'V12',
        'V13',
        'V14',
        'V15',
        'V16',
        'V17',
        'V18',
        'V19_A',
        'V19_B',
        'VImes',
        'VIcobr',
        // 'V2_M',
        // 'V21_M',
        // 'V22_M',
        // 'V3_M',
        // 'V4_M',
        // 'V5_M',
        // 'V8_M',
        // 'V9_M',
        // 'V10_M',
        // 'V11_M',
        // 'V12_M',
        // 'V18_M',
        // 'V19_AM',
        'T_Vi',
        'DI',
        'DI_1',
        'AI',
        'AI_1',
        'MI',
        'MI_1',
        'TSA',
        'TSA_1',
        'TSA_2',
        'TV',
        'TV_1',
        'TE',
        'TE_1',
        'TM',
        'TM_1',
        'TS',
        'TS_1',
        'PM',
        'PM_1',
        'BE',
        'BE_1',
        'AUH',
        'AUH_1',
        'AUH_2',
        'AUH_3',
        'VII1',
        'VII2',
        'VII3',
        'motivo',
        'ausencia',
        'rechazo',
        'otro',
        'informante',
        'observaciones',
        'supervision',
        'super_nombre',
        'super_num',
        'r_visitas_fecha_hora_1',
        'r_visitas_fecha_hora_2',
        'r_visitas_fecha_hora_3',
        'r_visitas_fecha_hora_4',
        'r_visitas_fecha_hora_5',
        'entrega',
        'mal_tomado'];
    //
    public function vivienda()
    {
        return $this->belongsTo('App\vivienda');
    }
    public function individuos()
    {
        return $this->hasMany('App\individuo');
    }

    public function estado()
    {

        if(!$this->estado)
        {
            return 'Hogar Incompleto';
        }

        $individuos = $this->individuos;
        foreach ($individuos as $individuo) {
            if (!$individuo->estado) {
                return 'individuo incompleto';
            }
        }
        return 'ok';
    }
}
