<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facturas;
use App\Clientes;
use App\Compras;

class FacturasController extends Controller
{
  public function __construct(){
    $this->middleware('auth:web')->only('miExpediente');
    $this->middleware('auth:admins')->only('verCompras','procesarCompra','actualizarFactura');
  }
    public function miExpediente()
    {
        $this->middleware('auth:web');
      $dato = auth()->user()->dniDelUsuario;
      $facturas = Facturas::whereIn('idCliente',[$dato])->get();
      $compras = Compras::all();
      $fecha = date('d-m-Y');
      $total = 0;
      $indice = 0;
      $indiceFactura = 0;

      return view('facturas.mostrar',compact('facturas','compras','indice','indiceFactura','fecha','total'));

    }
    public function verCompras()
    {
      $fecha = date('d-m-Y');
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      $facturas = Facturas::orderBy('created_at','asc')->get();
      return view('facturas.mostrarFacturas',compact('name','facturas','fecha'));
    }
    public function procesarCompra(Facturas $factura)
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      $total = 0;
      return view('facturas.actualizarFactura',compact('factura','name','total'));
    }
    public function actualizarFactura(Facturas $factura)
    {
      $factura->update(request()->all());
      return redirect('/verCompras');
    }
}
