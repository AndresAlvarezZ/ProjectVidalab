<?php

namespace App\Http\Controllers;

use App\Paquete;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\paquetesImport;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
    public function __construct()
    {
      $this->middleware('auth:admins');
    }
  //

  //LISTAR REGISTROS
    public function index ()
    {
      $paquetes = Paquete::all();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view('paquetes.index',compact('paquetes', 'name'));
      }
      else{
        return view('layouts.seccionesGenerales.accesoDenegado', compact('name'));
      }
    }
  //

  //GUARDAR REGISTROS
    public function guardar (Request $request)
    {
      $paquete = new Paquete;
      $paquete->codigoDelPaquete = $request->input('codigoDelPaquete1');
      $paquete->nombreDelPaquete = $request->input('nombreDelPaquete1');
      $paquete->costoDelPaquete = $request->input('costoDelPaquete1');
      $paquete->descripcionDelPaquete = $request->input('descripcionDelPaquete1');
      $paquete->save();
    }
  //


  //IMPORTAR REGISTROS
    public function importarRegistros(Request $request)
    {
      $archivo = $request->file('archivo');
      Excel::import(new paquetesImport, $archivo);

      return redirect ('/paquetes');
    }
  //


  //SUBIR FOTO DE PERFIL
    public function subirImagenPaquete(Request $request)
    {
      $identificador = '';
      $identificador = $request->input('id');
      $paquete = Paquete::find($identificador);

      if (request()->hasFile('imagenDelPaquete'))
      {
        if ($paquete->imagenDelPaquete!=null) {
          unlink(public_path().'/imgDePaquetes/'.$paquete->imagenDelPaquete);
        }
          $destinationPath = public_path().'/imgDePaquetes';
          $files = request()->file('imagenDelPaquete');
          $file_name = $files->getClientOriginalName();
          $files->move($destinationPath , $file_name);
          $paquete->imagenDelPaquete = $file_name;
          $paquete->update();
      }
      return redirect('/paquetes');
    }
  //


  //ACTUALIZAR REGISTROS
    public function actualizar (Request $request, $id)
    {
      $paquete = Paquete::find($id);

      $paquete->codigoDelPaquete = $request->input('codigoDelPaquete3');
      $paquete->nombreDelPaquete = $request->input('nombreDelPaquete3');
      $paquete->imagenDelPaquete = $request->input('imagenDelPaquete3');
      $paquete->costoDelPaquete = $request->input('costoDelPaquete3');
      $paquete->descripcionDelPaquete = $request->input('descripcionDelPaquete3');
      $paquete->save();
    }
  //


  //ELIMINAR REGISTROS
    public function eliminar ($id)
    {
      $paquete = Paquete::find($id);
      $paquete->delete();
      return $paquete;
    }
  //

}
