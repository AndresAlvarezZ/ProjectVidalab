<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prueba;
use App\Paquete;
use App\Compras;
use App\Clientes;
use App\Facturas;
use App\Solicitudes;
use Illuminate\Support\Str;

class ComprasController extends Controller
{
  public function __construct(){
    $this->middleware('auth:web');
  }

    public function FinalizarCompra(Request $request)
    {
      return view('Compras.procesarCompra');
    }
    public function validarCompra(Request $request)
    {
      $probar = Count($request->all());
      if($probar==2){ return redirect('/compras/FinalizarCompra')->with('status','NO puedes procesar la compra, porque no tienes artículos');}
      else{for($i=0;$i<$probar;$i++) {
        $dato = request("codigo{$i}");
          $fecha = request("fecha");
        $datos = Prueba::find($dato);
        if($datos!=""){
         Compras::create([
            'dniDelCliente'=>Auth()->user()->dniDelUsuario,
          //  'fecha' => fecha sistema
            'codigoDelAnalisis' => $datos->codigoDelAnalisis,
            'codigoDelPaquete' =>null,
            'nombre' => $datos->nombreDelAnalisis,
            'costoDelServicio' =>$datos->costoDelAnalisis,
            'Fecha' =>  $fecha
          ]);
        }
        $datos = Paquete::find($dato);
        if($datos!=""){
         Compras::create([
            'dniDelCliente'=>Auth()->user()->dniDelUsuario,
            'codigoDelAnalisis' => null,
            'codigoDelPaquete' =>$datos->codigoDelPaquete,
            'nombre' => $datos->nombreDelPaquete,
            'costoDelServicio' =>$datos->costoDelPaquete,
            'Fecha' =>  $fecha
          ]);
        }
        }
        $dato = Auth()->user()->dniDelUsuario;
        $subtotal = 0;
        $descuento = 0.05;
    $facturas = Compras::whereIn('fecha',[$fecha])->get();
    $contador = 1;
    $total = 0;
    foreach ($facturas as $factura) {
      $subtotal = $subtotal+$factura->costoDelServicio;
      $descuento = $subtotal*0.05;
      // numero x el descuento mantiene
      if($contador >= 4){ $descuento = $descuento;}
      else{
      $descuento = $descuento;
      $contador++;
    }
    }
    $totalAjustado = $total-$descuento;
    Facturas::create([
      'idCliente' =>$dato,
      'descuento'=>$descuento,
      'total'=>$totalAjustado,
      'fecha'=> $fecha,
      'condicionDeCompra' =>'Pendiente'
    ]);
    return  redirect('/home')->with('status', 'la compra ha sido realizada con éxito');
    }
  }
  public function pedidoDomicilio()
  {
      return view('compras.compraDomicilio');
  }
  public function pedidoDomicilioFactura(Request $request)
  {
    $probar = Count($request->all());
    $solicitudDeCompra = '';
    if($probar==5){ return redirect('/compras/domicilio')->with('status','NO puedes procesar la compra, porque no tienes artículos');}
      else{for($i=0;$i<$probar;$i++) {
        $dato = request("codigo{$i}");
          $fecha = request("fecha");
        $datos = Prueba::find($dato);
        if($datos!=""){
          $solicitudDeCompra = Str::finish($solicitudDeCompra,$datos['nombreDelAnalisis'].', ');
         Compras::create([
            'dniDelCliente'=>Auth()->user()->dniDelUsuario,
            'codigoDelAnalisis' => $datos->codigoDelAnalisis,
            'codigoDelPaquete' =>null,
            'nombre' => $datos->nombreDelAnalisis,
            'costoDelServicio' =>$datos->costoDelAnalisis,
            'Fecha' =>  $fecha
          ]);
        }
        $datos = Paquete::find($dato);
        if($datos!=""){
          $solicitudDeCompra = Str::finish($solicitudDeCompra,$datos['nombreDelPaquete'].', ');
         Compras::create([
            'dniDelCliente'=>Auth()->user()->dniDelUsuario,
            'codigoDelAnalisis' => null,
            'codigoDelPaquete' =>$datos->codigoDelPaquete,
            'nombre' => $datos->nombreDelPaquete,
            'costoDelServicio' =>$datos->costoDelPaquete,
            'Fecha' =>  $fecha
          ]);
        }
        }
        $dato = Auth()->user()->dniDelUsuario;
        $subtotal = 0;
        $descuento = 0.05;
    $facturas = Compras::whereIn('fecha',[$fecha])->get();
    $contador = 1;
    $total = 0;
    foreach ($facturas as $factura) {
      $subtotal = $subtotal+$factura->costoDelServicio;
      $total = $total+$factura->costoDelServicio;
      $descuento = $subtotal*$descuento;
      // numero x el descuento mantiene
      if($contador >= 4){ $descuento = $descuento;}
      else{
      $descuento = $descuento+0.05;
      $contador++;
    }
    }
    $totalAjustado = $total-$descuento;
    Facturas::create([
      'idCliente' =>$dato,
      'descuento'=>$descuento,
      'total'=>$totalAjustado,
      'fecha'=> $fecha,
      'condicionDeCompra' =>'Pendiente'
    ]);
    $facturas = Facturas::whereIn('fecha',[$fecha])->get();
    $idFactura = 0;
    foreach ($facturas as $idAsignar) {
      $idFactura = $idAsignar->idFactura;
    }
    Solicitudes::create([
      'idFactura'=>$idFactura,
      'nombreDelCiente' => $request['nombreDelCiente'],
      'domicilioDelCiente' => $request['domicilioDelCiente'],
      'telefonoDelCliente' => $request['telefonoDelCliente'],
      'analisisSolicitados' => $solicitudDeCompra,
      'costoDelServicio' => $total,
      'estado' => 'Espera'
    ]);
    return  redirect('/home')->with('status', 'la compra ha sido realizada con éxito');
    }
    }
  }
