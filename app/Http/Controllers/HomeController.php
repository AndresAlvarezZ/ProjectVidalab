<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Aspecto;
use App\Especialista;
use App\Archivos;

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
          
          $aspecto = Aspecto::find('1');
          $idAspecto = Aspecto::find('1');
          $aspectoDisponible = 0;
          if(empty($idAspecto))
          {
              $aspectoDisponible = 0;
          }
          else{
              $aspectoDisponible = $idAspecto->id;
          }

          $especialistas = Especialista::all();
          $idEspecialista = Especialista::find('1');
            $especialistaDisponible = 0;
            if(empty($idEspecialista))
            {
                $especialistaDisponible = 0;
            }
            else{
                $especialistaDisponible = $idEspecialista->id;
            }

            $archivos = Archivos::all();
            $fotos = Archivos::where('tipoDeArchivo', 1)->get();

          if ($cliente!=null) {
            return view('home', compact('fotos', 'cliente','aspecto', 'especialistas', 'aspectoDisponible', 'especialistaDisponible'));
          }
          if ($cliente==null) {
            return redirect('/afiliarme');
          }
        }
    //
}
