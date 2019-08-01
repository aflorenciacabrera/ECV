<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hogar extends Model
{

    protected $fillable = [
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
'V2_M_NO_ASIGNABLE',
'V21_M_NO_ASIGNABLE',
'V22_M_NO_ASIGNABLE',
'V3_M_NO_ASIGNABLE',
'V4_M_NO_ASIGNABLE',
'V5_M_NO_ASIGNABLE',
'V8_M_NO_ASIGNABLE',
'V9_M_NO_ASIGNABLE',
'V10_M_NO_ASIGNABLE',
'V11_M_NO_ASIGNABLE',
'V12_M_NO_ASIGNABLE',
'V18_M_NO_ASIGNABLE',
'V19_AM_NO_ASIGNABLE',
'DI_1',
'DI',
'AI_1',
'AI',
'MI_1',
'MI',
'TS_1',
'TS',
'TE_1',
'TE',
'TV',
'TM_1',
'TM',
'PM_1',
'PM',
'TSAP_1',
'TSAP',
'BE_1',
'BE',
'AUH',
'AUH_1',
'AUH_2',
'AUH_3',
'AUH_1_2',
'AUH_2_2',
'AUH_3_2',
'AUH_1_3',
'AUH_2_3',
'AUH_3_3',
'tarea_hogar_numero_1',
'tarea_hogar_nombre_1',
'tarea_hogar_numero_2',
'tarea_hogar_nombre_2',
'tarea_hogar_numero_3',
'tarea_hogar_nombre_3',
'VII1',
'ayuda_hogar_numero_1',
'ayuda_hogar_nombre_1',
'ayuda_hogar_numero_2',
'ayuda_hogar_nombre_2',
'ayuda_hogar_numero_3',
'ayuda_hogar_nombre_3',
'VII2',
'discapacidad_hogar_numero_1',
'discapacidad_hogar_nombre_1',
'discapacidad_hogar_numero_2',
'discapacidad_hogar_nombre_2',
'discapacidad_hogar_numero_3',
'discapacidad_hogar_nombre_3',
'discapacidad_hogar_numero_4',
'discapacidad_hogar_nombre_4',
'discapacidad_hogar_numero_5',
'discapacidad_hogar_nombre_5',
'VII3',
'tiene_telefono',
'numero_telefono',
'seccion_organizacion_observaciones',
'resumen_personas_habitan',
'resumen_personas_menores',
'resumen_personas_mayores',
'resumen_encuestadas',
'resumen_no_encuestadas',
'motivo',
'ausencia',
'rechazo',
'otro',
'informante_no_encuesta',
'observaciones_no_encuesta',
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
            if (!$individuo->estado  && $individuo->edad() >= 10)
            {
                return 'individuo incompleto';
            }
        }
        return 'ok';
    }

    public function caracteristicas()
    {
        return $this->hasMany('app\hogar_seccion_cuatro');
    }
}
