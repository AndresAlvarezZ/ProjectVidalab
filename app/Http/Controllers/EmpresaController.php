<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Cita;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
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
      $empresas = Empresa::all();
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


  //GUARDAR REGISTROS
    public function importarRegistros(Request $request)
    {
      $archivoCSV = $_FILES['archivo']; 
      $archivoCSV = file_get_contents($archivoCSV['tmp_name']); 

      $archivoCSV = explode("\n", $archivoCSV);
      $archivoCSV = array_filter($archivoCSV); 

      foreach ($archivoCSV as $dato) 
      {
        $listaDePruebas[] = explode(",", $dato);
      }

      foreach ($listaDePruebas as $dato) 
      {
        if(!empty(Empresa::find($dato[2])))
        {
          $affected = DB::table('empresas')->where('nombreDeLaEmpresa', $dato[0])
          ->update
          ([
            'nombreDeLaEmpresa' => $dato[0],
            'numeroDeTelefonoDeLaEmpresa' => $dato[1],
            'correoElectronicoDeLaEmpresa' => $dato[2],
            'direccionDeLaEmpresa' => $dato[3],
          ]);
        }
        else
        {
          DB::table('empresas')->insert([
            'nombreDeLaEmpresa' => $dato[0],
            'numeroDeTelefonoDeLaEmpresa' => $dato[1],
            'correoElectronicoDeLaEmpresa' => $dato[2],
            'direccionDeLaEmpresa' => $dato[3],
            
          ]);
        }
      }

      return redirect('/empresas');
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
