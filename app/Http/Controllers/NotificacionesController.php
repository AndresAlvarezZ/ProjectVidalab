<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;
use App\Clientes;
use App\Empresa;
use App\Notificaciones;
use Illuminate\Support\Facades\Mail;
use App\Mail\envioDeNotificaciones;
use Illuminate\Support\Str;

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
 //

  //MOSTRAR TODAS LAS NOTIFICACIONES
   public function Notificaciones()
    {
      $notificaciones = Notificaciones::orderBy('created_at', 'desc')->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      $nombre = [];
      $apellido = [];
      $contador=0;
      foreach ($notificaciones as $notificacion) {
        $administrador = Administrador::find($notificacion->idUsuarioAdministrador);
        $nombre[$contador] = $administrador->nombreDelUsuarioAdministrador;
        $apellido[$contador] = $administrador->primerApellidoAdministrador;
        $contador++;
      }
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view('Notificaciones.todasLasNotificaciones',compact('name', 'notificaciones','nombre','apellido'));
      }
      else{
        return "<h1>Acceso Denegado </h1><h3>Lo sentimos $name <br> has sido inhabilitado!!!</h3>";
      }
    }
  //


 //MOSTRAR ÚNICO REGISTRO
  public function mostrarNotificacion($id)
  {
    $notificacion = Notificaciones::find($id);
    $name = auth()->administrador()->nombreDelUsuarioAdministrador;
    return view ('Notificaciones.mostrarNotificacion', compact('notificacion', 'name'));
  }
