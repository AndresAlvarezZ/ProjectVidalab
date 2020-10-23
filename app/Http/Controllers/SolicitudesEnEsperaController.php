<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SolicitudesEnEspera;
use App\SolicitudesConfirmadas;
use App\SolicitudesCanceladas;

class SolicitudesEnEsperaController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admins');
  }
    public function SolicitudesEnEspera()
    {
      $enEspera = SolicitudesEnEspera::all();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view ('solicitudes.enEspera',compact('enEspera','name'));
    }
    public function cambioDeEstado(SolicitudesEnEspera $solicitud)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view ('solicitudes.cambioDeEstado',compact('solicitud','name'));
    }
    public function procesarCambio(SolicitudesEnEspera $solicitud)
    {
      $estado = request('estado');
      if ($estado=='Confirmada') {
        SolicitudesConfirmadas::create([
          'idDeSolicitudEnEspera' => $solicitud->idDeSolicitudEnEspera,
          'idFactura'=>$solicitud->idFactura,
          'nombreDelCiente' => $solicitud->nombreDelCiente,
          'domicilioDelCiente' => $solicitud->domicilioDelCiente,
          'telefonoDelCliente' => $solicitud->telefonoDelCliente,
          'analisisSolicitados' => $solicitud->analisisSolicitados,
          'costoDelServicio' => $solicitud->costoDelServicio,
          'estado' => 'Confirmada'
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
