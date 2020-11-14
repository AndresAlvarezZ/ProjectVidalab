<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitudes;

class SolicitudesController extends Controller
{

  //CONSTRUCTOR
    public function __construct(){
      $this->middleware('auth:admins');
    }
  //


  //LISTAR REGISTROS EN ESTADO DE ESPERA
    public function SolicitudesEnEspera()
    {
      $enEspera = Solicitudes::whereIn('estado',['Espera'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view ('solicitudes.enEspera',compact('enEspera','name'));
    }
  //


  //LISTAR REGISTROS EN ESTADO CONFIRMADO
    public function SolicitudesConfirmadas()
    {
      $confirmadas = Solicitudes::whereIn('estado',['Confirmada'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view ('solicitudes.confirmadas',compact('confirmadas','name'));
    }
  //


  //LISTAR REGISTROS EN ESTADO FINALIZADO
    public function SolicitudesFinalizadas()
    {
      $finalizadas = Solicitudes::whereIn('estado',['Finalizada'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view ('solicitudes.finalizadas',compact('finalizadas','name'));
    }
  //


  //LISTAR REGISTROS EN ESTADO CANCELADO
    public function SolicitudesCanceladas()
    {
      $canceladas = Solicitudes::whereIn('estado',['Cancelada'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view ('solicitudes.canceladas',compact('canceladas','name'));
    }
  //


  //CAMBIAR ESTADO
    public function cambioDeEstado(Solicitudes $solicitud)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view ('solicitudes.cambioDeEstado',compact('solicitud','name'));
    }
  //


  //CAMBIAR ESTADO
    public function cambioDeEstadoConfirmadas(Solicitudes $solicitud)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view ('solicitudes.cambioDeEstadoConfirmadas',compact('solicitud','name'));
    }
  //


  //CAMBIAR ESTADO
    public function procesarCambio(Solicitudes $solicitud)
    {
      $solicitud->update(request()->all());

    return redirect('/solicitudes/enEspera')->with('status','El estado de la solicitud ha sido modificado exitosamente!');
    }
  //

}
