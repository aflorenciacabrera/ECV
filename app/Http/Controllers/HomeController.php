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

    public function createUsers(){

        // Alberto Ojeda 262
        // Rosario Garrido 479
        // Silvia Gauna 898
        // Micaela Miranda 592
        // Anahi Rodriguez 861
        // Alejandro González 098
        // Karana Solís 828
        // Ayelén Obregón 223
        // Joaquina 037
        // Gustavo 233
    }
}
