<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\User;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth:web');
  }
  
    public function IngresarCliente()
    {
      return view('clientes.ingresarCliente');
    }
    public function CrearCliente(Request $request)
    {
      $data = $this->validate(request(),
      [
        'dniDelCliente' => 'required',
        'nombreDelCliente' => 'required',
        'primerApellidoDelCliente' => 'required',
        'segundoApellidoDelCliente' => 'required',
        'fechaDeNacimientoDelCliente' => 'required',
        'edadDelCliente' => 'required',
        'correoDelCliente' => 'required',
        'telefonoDelCliente' => 'required',
        'domicilioDelCliente' => 'required',
        'aceptacionDeTerminos' => 'required'
      ]);
      $idUpdated = Auth()->user()->id;
      Clientes::create([
        'idUsuario' => $idUpdated,
        'dniDelCliente' => $data['dniDelCliente'],
        'nombreDelCliente' =>$data['nombreDelCliente'] ,
        'primerApellidoDelCliente' =>$data['primerApellidoDelCliente'] ,
        'segundoApellidoDelCliente' => $data['segundoApellidoDelCliente'],
        'fechaDeNacimientoDelCliente' => $data['fechaDeNacimientoDelCliente'],
        'edadDelCliente' => $data['edadDelCliente'],
        'correoDelCliente' => $data['correoDelCliente'],
        'telefonoDelCliente' => $data['telefonoDelCliente'],
        'domicilioDelCliente' => $data['domicilioDelCliente'],
        'aceptacionDeTerminos' => $data['aceptacionDeTerminos']
      ]);
      return redirect('/home');
      //actualizacion de tabla
    /*  DB::table('users')
              ->where('id', 7)
              ->update(['idCliente' => 9]);
      return redirect('/home');*/
    }
}
