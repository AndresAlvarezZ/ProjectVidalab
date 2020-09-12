<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;

class AdministradorController extends Controller
{
  public function nuevoAdministrador()
  {
      return view('nuevoAdministrador');
  }
}
