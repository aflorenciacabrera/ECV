<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\individuo;
class IndividuoController extends Controller
{
      //

    public function verEncuestaIndividuo($individuo_id){
        // return view('encuestaIndividuo');
        $individuo = individuo::find($individuo_id);
        return view('encuestaIndividuo')->with('individuo', $individuo);
      }

        public function crearEncuestaIndividuo (Request $request)
        {
                $i = individuo::find($request->individuo_id);

                $i->fill($request->all()) ;
                //    print_r($request->input());
                $i->estado = 1;
                $i->save();

        //   return "ok";
        // return redirect(route("individuosEnHogar", ['hogar' => $i->hogar_id]));
        return redirect(route("individuook", ['id_individuo' => $i->id]));

        // return redirect(url('home'))->with('status','Formulario de Encuensta Individuo cargado');;
        }


    public function ok($id_individuo)
    {
        $individuo = individuo::find($id_individuo);
        return view('individuook')->with('individuo', $individuo);
    }

    public function reporte()
    {
        //$individuos = individuo::with('hogarSeccionSeis')->get();
        $individuos = individuo::with('hogar_seccion_cuatro', 'hogarSeccionSeis')->get();
        
        $individuos = $individuos->groupBy('hogar_id');
        $array=[];
        $itf=[];    
        foreach ($individuos as $key => $value) {
            //$itf=0;
            for ($i=0; $i < count($value) ; $i++) { 
                $itf[$key] += $value[$i]->PP06C;
                //dd($value[$i]->PP06C);
                //dd($individuos[$key]=$value[$i]->sum('PP06C'));
            }
            //dd($individuos);
            /*$array=[
                'hogar_id' => $key,
                'itf' => $itf
            ];
            $itf=0;*/
        }
        dd($itf);
        return view('reportes.ingresos')->with('individuos',$individuos);
    }
}
