<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\hogar;
use App\hogar_seccion_cuatro;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (Auth::user()->hasRole('admin')) {
            return view('home');
        }
        else {
            return view('home');
        }
        // return view('home');
    }

    /*
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles(‘admin’);
        return view(‘some.view’);
    }
    */

    public function make(){

        $users = [
        ["Alberto Ojeda",
                                    "aojeda", "262",'coordinador'],
        ["Rosario Garrido",
                                    "rgarrido","479",'supervisor'],
        ["Silvia Gauna" ,
                                    "sgauna","898",'supervisor'],
        ["Micaela Miranda" ,
                                    'mmiranda' ,"592",'encuestador'],
        ["Anahi Rodriguez" ,
                                    'arodriguez',"861",'encuestador'],
        ["Alejandro González" ,
                                    'agonzalez', "098",'encuestador'],
        ["Karana Solís" ,
                                    'ksolis',"828",'encuestador'],
        ["Ayelén Obregón" ,
                                    'aobregon',"223",'encuestador'],
        ["Joaquina Sanchez",
                                    'jsanchez' , "037",'admin'],
        ["Gustavo" ,
                                    'gustavo', "233",'encuestador']];

        foreach ($users as $user)
        {
            $u  = new User();

            $u->password = bcrypt($user[2]);
            $u->codigo = ($user[2]);
            $u->email = ($user[1]);
            $u->name = ($user[0]);
            $u->rol = ($user[3]);
            $u->save();
        }
    }


    public function recupero(request $request)
    {
        
        $hogar = hogar::where([
            'codigo_area'=>$request->codigo_area,
            'numero_listado'=>$request->numero_listado,
            'numero_vivienda'=>$request->numero_vivienda,
            'numero_hogar'=>$request->numero_hogar,
            'trimestre'=>$request->trimestre,
            'ano4'=>$request->ano4
        ])->whereHas('vivienda', function ($query) use ($request) {
            $query->where([
                'manz'=>$request->manz,'lado'=>$request->lado
            ]);
            })->first();
        if($hogar)
        {
            return view("reportes.recupero")->with('hogar',$hogar);
        }
        else
        {
            return "No se Encontro el Hogar";
        }

        
        
    }

    public function update_ch(request $request)
    {
        for ($i = 0; $i <= 25; $i++) {
                if ($request['carateristica_id_' . $i]) {
                    //id de seccion
                    $carateristica_id = $request['carateristica_id_' . $i];
                    $c = hogar_seccion_cuatro::find($carateristica_id);
                    if($c)
                    {
                        echo "Actualizado ok </br>";
                    }
                    else
                    {
                        return "No se Encontro caracteristica del hogar";
                    }
                $c->CH08_A = $request['CH08_A_'.$i];
                $c->CH08_B = $request['CH08_B_'.$i];
                $c->CH08_C = $request['CH08_C_'.$i];
                $c->CH08_D = $request['CH08_D_'.$i];
                $c->CH10_E = $request['CH10_E_'.$i];
                $c->CH10_M = $request['CH10_M_'.$i];
                $c->CH10_G = $request['CH10_G_'.$i];
                    $c->save();
                }
            }
        $hogar = hogar::find($request->hogar_id);
        return view("reportes.recupero")->with('hogar',$hogar);
    }
}
