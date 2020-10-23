<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SolicitudesCanceladas;

class SolicitudesCanceladasController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admins');
  }

  public function SolicitudesCanceladas()
  {
    $canceladas = SolicitudesCanceladas::all();
    $name = auth()->administrador()->nombreDelUsuarioAdministrador;
    return view ('solicitudes.canceladas',compact('canceladas','name'));
  }
}
