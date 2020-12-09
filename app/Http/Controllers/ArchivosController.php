<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archivos;

class ArchivosController extends Controller
{

  public function __construct(){
      $this->middleware('auth:admins')->only('multimedia','multimediaPost','verContenido','editarMultimedia');
        $this->middleware('auth:web')->only('multimediaCliente');
  }
    public function multimedia()
    {
      $archivos = Archivos::all();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
          return view('archivos.index',compact('archivos','name'));
      }
      else{
      return "<h1>Acceso Denegado </h1><h3>Lo sentimos $name <br> has sido inhabilitado!!!</h3>";
      }
    }
    public function multimediaCliente()
    {
      $archivos = Archivos::all();
    return view('archivos.multimediaCliente',compact('archivos','name'));

    }
    public function multimediaPost()
    {
      $nombre = '';
      if (request()->hasFile('file')) {
        $destinationPath = public_path().'/imagenes';
        $files = request()->file('file');
        $file_name = $files->getClientOriginalName(); //Get file original name
            $files->move($destinationPath , $file_name); // move files to destination folder
            $nombre = $file_name;
          }
          if (request()->hasFile('fileVideo')) {
            $destinationPath = public_path().'/imagenes';
            $files = request()->file('fileVideo');
            $file_name = $files->getClientOriginalName(); //Get file original name
                $files->move($destinationPath , $file_name); // move files to destination folder
                $nombre = $file_name;
              }
      Archivos::create([
        'tipoDeArchivo'=> request('tipoDeArchivo'),
        'nombreDelArchivo'=>$nombre,
        'descripcionDelArchivo'=>request('descripcionDelArchivo')
      ]);
      return redirect('/homeAdmins')->with('status','agregado');
    }
    public function verContenido()
    {
      $archivos = Archivos::all();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
          return view('archivos.multimedia',compact('archivos','name'));
      }
      else{
      return "<h1>Acceso Denegado </h1><h3>Lo sentimos $name <br> has sido inhabilitado!!!</h3>";
      }
    }
    public function editarMultimedia(Archivos $archivo)
    {
      $nombre = $archivo->nombreDelArchivo;
      $tipo = $archivo->tipoDeArchivo;
      if (request()->hasFile('file')) {
        unlink(public_path().'/imagenes/'.$nombre);
        $destinationPath = public_path().'/imagenes';
        $files = request()->file('file');
        $file_name = $files->getClientOriginalName(); //Get file original name
            $files->move($destinationPath , $file_name); // move files to destination folder
            $nombre = $file_name;
            $tipo = request('tipoDeArchivo');
          }
          if (request()->hasFile('fileVideo')) {
            unlink(public_path().'/imagenes/'.$nombre);
            $destinationPath = public_path().'/imagenes';
            $files = request()->file('fileVideo');
            $file_name = $files->getClientOriginalName(); //Get file original name
                $files->move($destinationPath , $file_name); // move files to destination folder
                $nombre = $file_name;
                $tipo = request('tipoDeArchivo');
              }
              $archivo->tipoDeArchivo = $tipo;
              $archivo->nombreDelArchivo = $nombre;
              $archivo->descripcionDelArchivo = request('descripcionDelArchivo');
              $archivo->update();
      return redirect('/multimedia');
    }
}
