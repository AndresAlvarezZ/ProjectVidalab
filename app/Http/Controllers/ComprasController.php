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

  //PERMISOS
    public function __construct(){
      $this->middleware('auth:web')->only('FinalizarCompra', 'validarCompra');
    }
  //


  //TOTAL A PAGAR POR CARRITO: CLIENTE
    public function FinalizarCompra(Request $request)
    {
      return view('Compras.procesarCompra');
    }
  //


  //TOTAL A PAGAR POR CARRITO: PUBLICO
    public function totalCarritoPublico(Request $request)
    {
      return view('Compras.totalCarrito');
    }
  //


  //LISTA DE CARRITO: CLIENTE
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
            'descuento' => $datos->descuentoDelAnalisis,
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
            'descuento' =>0,
            'Fecha' =>  $fecha
          ]);
        }
        }
        $dato = Auth()->user()->dniDelUsuario;
      $facturas = Compras::whereIn('fecha',[$fecha])->get();
      $contador = 1;
      $cantidad = 0;
      $descuento = 0;
      $subtotal = 0;
      foreach ($facturas as $facturasAlmacenadas) {
        $cantidad++;
      }
      foreach ($facturas as $factura) {
        $descuento = $descuento + $factura->descuento * ($cantidad-1);
        $subtotal = $subtotal + $factura->costoDelServicio;
      }
      Facturas::create([
        'idCliente' =>$dato,
        'descuento'=>$descuento,
        'total'=>$subtotal-$descuento,
        'fecha'=> $fecha,
        'condicionDeCompra' =>'Pendiente'
      ]);
      return  redirect('/home')->with('status', 'la compra ha sido realizada con éxito');
      }
    }
  //


  //LISTA DE CARRITO: PUBLICO
    public function totalDeListaDeCarrito(Request $request)
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
            'descuento' => $datos->descuentoDelAnalisis,
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
            'descuento' =>0,
            'Fecha' =>  $fecha
          ]);
        }
        }
        $dato = Auth()->user()->dniDelUsuario;
      $facturas = Compras::whereIn('fecha',[$fecha])->get();
      $contador = 1;
      $cantidad = 0;
      $descuento = 0;
      $subtotal = 0;
      foreach ($facturas as $facturasAlmacenadas) {
        $cantidad++;
      }
      foreach ($facturas as $factura) {
        $descuento = $descuento + $factura->descuento * ($cantidad-1);
        $subtotal = $subtotal + $factura->costoDelServicio;
      }
      Facturas::create([
        'idCliente' =>$dato,
        'descuento'=>$descuento,
        'total'=>$subtotal-$descuento,
        'fecha'=> $fecha,
        'condicionDeCompra' =>'Pendiente'
      ]);
      return  redirect('/home')->with('status', 'la compra ha sido realizada con éxito');
      }
    }
  //


  //PEDIDO A DOMICILIO
    public function pedidoDomicilio()
    {
      return view('compras.compraDomicilio');
    }
  //
  
    
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
              'descuento' => $datos->descuentoDelAnalisis,
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
              'descuento' =>0,
              'Fecha' =>  $fecha
            ]);
          }
          }
          $dato = Auth()->user()->dniDelUsuario;
          $facturas = Compras::whereIn('fecha',[$fecha])->get();
          $contador = 1;
          $cantidad = 0;
          $descuento = 0;
          $subtotal = 0;
          foreach ($facturas as $facturasAlmacenadas) {
            $cantidad++;
          }
          foreach ($facturas as $factura) {
            $descuento = $descuento + $factura->descuento * ($cantidad-1);
            $subtotal = $subtotal + $factura->costoDelServicio;
          }
      Facturas::create([
        'idCliente' =>$dato,
        'descuento'=>$descuento,
        'total'=>$subtotal-$descuento,
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
        'costoDelServicio' => $subtotal-$descuento,
        'estado' => 'Espera'
      ]);
      return  redirect('/home')->with('status', 'la compra ha sido realizada con éxito');
      }
      }
    }
  //
