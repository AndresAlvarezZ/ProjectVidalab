<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prueba;
use App\Paquete;
use App\Compras;
use App\Clientes;
use App\Facturas;

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
            'costoDelServicio' =>$datos->costoDelAnalisis
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
    $facturas = Compras::whereIn('dniDelCliente',[$dato])->get();
    $contador = 1;
    $total = 0;
    foreach ($facturas as $factura) {
      $subtotal = $subtotal+$factura->costoDelServicio;
      $total = $total+$factura->costoDelServicio;
      $descuentos = $subtotal*$descuento;
      // numero x el descuento mantiene
      if($contador >= 4){ $descuento = $descuento;}
      else{
      $descuento = $descuento+0.025;
      $contador++;
    }
    }
    Facturas::create([
      'idCliente' =>$dato,
      'descuento'=>$descuento,
      'total'=>$total,
      'fecha'=> $fecha,
      'condicionDeCompra' =>'Pendiente'
    ]);
    return  redirect('/home')->with('status', 'la compra ha sido realizada con éxito');
    }
  }

  }
