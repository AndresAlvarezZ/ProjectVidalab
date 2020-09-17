<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;
use Illuminate\Support\Facades\Hash;

class AdministradorController extends Controller
{
  public function nuevoAdministrador()
  {
      return view('nuevoAdministrador');
  }
  public function nuevoAdministradorCreate()
{

    $data = $this->validate(request(),
    [
      'nombreDelUsuarioAdministrador' => 'required',
      'primerApellidoAdministrador' => 'required',
      'segundoApellidoAdministrador' => 'required',
      'dniDelUsuarioAdministrador' => 'required',
      'email' => 'required',
      'telefonoDelUsuarioAdministrador' => 'required',
      'password' => 'required',
      'rol' => 'required',
      'estadoDelUsuarioAdministrador' => 'required'
    ]);

    Administrador::create([
      'nombreDelUsuarioAdministrador' => $data['nombreDelUsuarioAdministrador'],
      'primerApellidoAdministrador' =>  $data['primerApellidoAdministrador'],
      'segundoApellidoAdministrador' =>  $data['segundoApellidoAdministrador'],
      'dniDelUsuarioAdministrador' =>  $data['dniDelUsuarioAdministrador'],
      'email' =>  $data['email'],
      'telefonoDelUsuarioAdministrador' =>  $data['telefonoDelUsuarioAdministrador'],
      'password' =>  Hash::make($data['password']),
      'rol' =>  $data['rol'],
      'estadoDelUsuarioAdministrador' =>  $data['estadoDelUsuarioAdministrador']
    ]);

    return redirect('/home');


}
}
