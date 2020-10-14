<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prueba;
use App\Paquete;
class CatalogoController extends Controller
{
//LISTAR REGISTROS
    public function index(Prueba $nombre)
    {
        $pruebas = Prueba::all();
        $paquetes = Paquete::all();
        $identificadorDeAnalisis = 'Analisis';
        $identificadorDePaqete = 'Paquete';
        $name = $nombre->email;
        return view('catalogo.index', compact('pruebas', 'paquetes','name','identificadorDeAnalisis','identificadorDePaqete'));
    }
    public function carrito()
    {
      return view('Compras.carrito');
    }
}
