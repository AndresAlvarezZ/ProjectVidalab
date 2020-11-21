<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;
use App\Clientes;
use App\Notificaciones;
use App\Facturas;
use App\Compras;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

  //PERMISO DE ACCESO
    public function index()
    {
      $acceso = false;
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view('homeAdmins',compact('acceso','name'));
    }

    protected function guard()
    {
      return Auth::guard('admins');
    }
  //


  //LISTAR REGISTROS
    public function listar()
    {
      $superAdministradores = Administrador::where('rol', 1)->first();
      $administradores = Administrador::orderBy('primerApellidoAdministrador', 'asc')
                                        ->where('rol', '!=', 1)->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view('administrador.listar', compact('superAdministradores', 'administradores', 'acceso', 'name'));
    }
  //


  //LISTAR REGISTROS CON ESTADO ACTIVO
    public function listarAdministradoresActivos()
    {
      $administradores = Administrador::orderBy('primerApellidoAdministrador', 'asc')
                                        ->where([
                                          ['estadoDelUsuarioAdministrador', '=', 1],
                                          ['rol', '!=', 1]])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view('administrador.listarActivos', compact('administradores', 'acceso', 'name'));
    }
  //

  //LISTAR REGISTROS CON ESTADO INACTIVO
    public function listarAdministradoresInactivos()
    {
      $administradores = Administrador::orderBy('primerApellidoAdministrador', 'asc')
                                      ->where([
                                        ['estadoDelUsuarioAdministrador', '=', 0],
                                        ['rol', '!=', 1]])->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view('administrador.listarInactivos', compact('administradores', 'acceso', 'name'));
    }
  //

  //AGREGAR REGISTRO
    public function nuevoAdministradorCreate(Request $request)
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
        'rol' =>  'required',
        'estadoDelUsuarioAdministrador' =>  'required',
      ]);

      Administrador::create(
        [
          'nombreDelUsuarioAdministrador' => $data['nombreDelUsuarioAdministrador'],
          'primerApellidoAdministrador' =>  $data['primerApellidoAdministrador'],
          'segundoApellidoAdministrador' =>  $data['segundoApellidoAdministrador'],
          'dniDelUsuarioAdministrador' =>  $data['dniDelUsuarioAdministrador'],
          'email' =>  $data['email'],
          'telefonoDelUsuarioAdministrador' =>  $data['telefonoDelUsuarioAdministrador'],
          'password' =>  Hash::make($data['password']),
          'rol' =>  0, //POR DEFECTO ES ADMINISTRADOR = 0, SUPER ADMINISTRADOR = 1;
          'estadoDelUsuarioAdministrador' =>  1, //POR DEFECTO ES ACTIVO
      ]);

      $acceso = false;
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view('homeAdmins',compact('acceso','name'))->with('status','Administrador Agregado exitosamente');
    }
  //


  //ACTUALIZAR REGISTRO
    public function actualizar (Request $request, $id)
    {
      $administrador = Administrador::find($id);
      $administrador->telefonoDelUsuarioAdministrador = $request->input('telefonoDelUsuarioAdministrador3');
      $administrador->email = $request->input('email3');
      $administrador->save();
    }
  //


  //ACTUALIZAR ESTADO DE ADMINISTRADOR A INACTIVAR
  public function inactivar (Request $request, $id)
  {
    $administrador = Administrador::find($id);
    $administrador->motivoDeEstadoDelUsuarioAdministrador = $request->input('motivoDeEstadoDelUsuarioAdministrador4');

    $nuevoEstado = 1;
    if($request->input('motivoDeEstadoDelUsuarioAdministrador4') == "Inactivar");
    {
      $nuevoEstado = 0;
    }
    $administrador->estadoDelUsuarioAdministrador = $nuevoEstado;
    $administrador->save();
  }
//


  //ACTUALIZAR DE ADMINISTRADOR A ACTIVAR
  public function activar (Request $request, $id)
  {
    $administrador = Administrador::find($id);
    $administrador->motivoDeEstadoDelUsuarioAdministrador = $request->input('motivoDeEstadoDelUsuarioAdministrador5');

    $nuevoEstado = 0;
    if($request->input('motivoDeEstadoDelUsuarioAdministrador5') == "ACTIVAR");
    {
      $nuevoEstado = 1;
    }
    $administrador->estadoDelUsuarioAdministrador = $nuevoEstado;
    $administrador->save();
  }
//MODULO DE FACTURAS
public function mostrarFacturas()
{
  $facturas = Facturas::orderBy('created_at','desc')->get();
  $compras = Compras::all();
  $fecha = date('d-m-Y');
  $total = 0;
  $indice = 0;
  $indiceFactura = 0;
  $name = auth()->administrador()->nombreDelUsuarioAdministrador;
  return view('facturas.mostrarFacturasAdmins',compact('facturas','compras','indice','name','indiceFactura','fecha','total'));

  // code...
}


}