//



  //MOSTRAR NOTIFICACIÓN ESPECÍFICA PARA CLIENTES
   public function NotificacionEspecifica()
    {
      $clientes = Clientes::all();
      $notificaciones = Notificaciones::orderBy('created_at', 'desc')->where('tipoDeNotificacion', '=', '1')->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      $nombre = [];
      $contador=0;
      foreach ($notificaciones as $notificacion) {
        $administrador = Administrador::find($notificacion->idUsuarioAdministrador);
        $nombre[$contador] = $administrador->nombreDelUsuarioAdministrador;
        $apellido[$contador] = $administrador->primerApellidoAdministrador;
        $contador++;
      }
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view('Notificaciones.NotificacionEspecifica',compact('name','clientes', 'notificaciones','nombre','apellido'));
      }
      else{
      return "<h1>Acceso Denegado </h1><h3>Lo sentimos $name <br> has sido inhabilitado!!!</h3>";
      }
    }
  //


  //MOSTRAR NOTIFICACIÓN MASIVA PARA CLIENTES
   public function NotificacionMasiva()
   {
     $notificaciones = Notificaciones::orderBy('created_at', 'desc')->where('tipoDeNotificacion', '=', '2')->get();
     $name = auth()->administrador()->nombreDelUsuarioAdministrador;
     $nombre = [];
     $contador=0;
     foreach ($notificaciones as $notificacion) {
       $administrador = Administrador::find($notificacion->idUsuarioAdministrador);
       $nombre[$contador] = $administrador->nombreDelUsuarioAdministrador;
       $apellido[$contador] = $administrador->primerApellidoAdministrador;
       $contador++;
     }
     if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
     return view('Notificaciones.NotificacionMasiva',compact('name', 'notificaciones','nombre','apellido'));
     }
     else{
      return "<h1>Acceso Denegado </h1><h3>Lo sentimos $name <br> has sido inhabilitado!!!</h3>";
     }
   }
 //


  //MOSTRAR NOTIFICACIÓN ESPECÍFICA PARA EMPRESAS
    public function NotificacionEspecificaEmpresarial()
    {
      $empresas = Empresa::all();
      $notificaciones = Notificaciones::orderBy('created_at', 'desc')->where('tipoDeNotificacion', '=', '3')->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      $nombre = [];
      $contador=0;
      foreach ($notificaciones as $notificacion) {
        $administrador = Administrador::find($notificacion->idUsuarioAdministrador);
        $nombre[$contador] = $administrador->nombreDelUsuarioAdministrador;
        $apellido[$contador] = $administrador->primerApellidoAdministrador;
        $contador++;
      }
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view('Notificaciones.NotificacionEspecificaEmpresarial',compact('name','empresas', 'notificaciones','nombre','apellido'));
      }
      else{
      return "<h1>Acceso Denegado </h1><h3>Lo sentimos $name <br> has sido inhabilitado!!!</h3>";
      }
    }
  //


  //MOSTRAR NOTIFICACIÓN MASIVA PARA EMPRESAS
    public function NotificacionMasivaEmpresarial()
    {
      $notificaciones = Notificaciones::orderBy('created_at', 'desc')->where('tipoDeNotificacion', '=', '3')->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      $nombre = [];
      $contador=0;
      foreach ($notificaciones as $notificacion) {
        $administrador = Administrador::find($notificacion->idUsuarioAdministrador);
        $nombre[$contador] = $administrador->nombreDelUsuarioAdministrador;
        $apellido[$contador] = $administrador->primerApellidoAdministrador;
        $contador++;
      }
      $notificaciones = Notificaciones::orderBy('created_at', 'desc')->where('tipoDeNotificacion', '=', '4')->get();
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
      return view('Notificaciones.NotificacionMasivaEmpresarial',compact('name', 'notificaciones','nombre','apellido'));
      }
      else{
        return "<h1>Acceso Denegado </h1><h3>Lo sentimos $name <br> has sido inhabilitado!!!</h3>";
      }
    }
  //


  //AGREGAR Y ENVIAR NOTIFICACIÓN ESPECÍFICA PARA CLIENTES
    public function envioDeNotificacionEspecifica()
    {
      $data = $this->validate(request(),
      [
        'asunto'=>'required',
        'mensaje'=>'required',
        'clienteOpcion'=>'required',
        'tipoDeNotificacion'=>'required',
        'file'=>'nullable'
      ]);

      $id = auth()->administrador()->id;
      $mensaje = $data['mensaje'];
      Mail::to($data['clienteOpcion'])->send(new envioDeNotificaciones($data));
      $file_name = '| ';
            //$files = array_filter($_FILES['upload']['name']); something like that to be used before processing files.
      // Count # of uploaded files in array
      $total = count($_FILES['file']['name']);

      // Loop through each file
      for($i=0; $i<$total; $i++) {
           //Get the temp file path
           $tmpFilePath = $_FILES['file']['tmp_name'][$i];

           //Make sure we have a filepath
           if ($tmpFilePath != ""){
             //Setup our new file path
             $newFilePath = "./archivos/" . $_FILES['file']['name'][$i];
             //Upload the file into the temp dir
             $nombre = $_FILES['file']['name'][$i];
             if(move_uploaded_file($tmpFilePath, $newFilePath)) {
               $file_name = Str::finish($file_name,$nombre.' | ');
             }
           }
           if ($tmpFilePath == ""){$file_name = 'sin archivo';}
      }
      //file no multiple
    /*  if (request()->hasFile('file')) {
     *    $destinationPath = public_path().'/archivos';
     *    $files = request()->file('file');
     *  $file_name = $files->getClientOriginalName(); //Get file original name
     *  $files->move($destinationPath , $file_name);
          }*/
          $clientes = Clientes::where('correoDelCliente',$data['clienteOpcion'])->get();
          foreach ($clientes as $cliente) {
            $recibidoPor = Str::finish($cliente->nombreDelCliente.' ',$cliente->primerApellidoDelCliente);
          }
      Notificaciones::create([
        'idUsuarioAdministrador' =>$id,
        'receptorDeNotificacion'  => $data['clienteOpcion'],
        'enviadoPor' => Str::finish(auth()->administrador()->nombreDelUsuarioAdministrador.' ',auth()->administrador()->primerApellidoAdministrador),
        'recibidoPor' => $recibidoPor,
        'asuntoDeNotificacion' => $data['asunto'],
        'mensajeDeNotificacion' => $data['mensaje'],
        'tipoDeNotificacion'=>$data['tipoDeNotificacion'],
        'archivo' => $file_name,
      ]);

      return redirect('/notificaciones');
    }
  //


  //AGREGAR Y ENVIAR NOTIFICACIÓN MASIVA PARA CLIENTES
    public function envioDeNotificacionMasiva()
    {
      $data = $this->validate(request(),[
        'asunto'=>'required',
        'mensaje'=>'required',
        'tipoDeNotificacion'=>'required',
        'file'=>'nullable'
      ]);

      $todosLosClientes = Clientes::all();
      foreach ($todosLosClientes as $cliente)
      {
        Mail::to($cliente->correoDelCliente)->send(new envioDeNotificaciones($data));
      }

      $id = auth()->administrador()->id;
      $file_name = '| ';
            //$files = array_filter($_FILES['upload']['name']); something like that to be used before processing files.
      // Count # of uploaded files in array
      $total = count($_FILES['file']['name']);

      // Loop through each file
      for($i=0; $i<$total; $i++) {
           //Get the temp file path
           $tmpFilePath = $_FILES['file']['tmp_name'][$i];

           //Make sure we have a filepath
           if ($tmpFilePath != ""){
             //Setup our new file path
             $newFilePath = "./archivos/" . $_FILES['file']['name'][$i];
             //Upload the file into the temp dir
             $nombre = $_FILES['file']['name'][$i];
             if(move_uploaded_file($tmpFilePath, $newFilePath)) {
               $file_name = Str::finish($file_name,$nombre.' | ');
             }
           }
           if ($tmpFilePath == ""){$file_name = 'sin archivo';}
      }
      Notificaciones::create([
        'idUsuarioAdministrador' =>$id,
        'receptorDeNotificacion'  => 'Todos los clientes',
        'enviadoPor' => Str::finish(auth()->administrador()->nombreDelUsuarioAdministrador.' ',auth()->administrador()->primerApellidoAdministrador),
        'recibidoPor' => 'todos los clientes',
        'asuntoDeNotificacion' => $data['asunto'],
        'mensajeDeNotificacion' => $data['mensaje'],
        'tipoDeNotificacion'=>$data['tipoDeNotificacion'],
        'archivo' => $file_name,
      ]);

      return redirect('/notificaciones')->with('status','Notificacion enviada exisamente!!!');
    }
  //


  //AGREGAR Y ENVIAR NOTIFICACIÓN ESPECIFICA PARA EMPRESAS
    public function envioDeNotificacionEspecificaEmpresarial()
    {
      $data = $this->validate(request(),
      [
        'asunto'=>'required',
        'mensaje'=>'required',
        'clienteOpcion'=>'required',
        'tipoDeNotificacion'=>'required',
        'file'=>'nullable'
      ]);

      $id = auth()->administrador()->id;
      $mensaje = $data['mensaje'];
      Mail::to($data['clienteOpcion'])->send(new envioDeNotificaciones($data));
      $file_name = '| ';
            //$files = array_filter($_FILES['upload']['name']); something like that to be used before processing files.
      // Count # of uploaded files in array
      $total = count($_FILES['file']['name']);

      // Loop through each file
      for($i=0; $i<$total; $i++) {
           //Get the temp file path
           $tmpFilePath = $_FILES['file']['tmp_name'][$i];

           //Make sure we have a filepath
           if ($tmpFilePath != ""){
             //Setup our new file path
             $newFilePath = "./archivos/" . $_FILES['file']['name'][$i];
             //Upload the file into the temp dir
             $nombre = $_FILES['file']['name'][$i];
             if(move_uploaded_file($tmpFilePath, $newFilePath)) {
               $file_name = Str::finish($file_name,$nombre.' | ');
             }
           }
           if ($tmpFilePath == ""){$file_name = 'sin archivo';}
      }
      $clientes = Empresa::where('correoElectronicoDeLaEmpresa',$data['clienteOpcion'])->get();
      foreach ($clientes as $cliente) {
        $recibidoPor = $cliente->nombreDeLaEmpresa;
      }
      Notificaciones::create([
        'idUsuarioAdministrador' =>$id,
        'receptorDeNotificacion'  => $data['clienteOpcion'],
        'enviadoPor' => Str::finish(auth()->administrador()->nombreDelUsuarioAdministrador.' ',auth()->administrador()->primerApellidoAdministrador),
        'recibidoPor' => $recibidoPor,
        'asuntoDeNotificacion' => $data['asunto'],
        'mensajeDeNotificacion' => $data['mensaje'],
        'tipoDeNotificacion'=>$data['tipoDeNotificacion'],
        'archivo' => $file_name,
      ]);

      return redirect('/notificaciones');
    }
  //


  //AGREGAR Y ENVIAR NOTIFICACIÓN MASIVA PARA EMPRESAS
    public function envioDeNotificacionMasivaEmpresarial()
    {
      $data = $this->validate(request(),[
        'asunto'=>'required',
        'mensaje'=>'required',
        'tipoDeNotificacion'=>'required',
        'file'=>'nullable'
      ]);

      $todosLosClientes = Empresa::all();
      foreach ($todosLosClientes as $cliente)
      {
        Mail::to($cliente->correoElectronicoDeLaEmpresa)->send(new envioDeNotificaciones($data));
      }

      $id = auth()->administrador()->id;
      $mensaje = $data['mensaje'];
      $file_name = '| ';
            //$files = array_filter($_FILES['upload']['name']); something like that to be used before processing files.
      // Count # of uploaded files in array
      $total = count($_FILES['file']['name']);

      // Loop through each file
      for($i=0; $i<$total; $i++) {
           //Get the temp file path
           $tmpFilePath = $_FILES['file']['tmp_name'][$i];

           //Make sure we have a filepath
           if ($tmpFilePath != ""){
             //Setup our new file path
             $newFilePath = "./archivos/" . $_FILES['file']['name'][$i];
             //Upload the file into the temp dir
             $nombre = $_FILES['file']['name'][$i];
             if(move_uploaded_file($tmpFilePath, $newFilePath)) {
               $file_name = Str::finish($file_name,$nombre.' | ');
             }
           }
           if ($tmpFilePath == ""){$file_name = 'sin archivo';}
      }
      Notificaciones::create([
        'idUsuarioAdministrador' =>$id,
        'receptorDeNotificacion'  => 'Todas las empresas',
        'enviadoPor' => Str::finish(auth()->administrador()->nombreDelUsuarioAdministrador.' ',auth()->administrador()->primerApellidoAdministrador),
        'recibidoPor' => 'Todas las empresas',
        'asuntoDeNotificacion' =>$data['asunto'],
        'mensajeDeNotificacion' =>$data['mensaje'],
        'tipoDeNotificacion'=>$data['tipoDeNotificacion'],
        'archivo' => $file_name,
      ]);

      return redirect('/notificaciones');
    }
//
}
