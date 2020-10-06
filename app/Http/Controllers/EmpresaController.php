<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Cita;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{

//LISTAR REGISTROS
    public function index()
    {
        $empresas = Empresa::all();
        return view('empresas.index', compact('empresas'));
    }


//AGREGAR REGISTRO
    public function agregar()
    {
        return view('empresas.agregar');
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
        return view('empresas.mostrar', compact('empresa', 'citas'));
    }


//EDITAR REGISTRO
    public function editar(Empresa $empresa)
    {
        return view('empresas.editar', compact('empresa'));
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
        return view('empresas.eliminar', compact('empresa'));
    }


    public function destruir (Empresa $empresa)
    {
        $empresa->delete();

        return redirect('/empresas');
    }
}
