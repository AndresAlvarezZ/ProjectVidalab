<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;
use App\Clientes;
use App\Notificaciones;
use Illuminate\Support\Facades\Mail;
use App\Mail\envioDeNotificaciones;

class NotificacionesController extends Controller
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

  //MOSTRAR NOTIFICACIÓN ESPECÍFICA
   public function NotificacionEspecifica()
    {
      $clientes = Clientes::all();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view('Notificaciones.NotificacionEspecifica',compact('name','clientes'));
    }
  //
  
  //AGREGAR Y ENVIAR NOTIFICACIÓN ESPECÍFICA
    public function envioDeNotificacionEspecifica()
    {
      $data = $this->validate(request(),
      [
        'asunto'=>'required',
        'mensaje'=>'required',
        'clienteOpcion'=>'required',
        'file'=>'nullable'
      ]);

      $id = auth()->administrador()->id;
      $mensaje = $data['mensaje'];
      $telefono = auth()->administrador()->telefonoDelUsuarioAdministrador;
      $correo = auth()->administrador()->email;
      Mail::to($data['clienteOpcion'])->send(new envioDeNotificaciones($data));

      Notificaciones::create([
        'idUsuarioAdministrador' =>$id,
        'mensajeDeNotificacion' => $mensaje,
        'telefono' => $telefono,
        'correoElectronico' => $correo
      ]);
      return redirect('homeAdmins')->with('status','Notificación enviada exitosamente');
    }
  //


  //MOSTRAR NOTIFICACIÓN MASIVA
    public function NotificacionMasiva()
    {
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      return view('Notificaciones.NotificacionMasiva',compact('name'));
    }
  //


  //AGREGAR Y ENVIAR NOTIFICACIÓN MASIVA
    public function envioDeNotificacionMasiva()
    {
      $data = $this->validate(request(),[
        'asunto'=>'required',
        'mensaje'=>'required',
        'file'=>'nullable'
      ]);

      $todosLosClientes = Clientes::all();
      foreach ($todosLosClientes as $cliente) 
      {
        Mail::to($cliente->correoDelCliente)->send(new envioDeNotificaciones($data));
      }

      $id = auth()->administrador()->id;
      $mensaje = $data['mensaje'];
      $telefono = auth()->administrador()->telefonoDelUsuarioAdministrador;
      $correo = auth()->administrador()->email;

      Notificaciones::create([
        'idUsuarioAdministrador' =>$id,
        'mensajeDeNotificacion' => $mensaje,
        'telefono' => $telefono,
        'correoElectronico' => $correo
      ]);
      return redirect('homeAdmins')->with('status','Notificación enviada exitosamente');
    }
  //


}
