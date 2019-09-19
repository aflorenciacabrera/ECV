<?php

namespace App;

use App\hogarSeccionSeis;
use App\hogar_seccion_cuatro;
use Illuminate\Database\Eloquent\Model;

class individuo extends Model
{
    //
protected $fillable = ['Entrev_realiz',
'numero_componente',
'numero_respondente',
        'nombre_respondente',
'nombre',
'codigo_area',
'numero_listado',
'numero_semana',
'trimestre',
'ano4',
'numero_vivienda',
'numero_hogar',
'PP01A',
'PP01B',
'PP01C',
'PP01D',
'PP01D_Esp',
'PP01E',
'PP01F',
'PP01F_Esp',
'PP01G',
'PP01H',
'PP02A',
'PP02B',
'PP02C',
'PP02C_Esp',
'PP02D',
'PP02D_Esp',
'PP02E',
'PP02E_Esp',
'PP02F',
'PP02G',
'PP02H',
'PP02I',
'PP02Obser',
'PP03A',
'PP03B',
'PP03C',
'PP03D',
'PP03E_domigo',
'PP03E_lunes',
'PP03E_martes',
'PP03E_miercoles',
'PP03E_jueves',
'PP03E_viernes',
'PP03E_sabado',
'PP03E',
'PP03F_domingo',
'PP03F_lunes',
'PP03F_martes',
'PP03F_miercoles',
'PP03F_jueves',
'PP03F_viernes',
'PP03F_sabado',
'PP03F',
'PP03G',
'PP03H',
'PP03I',
'PP03J',
'PP03K',
'PP04A',
'PP04A_Esp',
'PP04B',
'PP04B1',
'PP04B2',
'PP04B3_ANO',
'PP04B3_MES',
'PP04B3_DIA',
'PP04B4',
'PP04C',
'PP04C99',
'PP04D',
'PP04E',
'PP04F',
'PP04G',
'PP04G_Esp',
'PP05A',
'PP05C_1',
'PP05C_2',
'PP05C_3',
'PP05B',
'PP05B1',
'PP05B2_ANO',
'PP05B_MES',
'PP05B2_DIA',
'PP05D',
'PP05E',
'PP05F',
'PP05G',
'PP05H',
'PP06A',
'PP06B',
'PP06C',
'PP06C_op',
'PP06D',
'PP06D_op',
'PP06E',
'PP06F',
'PP06G',
'PP06G_op',
'PP06H',
'PP06H_Esp',
'PP06I',
'PP06J',
'PP06L',
'PP06K',
'PP06k_sem',
'PP06k_mes',
'PP07A',
'PP07B',
'PP07B_Esp',
'PP07C',
'PP07D',
'PP07E',
'PP07G1',
'PP07G2',
'PP07G3',
'PP07G4',
'PP07G5',
'PP07F1',
"PP07F11",
"PP07F12",
"PP07F13",
'PP07F2',
'PP07F3',
'PP07F4',
'PP07F5',
'PP07F1_1',
'PP07H',
'PP07I',
'PP07J',
'PP07K',
'PP08A_1',
'PP08A_2',
'PP08A_3',
'PP08A_4',
'PP08A_5',
'PP08A_6',
'PP08E_1',
'PP08E_2',
'PP08E_3',
'PP08A',
'PP08B',
'PP08C',
'PP08D2',
'PP08D3',
'PP08D4',
'PP08E',
'PP08F1',
'PP08F2',
'PP08G',
'PP08G1',
'PP08G2',
'PP08H',
'PP08I',
'PP08J1',
'PP08J2',
'PP08J3',
'PP08K',
'PP09A',
'PP09A_ESP',
'PP09B',
'PP09B_ESP',
'PP09C',
'PP10A',
'PP10B1',
'PP10B2',
'PP10B3',
'PP10B4',
'PP10B5',
'PP10B6',
'PP10B7',
'PP10B8',
'PP10B9',
'PP10B10',
'PP10C',
'PP10D',
'PP10E',
'PP11A',
'PP11B',
'PP11B1',
'PP11B2_ANO',
'PP11B2_MES',
'PP11B2_DIA',
'PP11B3',
'PP11C',
'PP11C99',
'PP11D',
'PP11E',
'PP11F',
'PP11G_ANO',
'PP11G_MES',
'PP11G_DIA',
'PP11H',
'PP11I',
'PP11J',
'PP11K',
'PP11K1',
'PP11K2',
'PP11K3',
'PP11L',
'PP11L1',
'PP11M',
'PP11M1',
'PP11N',
'PP11O',
'PP11O_esp',
'PP11P',
'PP11Q',
'PP11R',
'PP11S',
'PP11T',
'seccion_12_mes',
'PP12A',
'PP12B1',
'PP12B12',
'PP12B2',
'PP12B22',
'PP12B3',
'PP12B32',
'seccion_13_observaciones',
'seccion_13_encuestador',
'seccion_13_encuestador_numero',
'seccion_13_fecha1',
'seccion_13_hora1',
'seccion_13_fecha2',
'seccion_13_hora2',
'seccion_13_fecha3',
'seccion_13_hora3',
'seccion_13_modalidad'];
    public function hogar()
    {
        return $this->belongsTo('App\hogar');
    }



    public function nolaboral()
    {
        return $this->hasOne('App\hogarSeccionSeis');
    }
    public function caracteristicas()
    {
        return $this->hasOne('App\hogar_seccion_cuatro');
    }

    public function edad()
    {
        return $this->caracteristicas["CH06"];
    }
    public function sexo()
    {
        switch ($this->caracteristicas["CH04"]) {
            case 1:
                return "Hombre";
                break;
            case 2:
                return "Mujer";
                break;

            default:
                # code...
                break;
        };
    }
    public function hogar_seccion_cuatro()
    {
        return $this->belongsTo(hogar_seccion_cuatro::class, 'id', 'individuo_id');
    }

    public function ingresosLaborales()
    {
        $c = 0;
        $c += $this->PP06C == -9? 0 : $this->PP06C;
        $c += $this->PP06D == -9? 0 : $this->PP06D;
        $c += $this->PP06G == -9? 0 : $this->PP06G;
        $c += $this->PP08D2 == -9? 0 : $this->PP08D2;
        $c += $this->PP08D3 == -9? 0 : $this->PP08D3;
        $c += $this->PP08D4 == -9? 0 : $this->PP08D4;
        $c += $this->PP08J1 == -9? 0 : $this->PP08J1;
        $c += $this->PP08J2 == -9? 0 : $this->PP08J2;
        $c += $this->PP08J3 == -9? 0 : $this->PP08J3;
        $c += $this->PP08F1 == -9? 0 : $this->PP08F1;
        $c += $this->PP08F2 == -9? 0 : $this->PP08F2;
        $c += $this->PP12B1 == -9? 0 : $this->PP12B1;
        $c += $this->PP12B12 == -9? 0 : $this->PP12B12;
        $c += $this->PP12B2 == -9? 0 : $this->PP12B2;
        $c += $this->PP12B22 == -9? 0 : $this->PP12B22;
        $c += $this->PP12B3 == -9? 0 : $this->PP12B3;
        $c += $this->PP12B32 == -9? 0 : $this->PP12B32;
        return $c;
    }
}
