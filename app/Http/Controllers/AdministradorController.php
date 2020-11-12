<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;
use App\Clientes;
use App\Notificaciones;
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


  //LISTAR REGISTROS
    public function listar()
    {
      $superAdministradores = Administrador::where('rol', 1)->first();
      $administradores = Administrador::orderBy('primerApellidoAdministrador', 'asc')
                                        ->where('rol', '!=', 1)->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view('administrador.listar', compact('superAdministradores', 'administradores', 'acceso', 'name'));
    }

  
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


  //AGREGAR
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


  //EDITAR REGISTRO
    public function actualizar (Request $request, $id)
    {
      $administrador = Administrador::find($id);
      $administrador->telefonoDelUsuarioAdministrador = $request->input('telefonoDelUsuarioAdministrador3');        
      $administrador->email = $request->input('email3');
      $administrador->save();
    }


  //EDITAR ESTADO DE REGISTRO
    public function actualizarEstado (Administrador $administrador)
    {
      $nuevoEstado = 0;
      if($administrador->estadoDelUsuarioAdministrador == 0)
      {
        $nuevoEstado = 1; 
      }    
      $administrador->estadoDelUsuarioAdministrador = $nuevoEstado;
      $this->validate(request(),
      [
        'motivoDeEstadoDelUsuarioAdministrador' => 'required',
      ]); 
      $administrador->update(request()->all());
      return redirect ('/administradores');
    }

 

 
/*
  //EDITAR ESTADO REGISTRO
  public function editarEstado(Administrador $administrador)
  {
    $name = auth()->administrador()->nombreDelUsuarioAdministrador;
    return view('administrador.editarEstado', compact('administrador', 'acceso', 'name'));
  }
*/
  




}
