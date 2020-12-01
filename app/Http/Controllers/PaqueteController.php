<?php

namespace App\Http\Controllers;

use App\Paquete;
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
        return "<h1>Acceso Denegado </h1><h3>Lo sentimos $name <br> has sido inhabilitado!!!</h3>";
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


  //ACTUALIZAR REGISTROS
    public function actualizar (Request $request, $id)
    {
      $paquete = Paquete::find($id);

      $paquete->codigoDelPaquete = $request->input('codigoDelPaquete3');
      $paquete->nombreDelPaquete = $request->input('nombreDelPaquete3');
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
