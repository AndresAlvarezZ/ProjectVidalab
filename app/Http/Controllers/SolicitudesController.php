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

  //LISTAR TODOS LOS REGISTROS
    public function index()
    {
      $solicitudes = Solicitudes::all();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view ('solicitudes.todasLasSolicitudes',compact('solicitudes','name'));
      }
      else{
      return "<h1>Acceso Denegado </h1><h3>Lo sentimos $name <br> has sido inhabilitado!!!</h3>";
      }
    }
  //


  //LISTAR REGISTROS EN ESTADO DE ESPERA
    public function SolicitudesEnEspera()
    {
      $enEspera = Solicitudes::whereIn('estado',['Espera'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view ('solicitudes.enEspera',compact('enEspera','name'));
      }
      else{
        return "<h1>Acceso Denegado </h1><h3>Lo sentimos $name <br> has sido inhabilitado!!!</h3>";
      }
    }
  //


  //LISTAR REGISTROS EN ESTADO CONFIRMADO
    public function SolicitudesConfirmadas()
    {
      $confirmadas = Solicitudes::whereIn('estado',['Confirmada'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view ('solicitudes.confirmadas',compact('confirmadas','name'));
      }
      else{
      return "<h1>Acceso Denegado </h1><h3>Lo sentimos $name <br> has sido inhabilitado!!!</h3>";
      }
    }
  //


  //LISTAR REGISTROS EN ESTADO FINALIZADO
    public function SolicitudesFinalizadas()
    {
      $finalizadas = Solicitudes::whereIn('estado',['Finalizada'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view ('solicitudes.finalizadas',compact('finalizadas','name'));
      }
      else{
      return "<h1>Acceso Denegado </h1><h3>Lo sentimos $name <br> has sido inhabilitado!!!</h3>";
      }
    }
  //


  //LISTAR REGISTROS EN ESTADO CANCELADO
    public function SolicitudesCanceladas()
    {
      $canceladas = Solicitudes::whereIn('estado',['Cancelada'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view ('solicitudes.canceladas',compact('canceladas','name'));
      }
      else{
      return "<h1>Acceso Denegado </h1><h3>Lo sentimos $name <br> has sido inhabilitado!!!</h3>";
      }
    }
  //


  //CAMBIAR ESTADO
    public function cambioDeEstadoConfirmadas(Solicitudes $solicitud)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view ('solicitudes.cambioDeEstadoConfirmadas',compact('solicitud','name'));
      }
      else{
      return "<h1>Acceso Denegado </h1><h3>Lo sentimos $name <br> has sido inhabilitado!!!</h3>";
      }
    }
  //


  //CAMBIAR ESTADO
    public function procesarSolicitud(Request $request, $id)
    {
      $solicitudes = Solicitudes::all();
      $llavePrimaria = 0;

      foreach($solicitudes as $solicitud)
      {
        if($solicitud->idFactura == $id)
        {
          $llavePrimaria = $solicitud->idDeSolicitud;
          $solicitud->estado = $request->input('estado');
          $solicitud->save();
          return $solicitud;
        }
      }
    }
  //

}
