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
        $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        return view('citas.index', compact('citas','name'));
    }


//GUARDAR REGISTROS
    public function guardar (Request $request)
    {
        $cita = new Cita;

        $cita->idDeLaEmpresa = $request->input('idDeLaEmpresa0');        
        $cita->nombreDelSolicitante = $request->input('nombreDelSolicitante1');
        $cita->primerApellidoDelSolicitante = $request->input('primerApellidoDelSolicitante1');
        $cita->segundoApellidoDelSolicitante = $request->input('segundoApellidoDelSolicitante1');
        $cita->numeroDeClientesPorAtender = $request->input('numeroDeClientesPorAtender1');        
        $cita->fechaDeCita = $request->input('fechaDeCita1');
        $cita->horaDeCita = $request->input('horaDeCita1');
        $cita->tiposDeAnalisisRequeridos = $request->input('tiposDeAnalisisRequeridos1');
        $cita->save();
    }


//ACTUALIZAR REGISTROS
    public function editar (Request $request, $id)
    {
        $cita = Cita::find($id);

        $cita->idDeLaEmpresa = $request->input('idDeLaEmpresa0');        
        $cita->nombreDelSolicitante = $request->input('nombreDelSolicitante1');
        $cita->primerApellidoDelSolicitante = $request->input('primerApellidoDelSolicitante1');
        $cita->segundoApellidoDelSolicitante = $request->input('segundoApellidoDelSolicitante1');
        $cita->numeroDeClientesPorAtender = $request->input('numeroDeClientesPorAtender1');        
        $cita->fechaDeCita = $request->input('fechaDeCita1');
        $cita->horaDeCita = $request->input('horaDeCita1');
        $cita->tiposDeAnalisisRequeridos = $request->input('tiposDeAnalisisRequeridos1');
        $cita->save();
    }


//ELIMINAR REGISTROS
    public function eliminar ($id)
    {
        $cita = Cita::find($id);
        $cita->delete();
        return $cita;
    }


}
