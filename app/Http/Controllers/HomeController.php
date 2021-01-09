<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Paquete;
use App\Aspecto;
use App\Fondo;
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
          $this->middleware('auth')->only('index');
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
        $idEspecialista = Especialista::all();
          $especialistaDisponible = 0;
          if(empty($idEspecialista))
          {
              $especialistaDisponible = 0;
          }
          else{
              $especialistaDisponible = '1';
          }

          $fondo = Fondo::find('1');
          $fondosDisponibles = 0;
          if(empty($fondo))
          {
              $fondosDisponibles = 0;
          }
          else{
              $fondosDisponibles = $fondo->id;
          }

          $paquetes = Paquete::all();
          $paquetesDisponibles = 0;
          if(empty($paquetes))
          {
              $paquetesDisponibles = 0;
          }
          else{
              $paquetesDisponibles = 1;
          }

          $archivos = Archivos::all();
          $fotos = Archivos::where('tipoDeArchivo', 1)->get();

        if ($cliente!=null) {
          return view('home', compact('fotos', 'paquetes', 'cliente','aspecto', 'fondo', 'fondosDisponibles', 'paquetesDisponibles', 'especialistas', 'aspectoDisponible', 'especialistaDisponible'));
        }
        if ($cliente==null) {
          return redirect('/afiliarme');
        }
      }
    //

  //


  //HOME PARA TODO PUBLICO
    public function homePublico()
    {
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
      $idEspecialista = Especialista::all();
      $especialistaDisponible = 0;
      if(empty($idEspecialista))
      {
          $especialistaDisponible = 0;
      }
      else{
          $especialistaDisponible = '1';
      }


      $fondo = Fondo::find('1');
      $fondosDisponibles = 0;
      if(empty($fondo))
      {
          $fondosDisponibles = 0;
      }
      else{
          $fondosDisponibles = $fondo->id;
      }

      $archivos = Archivos::all();
      $fotos = Archivos::where('tipoDeArchivo', 1)->get();

      return view('/homeGeneral', compact('fotos', 'aspecto', 'especialistas', 'fondo', 'fondosDisponibles', 'aspectoDisponible', 'especialistaDisponible'));
    }  
   //
}
