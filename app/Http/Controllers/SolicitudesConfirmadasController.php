<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SolicitudesConfirmadas;
use App\SolicitudesFinalizadas;
use App\SolicitudesCanceladas;

class SolicitudesConfirmadasController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admins');
  }

  public function SolicitudesConfirmadas()
  {
    $confirmadas = SolicitudesConfirmadas::all();
    $name = auth()->administrador()->nombreDelUsuarioAdministrador;
    return view ('solicitudes.confirmadas',compact('confirmadas','name'));
  }
  public function cambioDeEstado(SolicitudesConfirmadas $solicitud)
  {
    $name = auth()->administrador()->nombreDelUsuarioAdministrador;
    return view ('solicitudes.cambioDeEstadoConfirmadas',compact('solicitud','name'));
  }
  public function procesarCambio(SolicitudesConfirmadas $solicitud)
  {
    $estado = request('estado');
    if ($estado=='Finalizada') {
      SolicitudesFinalizadas::create([
        'idDeSolicitudConfirmada' => $solicitud->idDeSolicitudEnEspera,
        'idFactura'=>$solicitud->idFactura,
        'nombreDelCiente' => $solicitud->nombreDelCiente,
        'domicilioDelCiente' => $solicitud->domicilioDelCiente,
        'telefonoDelCliente' => $solicitud->telefonoDelCliente,
        'analisisSolicitados' => $solicitud->analisisSolicitados,
        'costoDelServicio' => $solicitud->costoDelServicio
      ]);
      $solicitud->delete();
    }
  if ($estado=='Cancelada') {
    SolicitudesCanceladas::create([
      'idDeSolicitudEnEspera' => $solicitud->idDeSolicitudEnEspera,
      'idFactura'=>$solicitud->idFactura,
      'nombreDelCiente' => $solicitud->nombreDelCiente,
      'domicilioDelCiente' => $solicitud->domicilioDelCiente,
      'telefonoDelCliente' => $solicitud->telefonoDelCliente,
      'analisisSolicitados' => $solicitud->analisisSolicitados,
      'costoDelServicio' => $solicitud->costoDelServicio
    ]);
    $solicitud->delete();

  }
  return redirect('/solicitudes/enEspera')->with('status','El estado de la solicitud ha sido modificado exitosamente!');
  }
}
