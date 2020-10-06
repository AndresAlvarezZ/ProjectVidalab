<?php

namespace App\Http\Controllers;

use App\Cita;
use App\Empresa;
use Illuminate\Http\Request;

class CitaController extends Controller
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
        $citas = Cita::orderBy('created_at', 'desc')->get();
        return view('citas.index', compact('citas'));
    }


//AGREGAR
    public function agregar(Empresa $empresa)
    {
        return view ('citas.agregar', compact('empresa'));
    }

    public function guardar(Empresa $empresa)
    {
        $id = $empresa->idDeLaEmpresa;

        $this->validate(request(),
        [
            'idDeLaEmpresa' => 'required',
            'nombreDelSolicitante' => 'required',
            'primerApellidoDelSolicitante' => 'required',
            'segundoApellidoDelSolicitante' => 'required',
            'numeroDeClientesPorAtender' => 'required',
            'fechaDeCita' => 'required',
            'horaDeCita' => 'required',
            'tiposDeAnalisisRequeridos' => 'required',
        ]);
        Cita::create(
        [
            'idDeLaEmpresa' => request('idDeLaEmpresa'),
            'nombreDelSolicitante' => request('nombreDelSolicitante'),
            'primerApellidoDelSolicitante' => request('primerApellidoDelSolicitante'),
            'segundoApellidoDelSolicitante' => request('segundoApellidoDelSolicitante'),
            'numeroDeClientesPorAtender' => request('numeroDeClientesPorAtender'),
            'fechaDeCita' => request('fechaDeCita'),
            'horaDeCita' => request('horaDeCita'),
            'tiposDeAnalisisRequeridos' => request('tiposDeAnalisisRequeridos'),
        ]
        );

        return redirect ('/empresas');
    }


//MOSTRAR ÚNICO REGISTRO
    public function mostrar(Cita $cita)
    {
        return view('citas.mostrar', compact('cita'));
    }


//EDITAR REGISTRO
    public function editar (Cita $cita)
    {
        return view('citas.editar', compact('cita'));
    }


    public function actualizar (Cita $cita)
    {
        $this->validate(request(),
        [
            'nombreDelSolicitante' => 'required',
            'primerApellidoDelSolicitante' => 'required',
            'segundoApellidoDelSolicitante' => 'required',
            'numeroDeClientesPorAtender' => 'required',
            'fechaDeCita' => 'required',
            'horaDeCita' => 'required',
            'tiposDeAnalisisRequeridos' => 'required',
        ]);
        $cita->update(request()->all());

        return redirect ('/empresas'.'/'. $cita->idDeLaEmpresa);
    }


//ELIMINAR REGISTRO
    public function eliminar(Cita $cita)
    {
        return view('citas.eliminar', compact('cita'));
    }


    public function destruir (Cita $cita)
    {
        $cita->delete();

        return redirect('/empresas'.'/'. $cita->idDeLaEmpresa);
    }

}
