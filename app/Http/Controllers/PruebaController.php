<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prueba;
class PruebaController extends Controller
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
        $pruebas = Prueba::all();
        $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        return view('pruebas.index', compact('pruebas','name'));
    }


//AGREGAR
    public function agregar(Prueba $prueba)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        return view ('pruebas.agregar', compact('prueba','name'));
    }

    public function guardar(Prueba $prueba)
    {
        $this->validate(request(),
        [
            'codigoDelAnalisis' => 'required',
            'nombreDelAnalisis' => 'required',
            'descripcionDelAnalisis' => 'required',
            'costoDelAnalisis' => 'required',
            'numeroDeMaquina' => 'required',
        ]);

        Prueba::create(
        [
            'codigoDelAnalisis' => request('codigoDelAnalisis'),
            'nombreDelAnalisis' => request('nombreDelAnalisis'),
            'descripcionDelAnalisis' => request('descripcionDelAnalisis'),
            'costoDelAnalisis' => request('costoDelAnalisis'),
            'numeroDeMaquina' => request('numeroDeMaquina'),
        ]
        );

        return redirect ('/pruebas');
    }


//MOSTRAR UNICO REGISTRO
    public function mostrar(Prueba $prueba)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        return view('pruebas.mostrar', compact('prueba','name'));
    }


//EDITAR REGISTRO
    public function editar (Prueba $prueba)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        return view('pruebas.editar', compact('prueba','name'));
    }


    public function actualizar (Prueba $prueba)
    {
        $this->validate(request(),
        [
            'codigoDelAnalisis' => 'required',
            'nombreDelAnalisis' => 'required',
            'descripcionDelAnalisis' => 'required',
            'costoDelAnalisis' => 'required',
            'numeroDeMaquina' => 'required',
        ]);
        $prueba->update(request()->all());

        return redirect ('/pruebas'.'/'. $prueba->idAnalisis);
    }


//ELIMINAR REGISTRO
    public function eliminar(Prueba $prueba)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        return view('pruebas.eliminar', compact('prueba','name'));
    }


    public function destruir (Prueba $prueba)
    {
        $prueba->delete();

        return redirect('/pruebas'.'/'. $prueba->idAnalisis);
    }

}
