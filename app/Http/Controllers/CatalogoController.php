<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prueba;
use App\Paquete;
class CatalogoController extends Controller
{

//LISTAR REGISTROS
    public function index()
    {
        $pruebas = Prueba::all();
        $paquetes = Paquete::all();
        return view('catalogo.index', compact('pruebas', 'paquetes'));
    }
}