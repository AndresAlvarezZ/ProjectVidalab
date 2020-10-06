<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prueba;
class PruebaController extends Controller
{

//LISTAR REGISTROS
    public function index()
    {
        $pruebas = Prueba::all();
        return view('pruebas.index', compact('pruebas'));
    }


//AGREGAR
    public function agregar(Prueba $prueba)
    {
        return view ('pruebas.agregar', compact('prueba'));
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
        return view('pruebas.mostrar', compact('prueba'));
    }


//EDITAR REGISTRO
    public function editar (Prueba $prueba)
    {
        return view('pruebas.editar', compact('prueba'));
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
        return view('pruebas.eliminar', compact('prueba'));
    }


    public function destruir (Prueba $prueba)
    {
        $prueba->delete();

        return redirect('/pruebas'.'/'. $prueba->idAnalisis);
    }

}