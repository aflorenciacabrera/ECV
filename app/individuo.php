<?php

namespace App;

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

    public function ingresosNoLaborales()
    {
        $c = 0;
        $nl = $this->nolaboral;
        $l = [
            $nl->V2_M,
            $nl->V21_M,
            $nl->V22_M,
            $nl->V3_M,
            $nl->V4_M,
            $nl->V5_M,
            $nl->V8_M,
            $nl->V9_M,
            $nl->V10_M,
            $nl->V11_M,
            $nl->V12_M,
            $nl->V18_M,
            $nl->V19_AM,
        ];
        foreach ($l as $value) {
            if ($value == -9) {
                return -9;
            } else {
                $c += $value;
            }
        }

        return $c;

    }



    public function ingresosLaborales()
    {
        $c = 0;
        $l = [  $this->PP06C,
                $this->PP06D,
                $this->PP06G,
                $this->PP08D2,
                $this->PP08D3,
                $this->PP08D4,
                $this->PP08J1,
                $this->PP08J2,
                $this->PP08J3,
                $this->PP08F1,
                $this->PP08F2,
                $this->PP12B1,
                $this->PP12B12,
                $this->PP12B2,
                $this->PP12B22,
                $this->PP12B3,
                $this->PP12B32];

        foreach ($l as $value)
        {
            if($value == -9)
            {
                return -9;
            }
            else {
                $c += $value;
            }
        }

        return $c;
    }

    public function adultoEquivalente()
    {
        $edad = $this->edad();

        if ($this->sexo() == "Mujer") {
            if ($edad <= 0) {
                return 0.35;
            } elseif ($edad == 1) {
                return 0.37;
            } elseif ($edad == 2) {
                return 0.46;
            } elseif ($edad == 3) {
                return 0.51;
            } elseif ($edad == 4) {
                return 0.55;
            } elseif ($edad == 5) {
                return 0.60;
            } elseif ($edad == 6) {
                return 0.64;
            } elseif ($edad == 7) {
                return 0.66;
            } elseif ($edad == 8) {
                return 0.68;
            } elseif ($edad == 9) {
                return 0.69;
            } elseif ($edad == 10) {
                return 0.70;
            } elseif ($edad == 11) {
                return 0.72;
            } elseif ($edad == 12) {
                return 0.74;
            } elseif ($edad == 13) {
                return 0.76;
            } elseif ($edad == 14) {
                return 0.76;
            } elseif ($edad == 15) {
                return 0.77;
            } elseif ($edad == 16) {
                return 0.77;
            } elseif ($edad == 17) {
                return 0.77;
            } elseif ($edad >= 18 && $edad <= 29) {
                return 0.76;
            } elseif ($edad >= 30 && $edad <= 45) {
                return 0.77;
            } elseif ($edad >= 46 && $edad <= 60) {
                return 0.76;
            } elseif ($edad >= 61 && $edad <= 75) {
                return 0.67;
            } elseif ($edad > 75) {
                return 0.63;
            }
        } else {
            // HOMBRE
            if ($edad <= 0) {
                return 0.35;
            } elseif ($edad == 1) {
                return 0.37;
            } elseif ($edad == 2) {
                return 0.46;
            } elseif ($edad == 3) {
                return 0.51;
            } elseif ($edad == 4) {
                return 0.55;
            } elseif ($edad == 5) {
                return 0.60;
            } elseif ($edad == 6) {
                return 0.64;
            } elseif ($edad == 7) {
                return 0.66;
            } elseif ($edad == 8) {
                return 0.68;
            } elseif ($edad == 9) {
                return 0.69;
            } elseif ($edad == 10) {
                return 0.79;
            } elseif ($edad == 11) {
                return 0.82;
            } elseif ($edad == 12) {
                return 0.85;
            } elseif ($edad == 13) {
                return 0.90;
            } elseif ($edad == 14) {
                return 0.96;
            } elseif ($edad == 15) {
                return 1;
            } elseif ($edad == 16) {
                return 1.03;
            } elseif ($edad == 17) {
                return 1.04;
            } elseif ($edad >= 18 && $edad <= 29) {
                return 1.02;
            } elseif ($edad >= 30 && $edad <= 45) {
                return 1;
            } elseif ($edad >= 46 && $edad <= 60) {
                return 1;
            } elseif ($edad >= 61 && $edad <= 75) {
                return 0.83;
            } elseif ($edad > 75) {
                return 0.74;
            }
        }
    }


    public function P21(){
        $c = 0;
        $l = [$this->PP06C, $this->PP06D, $this->PP06G, $this->PP08D2, $this->PP08D3, $this->PP08D4, $this->PP08J1, $this->PP08J2, $this->PP08J3, $this->PP08F1, $this->PP08F2];
        foreach ($l as $value) {
            if ($value == -9) {
                return -9;
            } else {
                $c += $value;
            }
        }

        return $c;
    }

    public function P47T(){
        $c = 0;

        $l = [$this->P21(), $this->PP12B1, $this->PP12B12, $this->PP12B2, $this->PP12B22, $this->PP12B3, $this->PP12B32, $this->T_V() ];
        foreach ($l as $value) {
            if ($value == -9) {
                return -9;
            } else {
                $c += $value;
            }
        }
        return $c;
    }

    public function T_V()
    {
        return $this->ingresosNoLaborales();
    }

    public function auh()
    {
        if($this->numero_componente == $this->hogar->AUH_1)
        {
            return $this->hogar->AUH_3;

        }
        if($this->numero_componente == $this->hogar->AUH_1_2)
        {
            return $this->hogar->AUH_3_2;
        }
        if($this->numero_componente == $this->hogar->AUH_1_3 )
        {
            return $this->hogar->AUH_3_3;
        }
        return 0;
    }

