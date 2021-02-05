<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitudes;
use App\Facturas;

class SolicitudesController extends Controller
{

  //CONSTRUCTOR
    public function __construct()
    {
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
        return view('layouts.seccionesGenerales.accesoDenegado', compact('name'));
      }
    }
  //


  //LISTAR REGISTROS EN ESTADO DE ESPERA
    public function SolicitudesEnEspera()
    {
      $enEspera = Solicitudes::orderBy('created_at', 'desc')->whereIn('estado',['Espera'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view ('solicitudes.enEspera',compact('enEspera','name'));
      }
      else{
          return view('layouts.seccionesGenerales.accesoDenegado', compact('name'));
      }
    }
  //


  //LISTAR REGISTROS EN ESTADO CONFIRMADO
    public function SolicitudesConfirmadas()
    {
      $confirmadas = Solicitudes::orderBy('created_at', 'desc')->whereIn('estado',['Confirmada'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view ('solicitudes.confirmadas',compact('confirmadas','name'));
      }
      else{
        return view('layouts.seccionesGenerales.accesoDenegado', compact('name'));
      }
    }
  //


  //LISTAR REGISTROS EN ESTADO FINALIZADO
    public function SolicitudesFinalizadas()
    {
      $finalizadas = Solicitudes::orderBy('created_at', 'desc')->whereIn('estado',['Finalizada'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view ('solicitudes.finalizadas',compact('finalizadas','name'));
      }
      else{
        return view('layouts.seccionesGenerales.accesoDenegado', compact('name'));
      }
    }
  //


  //LISTAR REGISTROS EN ESTADO CANCELADO
    public function SolicitudesCanceladas()
    {
      $canceladas = Solicitudes::orderBy('created_at', 'desc')->whereIn('estado',['Cancelada'])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view ('solicitudes.canceladas',compact('canceladas','name'));
      }
      else{
        return view('layouts.seccionesGenerales.accesoDenegado', compact('name'));
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
        return view('layouts.seccionesGenerales.accesoDenegado', compact('name'));
      }
    }
  //


  //CAMBIAR ESTADO
    public function procesarSolicitud(Request $request, $id)
    {
      $solicitudes = Solicitudes::all();
      $llavePrimaria = 0;
      $opcion = "Cancelado";
      $estadoEntrante = $request->input('estado');

      foreach($solicitudes as $solicitud)
      {
        if($solicitud->idFactura == $id)
        {
          $llavePrimaria = $solicitud->idDeSolicitud;
          $solicitud->estado = $estadoEntrante;
          if ($estadoEntrante=="Finalizada") {
            $this->buscandoMiFactura($id, $opcion);
          }
          $solicitud->save();
          return $solicitud;
        }
      }
    }
  //BUSCAR FACTURA
  protected function buscandoMiFactura($miFactura,$buscandoEstado)
  {
  $factura = $this->Mifactura($miFactura);
    $this->ActualizarLaFacturaEncontrada($factura,$buscandoEstado);
  }
  protected function ActualizarLaFacturaEncontrada($facturaEncontrada,$buscandoEstado)
  {
    $facturaEncontrada->condicionDeCompra = $buscandoEstado;
    $facturaEncontrada->update();
  }
  protected function Mifactura($facturaUnica)
  {
    $facturaBuscada = Facturas::find($facturaUnica);
    return $facturaBuscada;
  }

}
