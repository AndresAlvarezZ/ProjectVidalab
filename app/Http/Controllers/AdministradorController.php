<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdministradorController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth:admins');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    $acceso = false;
    $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view('homeAdmins',compact('acceso','name'));
  }

  public function nuevoAdministrador()
  {
    $acceso = false;
    $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view('nuevoAdministrador',compact('acceso','name'));
  }
  public function nuevoAdministradorCreate()
{

    $data = $this->validate(request(),
    [
      'nombreDelUsuarioAdministrador' => 'required',
      'primerApellidoAdministrador' => 'required',
      'segundoApellidoAdministrador' => 'required',
      'dniDelUsuarioAdministrador' => 'required',
      'email' => ['required','email','unique:administradors'],
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
    $acceso = false;
    $name = auth()->administrador()->nombreDelUsuarioAdministrador;
    return view('homeAdmins',compact('acceso','name'));


}
protected function guard()
{
  return Auth::guard('admins');
}
}
