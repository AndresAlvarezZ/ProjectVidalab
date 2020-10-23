<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SolicitudesFinalizadas;

class SolicitudesFinalizadasController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admins');
  }

  public function SolicitudesFinalizadas()
  {
    $finalizadas = SolicitudesFinalizadas::all();
    $name = auth()->administrador()->nombreDelUsuarioAdministrador;
    return view ('solicitudes.Finalizadas',compact('finalizadas','name'));
  }
}
