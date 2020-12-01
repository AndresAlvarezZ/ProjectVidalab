<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prueba;
use App\Paquete;
class CatalogoController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth:web')->only('index','carrito');
    $this->middleware('auth:admins')->only('indexAdmins');
  }
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
    public function indexAdmins(Prueba $nombre)
    {
        $pruebas = Prueba::all();
        $paquetes = Paquete::all();
        $identificadorDeAnalisis = 'Analisis';
        $identificadorDePaqete = 'Paquete';
        $name = auth()->administrador()->nombreDelUsuarioAdministrador;
        if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
        return view('catalogo.indexAdmins', compact('pruebas', 'paquetes','name','identificadorDeAnalisis','identificadorDePaqete'));
        }
        else{
          return 'acceso denegado';
        }
    }
    public function carrito()
    {
      $usuario = 'user';
      $name = 'sinDatos';
      return view('Compras.carrito', compact('usuario','name'));
    }
}
