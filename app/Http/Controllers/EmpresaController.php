<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Cita;
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

//LISTAR REGISTROS
    public function index()
    {
        $empresas = Empresa::all();
        $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        return view('empresas.index', compact('empresas','name'));
    }


//AGREGAR REGISTRO
    public function agregar()
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        return view('empresas.agregar',compact('name'));
    }


    public function guardar()
    {
        $this->validate(request(), [
            'nombreDeLaEmpresa' => 'required',
            'numeroDeTelefonoDeLaEmpresa' => 'required',
            'correoElectronicoDeLaEmpresa' => 'required',
            'direccionDeLaEmpresa' => 'required'
        ]);
        Empresa::create(
        [
            'nombreDeLaEmpresa' => request('nombreDeLaEmpresa'),
            'numeroDeTelefonoDeLaEmpresa' => request('numeroDeTelefonoDeLaEmpresa'),
            'correoElectronicoDeLaEmpresa' => request('correoElectronicoDeLaEmpresa'),
            'direccionDeLaEmpresa' => request('direccionDeLaEmpresa'),
        ]
        );

        return redirect('/empresas');
    }


//MOSTRAR ÚNICO REGISTRO
    public function mostrar(Empresa $empresa)
    {
        $empresas = Empresa::all();
        $citas = Cita::orderBy('created_at', 'desc')->get();
        $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        return view('empresas.mostrar', compact('empresa', 'citas','name'));
    }


//EDITAR REGISTRO
    public function editar(Empresa $empresa)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        return view('empresas.editar', compact('empresa','name'));
    }


    public function actualizar (Empresa $empresa)
    {
        $this->validate(request(),
        [
            'nombreDeLaEmpresa' => 'required',
            'numeroDeTelefonoDeLaEmpresa' => 'required',
            'correoElectronicoDeLaEmpresa' => 'required',
            'direccionDeLaEmpresa' => 'required'
        ]);
        $empresa->update(request()->all());

        return redirect ('/empresas');
    }


//ELIMINAR REGISTRO
    public function eliminar(Empresa $empresa)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        return view('empresas.eliminar', compact('empresa','compact'));
    }


    public function destruir (Empresa $empresa)
    {
        $empresa->delete();

        return redirect('/empresas');
    }
}
