<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

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
    //


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
        public function index()
        {
          $clave =Auth()->user()->dniDelUsuario;
          $cliente = Clientes::find($clave);
          if ($cliente!=null) {
            return view('home');
          }
          if ($cliente==null) {
            return redirect('/afiliarme');
          }
        }
    //
}
