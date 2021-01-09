<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Cita;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\empresasImport;
use Illuminate\Http\Request;

class EmpresaController extends Controller
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
      $empresas = Empresa::orderBy('nombreDeLaEmpresa', 'asc')->get();
      $citas = Cita::all();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view('empresas.index',compact('empresas', 'citas', 'name'));
      }
      else{
        return view('layouts.seccionesGenerales.accesoDenegado', compact('name'));
      }
    }
  //


  //MOSTRAR ÚNICO REGISTRO
    public function mostrar(Empresa $empresa)
    {
      $empresas = Empresa::all();
      $citas = Cita::orderBy('created_at', 'desc')->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view('empresas.mostrar', compact('empresa', 'citas','name'));
      }
      else{
        return view('layouts.seccionesGenerales.accesoDenegado', compact('name'));
      }
    }
  //


  //GUARDAR REGISTROS
    public function guardar (Request $request)
    {
      $empresa = new Empresa;

      $empresa->nombreDeLaEmpresa = $request->input('nombreDeLaEmpresa1');
      $empresa->numeroDeTelefonoDeLaEmpresa = $request->input('numeroDeTelefonoDeLaEmpresa1');
      $empresa->correoElectronicoDeLaEmpresa = $request->input('correoElectronicoDeLaEmpresa1');
      $empresa->direccionDeLaEmpresa = $request->input('direccionDeLaEmpresa1');
      $empresa->save();
    }
  //


  //IMPORTAR REGISTROS
    public function importarRegistros(Request $request)
    {
      $archivo = $request->file('archivo');
      Excel::import(new empresasImport, $archivo);

      return redirect ('/empresas');
    }
  //


  //ACTUALIZAR REGISTROS
    public function actualizar (Request $request, $id)
    {
      $empresa = Empresa::find($id);

      $empresa->nombreDeLaEmpresa = $request->input('nombreDeLaEmpresa3');
      $empresa->numeroDeTelefonoDeLaEmpresa = $request->input('numeroDeTelefonoDeLaEmpresa3');
      $empresa->correoElectronicoDeLaEmpresa = $request->input('correoElectronicoDeLaEmpresa3');
      $empresa->direccionDeLaEmpresa = $request->input('direccionDeLaEmpresa3');
      $empresa->save();
    }
  //


  //ELIMINAR REGISTROS
    public function eliminar ($id)
    {
      $empresa = Empresa::find($id);
      $empresa->delete();
      return $empresa;
    }
  //

}
