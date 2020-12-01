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
        'segundoNombreDelCliente' => 'required',
        'primerApellidoDelCliente' => 'required',
        'segundoApellidoDelCliente' => 'required',
        'fechaDeNacimientoDelCliente' => 'required',
        'edadDelCliente' => 'required',
        'correoDelCliente' => 'required',
        'telefonoDelCliente' => 'required',
        'numeroDehijosDelcliente' => 'required',
        'domicilioDelCliente' => 'required',
        'aceptacionDeTerminos' => 'required'
      ]);
      $idUpdated = Auth()->user()->id;
      Auth()->user()->cliente()->create([
        'idUsuario' => $idUpdated,
        'dniDelCliente' => $data['dniDelCliente'],
        'nombreDelCliente' =>$data['nombreDelCliente'] ,
        'segundoNombreDelCliente' =>$data['segundoNombreDelCliente'] ,
        'primerApellidoDelCliente' =>$data['primerApellidoDelCliente'] ,
        'segundoApellidoDelCliente' => $data['segundoApellidoDelCliente'],
        'fechaDeNacimientoDelCliente' => $data['fechaDeNacimientoDelCliente'],
        'edadDelCliente' => $data['edadDelCliente'],
        'correoDelCliente' => $data['correoDelCliente'],
        'telefonoDelCliente' => $data['telefonoDelCliente'],
        'numeroDehijosDelcliente' =>$data['numeroDehijosDelcliente'] ,
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
    public function verPerfil()
    {
      $dato = auth()->user()->dniDelUsuario;
      $cliente = Clientes::find($dato);
      return view('Perfiles.perfil',compact('cliente'));
    }
    public function subirImagen()
    {
      $cliente = Clientes::find(auth()->user()->dniDelUsuario);
      if (request()->hasFile('imagenDelCliente')) {
        $destinationPath = public_path().'/imagenes';
        $files = request()->file('imagenDelCliente');
        $file_name = $files->getClientOriginalName(); //Get file original name
            $files->move($destinationPath , $file_name); // move files to destination folder
            $cliente->imagenDelCliente = $file_name;
            $cliente->update();
      }
        return redirect('/verPerfil');
    }
    public function editarPerfil()
    {
        $cliente = Clientes::find(auth()->user()->dniDelUsuario);
        $cliente->update(request()->all());
        return redirect('/verPerfil');

    }
}