// gen NIVEL_ED=.
// *Sin instruccion
// replace NIVEL_ED=0 if ch10==3
// *Primaria Incompleta
// replace NIVEL_ED=1 if ch12==1 & ch13==1
// replace NIVEL_ED=1 if ch12==2 & ch13==1
// replace NIVEL_ED=1 if ch12==3 & ch13==1
// replace NIVEL_ED=1 if ch12==4 & ch13==1
// replace NIVEL_ED=1 if ch12==5 & ch13==2
// replace NIVEL_ED=1 if ch12==6 & ch13==2
// *Primaria Completa
// replace NIVEL_ED=2 if ch12==5 & ch13==1
// replace NIVEL_ED=2 if ch12==6 & ch13==1
// *Secundaria Incompleta
// replace NIVEL_ED=3 if ch12==7 & ch13==2
// replace NIVEL_ED=3 if ch12==8 & ch13==2
// replace NIVEL_ED=3 if ch12==9 & ch13==2
// replace NIVEL_ED=3 if ch12==10 & ch13==2
// *Secundaria Completa
// replace NIVEL_ED=4 if ch12==7 & ch13==1
// replace NIVEL_ED=4 if ch12==8 & ch13==1
// replace NIVEL_ED=4 if ch12==9 & ch13==1
// replace NIVEL_ED=4 if ch12==10 & ch13==1
// *Superior Universitaria Incompleta
// replace NIVEL_ED=5 if ch12==11 & ch13==2
// replace NIVEL_ED=5 if ch12==12 & ch13==2
// *Superior Universitaria Completa
// replace NIVEL_ED=6 if ch12==11 & ch13==1
// replace NIVEL_ED=6 if ch12==12 & ch13==1
// *Posgrado Incompleto
// replace NIVEL_ED=7 if ch12==13 & ch13==2
// *Posgrado Completo
// replace NIVEL_ED=8 if ch12==13 & ch13==1
// *Ns./Nr.
// replace NIVEL_ED=9 if ch13==9 | ch13==0



    public function NIVEL_ED(){
        $ch12 = $this->caracteristicas->CH12;
        $ch13 = $this->caracteristicas->CH13;
        $ch10 = $this->caracteristicas->CH10;
        if($ch10 == 3)
        {
            return 0;
        }
        if ($ch12 == 1 && $ch13 == 1) {
            return 1;
        }
        if ($ch12 == 2 && $ch13 == 1) {
            return 1;
        }
        if ($ch12 == 3 && $ch13 == 1) {
            return 1;
        }
        if ($ch12 == 4 && $ch13 == 1) {
            return 1;
        }
        if ($ch12 == 5 && $ch13 == 2) {
            return 1;
        }
        if ($ch12 == 6 && $ch13 == 2) {
            return 1;
        }
        //
        if ($ch12 == 5 && $ch13 == 1) {
            return 2;
        }
        if ($ch12 == 6 && $ch13 == 1) {
            return 2;
        }
        //
        if ($ch12 == 7 && $ch13 == 2) {
            return 3;
        }
        if ($ch12 == 8 && $ch13 == 2) {
            return 3;
        }
        if ($ch12 == 9 && $ch13 == 2) {
            return 3;
        }
        if ($ch12 == 10 && $ch13 == 2) {
            return 3;
        }
        //
        if ($ch12 == 7 && $ch13 == 1) {
            return 4;
        }
        if ($ch12 == 8 && $ch13 == 1) {
            return 4;
        }
        if ($ch12 == 9 && $ch13 == 1) {
            return 4;
        }
        if ($ch12 == 10 && $ch13 == 1) {
            return 4;
        }
        //
        if ($ch12 == 11 && $ch13 == 2) {
            return 5;
        }
        if ($ch12 == 12 && $ch13 == 2) {
            return 5;
        }
        //
        if ($ch12 == 11 && $ch13 == 1) {
            return 6;
        }
        if ($ch12 == 12 && $ch13 == 1) {
            return 6;
        }
        //
        if ($ch12 == 13 && $ch13 == 2) {
            return 7;
        }
        if ($ch12 == 13 && $ch13 == 1) {
            return 8;
        }
        if ($ch13 == 9 || $ch13 == 0) {
            return 9;
        }
    }

    //     #CATEGORIA ESTADO OCUPACIONAL
    // gen ESTADO=.
    // #si no se relizo la entrevista
    // replace ESTADO=0 if entrev_realiz==2
    // #ocupado
    // replace ESTADO=1 if pp01a==1 | pp01b==1
    // #desocupado
    // replace ESTADO=2 if pp02b==1
    // #Inactivo
    // replace ESTADO=3 if pp01e==1 | pp01e==2 |pp02f==2
    // #Menor de 10 anios
    // replace ESTADO=4 if CH06<10

    public function estado(){
        if($this->entrev_realiz == 2)
        {
            return 0;
        }
        if($this->PP01A == 1 || $this->PP01B == 1)
        {
            return 1;
        }
        if($this->PP02B == 1)
        {
            return 2;
        }
        if($this->PP01E == 1 || $this->PP01E == 2 || $this->PP02F == 2)
        {
            return 3;
        }
        if($this->caracteristicas->CH06 < 10){
            return 4;
        }

    }

    // #CATEGORIA OCUPACIONAL
    // gen CAT_OCUP=.
    // #Patron
    // replace CAT_OCUP=1 if pp05a==1 & pp05d==1
    // #Cuenta propia
    // replace CAT_OCUP=2 if pp05a=1 & (pp05d==2 | pp05d==3)
    // #Obrero o empleado
    // replace CAT_OCUP=3 if pp05a==3
    // #Trabajador familiar sin remuneracion
    // replace CAT_OCUP=4 if pp05a==2 & pp05b==2 & pp05b1==3
    // #Ns./Nr.
    // (me parece que es si no se completa: pp05a=null)


    public function categoriaOcupacional()
    {
            if ($this->PP05A==1 && $this->PP05D==1){
            return 1;
            }
            if ($this->PP05A==1 && ($this->PP05D==2 || $this->PP05D==3)){
            return 2;
            }
            if ($this->PP05A==3){
            return 3;
            }
            if ($this->PP05A==2 && $this->PP05B==2 && $this->PP05B1==3){
            return 4;
            }
            // #Ns./Nr.
            // (me parece que es si no se completa: pp05a=null)
    }


