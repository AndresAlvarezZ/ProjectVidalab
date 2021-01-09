<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fondo;

class FondoController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  //PERMISOS
    public function __construct()
    {
        $this->middleware('auth:admins')
        ->only
        (
          'subirFondos',
          'actualizarFondo',
        );
    }
  //


  //AGREGAR FONDO
    public function subirFondos(Request $request)
    {
      $fondo = new Fondo;
      if (request()->hasFile('imagenDeBienvenida')) 
      {
        if ($fondo->imagenDeBienvenida!=null) {
          unlink(public_path().'/imgHomeClientes/'.$fondo->imagenDeBienvenida);
        }
        $destinationPath = public_path().'/imgHomeClientes';
        $files = request()->file('imagenDeBienvenida');
        $file_name = $files->getClientOriginalName(); //Get file original name
        $files->move($destinationPath , $file_name); // move files to destination folder
        $fondo->imagenDeBienvenida = $file_name;
      }


      if (request()->hasFile('imagenDeHistoria')) 
      {
        if ($fondo->imagenDeHistoria!=null) {
          unlink(public_path().'/imgHomeClientes/'.$fondo->imagenDeHistoria);
        }
        $destinationPath = public_path().'/imgHomeClientes';
        $files = request()->file('imagenDeHistoria');
        $file_name = $files->getClientOriginalName(); //Get file original name
        $files->move($destinationPath , $file_name); // move files to destination folder
        $fondo->imagenDeHistoria = $file_name;
      }

      if (request()->hasFile('imagenDeMision')) 
      {
        if ($fondo->imagenDeMision!=null) {
          unlink(public_path().'/imgHomeClientes/'.$fondo->imagenDeMision);
        }
        $destinationPath = public_path().'/imgHomeClientes';
        $files = request()->file('imagenDeMision');
        $file_name = $files->getClientOriginalName(); //Get file original name
        $files->move($destinationPath , $file_name); // move files to destination folder
        $fondo->imagenDeMision = $file_name;
      }

      if (request()->hasFile('imagenDeVision')) 
      {
        if ($fondo->imagenDeVision!=null) {
          unlink(public_path().'/imgHomeClientes/'.$fondo->imagenDeVision);
        }
        $destinationPath = public_path().'/imgHomeClientes';
        $files = request()->file('imagenDeVision');
        $file_name = $files->getClientOriginalName(); //Get file original name
        $files->move($destinationPath , $file_name); // move files to destination folder
        $fondo->imagenDeVision = $file_name;
      }

      if (request()->hasFile('imagenDeValores')) 
      {
        if ($fondo->imagenDeValores!=null) {
          unlink(public_path().'/imgHomeClientes/'.$fondo->imagenDeValores);
        }
        $destinationPath = public_path().'/imgHomeClientes';
        $files = request()->file('imagenDeValores');
        $file_name = $files->getClientOriginalName(); //Get file original name
        $files->move($destinationPath , $file_name); // move files to destination folder
        $fondo->imagenDeValores = $file_name;
      }

      if (request()->hasFile('imagenDeCompromiso')) 
      {
        if ($fondo->imagenDeCompromiso!=null) {
          unlink(public_path().'/imgHomeClientes/'.$fondo->imagenDeCompromiso);
        }
        $destinationPath = public_path().'/imgHomeClientes';
        $files = request()->file('imagenDeCompromiso');
        $file_name = $files->getClientOriginalName(); //Get file original name
        $files->move($destinationPath , $file_name); // move files to destination folder
        $fondo->imagenDeCompromiso = $file_name;
      }

      if (request()->hasFile('imagenDeProfesionales')) 
      {
        if ($fondo->imagenDeProfesionales!=null) {
          unlink(public_path().'/imgHomeClientes/'.$fondo->imagenDeProfesionales);
        }
        $destinationPath = public_path().'/imgHomeClientes';
        $files = request()->file('imagenDeProfesionales');
        $file_name = $files->getClientOriginalName(); //Get file original name
        $files->move($destinationPath , $file_name); // move files to destination folder
        $fondo->imagenDeProfesionales = $file_name;
      }

      if (request()->hasFile('imagenDeContactos')) 
      {
        if ($fondo->imagenDeContactos!=null) {
          unlink(public_path().'/imgHomeClientes/'.$fondo->imagenDeContactos);
        }
        $destinationPath = public_path().'/imgHomeClientes';
        $files = request()->file('imagenDeContactos');
        $file_name = $files->getClientOriginalName(); //Get file original name
        $files->move($destinationPath , $file_name); // move files to destination folder
        $fondo->imagenDeContactos = $file_name;
      }

      $fondo->save();
      return redirect('/informacion');
    }
  //


  //EDITAR FONDO
    public function actualizarFondo(Request $request)
    {
      $archivo = Fondo::find('1');
      $nombre = $archivo->imagenDeBienvenida;
      if($request->input('id') == '1')
      {
        if (request()->hasFile('imagenDeBienvenida2')) 
        {
          unlink(public_path().'/imgHomeClientes/'.$nombre);
          $destinationPath = public_path().'/imgHomeClientes';
          $files = request()->file('imagenDeBienvenida2');
          $file_name = $files->getClientOriginalName(); //Get file original name
          $files->move($destinationPath , $file_name); // move files to destination folder
          $nombre = $file_name;
        }
        $archivo->imagenDeBienvenida = $nombre;
      }
      else if($request->input('id') == '2')
      {
          $nombre = $archivo->imagenDeHistoria;
          if (request()->hasFile('imagenDeHistoria2')) 
          {
            unlink(public_path().'/imgHomeClientes/'.$nombre);
            $destinationPath = public_path().'/imgHomeClientes';
            $files = request()->file('imagenDeHistoria2');
            $file_name = $files->getClientOriginalName(); //Get file original name
            $files->move($destinationPath , $file_name); // move files to destination folder
            $nombre = $file_name;
          }
  
          $archivo->imagenDeHistoria = $nombre;

      }
      else if($request->input('id') == '3')
      {
          $nombre = $archivo->imagenDeMision;
          if (request()->hasFile('imagenDeMision2')) 
          {
            unlink(public_path().'/imgHomeClientes/'.$nombre);
            $destinationPath = public_path().'/imgHomeClientes';
            $files = request()->file('imagenDeMision2');
            $file_name = $files->getClientOriginalName(); //Get file original name
            $files->move($destinationPath , $file_name); // move files to destination folder
            $nombre = $file_name;
          }
  
          $archivo->imagenDeMision = $nombre;

      }
      else if($request->input('id') == '4')
      {
          $nombre = $archivo->imagenDeVision;
          if (request()->hasFile('imagenDeVision2')) 
          {
            unlink(public_path().'/imgHomeClientes/'.$nombre);
            $destinationPath = public_path().'/imgHomeClientes';
            $files = request()->file('imagenDeVision2');
            $file_name = $files->getClientOriginalName(); //Get file original name
            $files->move($destinationPath , $file_name); // move files to destination folder
            $nombre = $file_name;
          }
  
          $archivo->imagenDeVision = $nombre;

      }
      else if($request->input('id') == '5')
      {
          $nombre = $archivo->imagenDeValores;
          if (request()->hasFile('imagenDeValores2')) 
          {
            unlink(public_path().'/imgHomeClientes/'.$nombre);
            $destinationPath = public_path().'/imgHomeClientes';
            $files = request()->file('imagenDeValores2');
            $file_name = $files->getClientOriginalName(); //Get file original name
            $files->move($destinationPath , $file_name); // move files to destination folder
            $nombre = $file_name;
          }
  
          $archivo->imagenDeValores = $nombre;

      }
      else if($request->input('id') == '6')
      {
          $nombre = $archivo->imagenDeCompromiso;
          if (request()->hasFile('imagenDeCompromiso2')) 
          {
            unlink(public_path().'/imgHomeClientes/'.$nombre);
            $destinationPath = public_path().'/imgHomeClientes';
            $files = request()->file('imagenDeCompromiso2');
            $file_name = $files->getClientOriginalName(); //Get file original name
            $files->move($destinationPath , $file_name); // move files to destination folder
            $nombre = $file_name;
          }
  
          $archivo->imagenDeCompromiso = $nombre;


      }
      else if($request->input('id') == '7')
      {
          $nombre = $archivo->imagenDeProfesionales;
          if (request()->hasFile('imagenDeProfesionales2')) 
          {
            unlink(public_path().'/imgHomeClientes/'.$nombre);
            $destinationPath = public_path().'/imgHomeClientes';
            $files = request()->file('imagenDeProfesionales2');
            $file_name = $files->getClientOriginalName(); //Get file original name
            $files->move($destinationPath , $file_name); // move files to destination folder
            $nombre = $file_name;
          }
  
          $archivo->imagenDeProfesionales = $nombre;

      }
      else if($request->input('id') == '8')
      {
          $nombre = $archivo->imagenDeContactos;
          if (request()->hasFile('imagenDeContactos2')) 
          {
            unlink(public_path().'/imgHomeClientes/'.$nombre);
            $destinationPath = public_path().'/imgHomeClientes';
            $files = request()->file('imagenDeContactos2');
            $file_name = $files->getClientOriginalName(); //Get file original name
            $files->move($destinationPath , $file_name); // move files to destination folder
            $nombre = $file_name;
          }
  
          $archivo->imagenDeContactos = $nombre;

      }
      
      $archivo->update();

      return redirect('/informacion');
    }
  //
}
