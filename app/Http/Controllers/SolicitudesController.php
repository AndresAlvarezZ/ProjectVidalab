<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitudes;

class SolicitudesController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admins');
  }
    public function SolicitudesEnEspera()
    {
      $enEspera = Solicitudes::whereIn('estado',['enEspera'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view ('solicitudes.enEspera',compact('enEspera','name'));
    }
    public function SolicitudesConfirmadas()
    {
      $confirmadas = Solicitudes::whereIn('estado',['Confirmada'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view ('solicitudes.confirmadas',compact('confirmadas','name'));
    }
    public function SolicitudesFinalizadas()
    {
      $finalizadas = Solicitudes::whereIn('estado',['Finalizada'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view ('solicitudes.finalizadas',compact('finalizadas','name'));
    }
    public function SolicitudesCanceladas()
    {
      $canceladas = Solicitudes::whereIn('estado',['Cancelada'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view ('solicitudes.canceladas',compact('canceladas','name'));
    }
    public function cambioDeEstado(Solicitudes $solicitud)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view ('solicitudes.cambioDeEstado',compact('solicitud','name'));
    }
    public function cambioDeEstadoConfirmadas(Solicitudes $solicitud)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view ('solicitudes.cambioDeEstadoConfirmadas',compact('solicitud','name'));
    }
    public function procesarCambio(Solicitudes $solicitud)
    {

        $solicitud->update(request()->all());

    return redirect('/solicitudes/enEspera')->with('status','El estado de la solicitud ha sido modificado exitosamente!');
    }
}