/**
 *  // #CATEGORIA INACTIVOS
 */

//       #CATEGORIA INACTIVOS
// gen CAT_INAC=.
// #Jubilado o pensionado
// replace CAT_INAC=1 if v21==1
// #Rentista
// replace CAT_INAC=2 if v8_m==1 & v9_m==1 & v10_m==1
// #Estudiante
// replace CAT_INAC=3 if ch10=1 & pp01e==2
// #Ama de casa
// replace CAT_INAC=4 if pp01e==2
// #Menor de 6 anios
// replace CAT_INAC=5 if CH06<6
// #Discapacidad
// replace CAT_INAC=6 if discapacidad_hogar_numero_1=!null | discapacidad_hogar_numero_2=!null | discapacidad_hogar_numero_3=!null | discapacidad_hogar_numero_4=!null
// #Otros

// #Ns./Nr.

// #IMPUTADOS
// gen IMPUTA=.
// (todavia no se)

public function categoriaInactivos(){
    if($this->nolaboral->V21_M >= 1)
    {
        return 1;
    }
    if($this->nolaboral->V8_M == 1 && $this->nolaboral->V9_M == 1 && $this->nolaboral->V10_M == 1)
    {
        return 2;
    }
    if($this->caracteristicas->CH10 == 1 && $this->PP01E == 2)
    {
        return 3;
    }
    if($this->PP01E == 2)
    {
        return 4;
    }
    if($this->caracteristicas->CH06 < 6)
    {
        return 5;
    }
    if($this->discapacidad())
    {
        return 6;
    }

}

public function discapacidad()
{
     if($this->numero_componente == $this->hogar->discapacidad_hogar_numero_1)
        {
            return true;
        }
        if($this->numero_componente == $this->hogar->discapacidad_hogar_numero_2)
        {
             return true;
        }
        if($this->numero_componente == $this->hogar->discapacidad_hogar_numero_3 )
        {
              return true;
        }
          if($this->numero_componente == $this->hogar->discapacidad_hogar_numero_4 )
        {
              return true;
        }
        return 0;
}




// # INTENSIDAD DE TRABAJO
// gen INTENSI=.
// #subocupado por insuficiencia horaria
// replace INTENSI=1 if pp03f<35 & pp03g==1 & pp03h==1
// #Ocupado pleno
// replace INTENSI=2 if ch06>=10 & pp01a==1 & pp01e==5
// #sobreocupado
// replace INTENSI=3 if pp03f>40
// #Ocupado que no trabajo en la semana
// replace INTENSI=4 if pp01e==5
// #Ns./Nr.

public function intensidad(){
    if($this->PP03F < 35 && $this->PP03G == 1 && $this->PP03H == 1)
    {
        return 1;
    }
    if($this->caracteristicas->CH06 >= 10 && $this->PP03G == 1 && $this->PP01E == 5)
    {
        return 2;
    }
    if( $this->PP03F > 40)
    {
        return 3;
    }
    if($this->PP01E == 5)
    {
        return  4;
    }
}


public function completo()
{
    return ($this->ingresosLaborales() !== -9 && $this->ingresosNoLaborales() !== -9);
}


}
