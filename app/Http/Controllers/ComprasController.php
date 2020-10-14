<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prueba;
use App\Paquete;
use App\Compras;
use App\Clientes;

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
      if($probar==1){ return redirect('/compras/FinalizarCompra')->with('status','NO puedes procesar la compra, porque no tienes artículos');}
      else{for($i=0;$i<$probar;$i++) {
        $dato = request("codigo{$i}");
        $datos = Prueba::find($dato);
        if($datos!=""){
         Compras::create([
            'dniDelCliente'=>Auth()->user()->dniDelUsuario,
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
            'costoDelServicio' =>$datos->costoDelPaquete
          ]);
        }
        }
    $probando = $datos;
    return  redirect('/home')->with('status', 'la compra ha sido realizada con éxito');
    }
  }

  }
