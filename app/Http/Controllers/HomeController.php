<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
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
                                    "aojeda", "262",'encuestador'],
        ["Rosario Garrido",
                                    "rgarrido","479",'encuestador'],
        ["Silvia Gauna" ,
                                    "sgauna","898",'encuestador'],
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
}
