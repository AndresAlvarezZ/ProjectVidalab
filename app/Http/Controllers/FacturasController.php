<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facturas;
use App\Clientes;
use App\Compras;

class FacturasController extends Controller
{
  public function __construct(){
    $this->middleware('auth:web');
  }
    public function miExpediente()
    {
      $dato = auth()->user()->dniDelUsuario;
      $facturas = Facturas::whereIn('idCliente',[$dato])->get();
      $compras = Compras::all();

      return view('pruebas',compact('facturas','compras','dato'));

    }
}
