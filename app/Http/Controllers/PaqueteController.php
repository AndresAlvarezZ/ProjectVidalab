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
    //LISTAR REGISTROS
    public function index()
    {
        $paquetes = Paquete::all();
        $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        return view('paquetes.index', compact('paquetes','name'));
    }


//AGREGAR
    public function agregar(Paquete $paquete)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        return view ('paquetes.agregar', compact('paquete','name'));
    }

    public function guardar(Paquete $paquete)
    {
        $this->validate(request(),
        [
            'codigoDelPaquete' => 'required',
            'nombreDelPaquete' => 'required',
            'descripcionDelPaquete' => 'required',
            'costoDelPaquete' => 'required',

        ]);
        Paquete::create(
        [
            'codigoDelPaquete' => request('codigoDelPaquete'),
            'nombreDelPaquete' => request('nombreDelPaquete'),
            'descripcionDelPaquete' => request('descripcionDelPaquete'),
            'costoDelPaquete' => request('costoDelPaquete'),

        ]
        );

        return redirect ('/paquetes');
    }


//MOSTRAR UNICO REGISTRO
    public function mostrar(Paquete $paquete)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        return view('paquetes.mostrar', compact('paquete','name'));
    }


//EDITAR REGISTRO
    public function editar (Paquete $paquete)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        return view('paquetes.editar', compact('paquete','name'));
    }


    public function actualizar (Paquete $paquete)
    {
        $this->validate(request(),
        [
            'codigoDelPaquete' => 'required',
            'nombreDelPaquete' => 'required',
            'descripcionDelPaquete' => 'required',
            'costoDelPaquete' => 'required',
        ]);
        $paquete->update(request()->all());

        return redirect ('/paquetes'.'/'. $paquete->idDelPaquete);
    }


//ELIMINAR REGISTRO
    public function eliminar(Paquete $paquete)
    {
        return view('paquetes.eliminar', compact('paquete','name'));
    }


    public function destruir (Paquete $paquete)
    {
        $paquete->delete();

        return redirect('/paquetes');
    }

}
