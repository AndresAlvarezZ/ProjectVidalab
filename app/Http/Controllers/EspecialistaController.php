<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialista;
use App\User;
use App\Fondo;
use App\Cliente;

class EspecialistaController extends Controller
{
    /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth:web')
    ->only
    (
        'verEspecialistas'
    );

    $this->middleware('auth:admins')
    ->only
    (
        'index', 
        'verPerfiles', 
        'guardar', 
        'actualizar', 
        'subirImagenEspecialista', 
        'eliminar'
    );
  }

    //


    //LISTAR REGISTROS
        public function index()
        {
            $especialistas = Especialista::orderBy('primerApellidoDelEspecialista', 'asc')->get();
            $name = auth()->administrador()->nombreDelUsuarioAdministrador;
            if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
                return view('especialistas.index',compact('especialistas', 'acceso','name'));
            }
            else{
                return view('layouts.seccionesGenerales.accesoDenegado', compact('name'));
            }
        }
    //


    //ADMINISTRADORES: VER PERFILES
        public function verPerfiles()
        {
            $especialistas = Especialista::orderBy('primerApellidoDelEspecialista', 'asc')->get();
            $disponible = Especialista::all();
            $especialistaDisponible = 0;
            if(empty($disponible))
            {
                $especialistaDisponible = 0;
            }
            else{
                $especialistaDisponible = '1';
            }

            $fondo = Fondo::find('1');
            $fondosDisponibles = 0;
            if(empty($fondo))
            {
                $fondosDisponibles = 0;
            }
            else{
                $fondosDisponibles = $fondo->id;
            }

            $name = auth()->administrador()->nombreDelUsuarioAdministrador;
            if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
                return view('especialistas.perfilDeEspecialistas',compact('especialistas', 'fondo', 'fondosDisponibles', 'especialistaDisponible', 'acceso','name'));
            }
            else{
                return view('layouts.seccionesGenerales.accesoDenegado', compact('name'));
            }
        }
    //


    //GUARDAR REGISTROS
        public function guardar(Request $request)
        {
            $especialista = new Especialista;

            $especialista->nombreDelEspecialista = $request->input('nombreDelEspecialista1');
            $especialista->segundoNombreDelEspecialista = $request->input('segundoNombreDelEspecialista1');
            $especialista->primerApellidoDelEspecialista = $request->input('primerApellidoDelEspecialista1');
            $especialista->segundoApellidoDelEspecialista = $request->input('segundoApellidoDelEspecialista1');
            $especialista->correoDelEspecialista = $request->input('correoDelEspecialista1');
            $especialista->sedeDelEspecialista = $request->input('sedeDelEspecialista1');
            $especialista->especialidadesDelEspecialista = $request->input('especialidadesDelEspecialista1');
            $especialista->save();
        }
    //


    //ACTUALIZAR REGISTROS
        public function actualizar(Request $request, $id)
        {
            $especialista = Especialista::find($id);

            $especialista->correoDelEspecialista = $request->input('correoDelEspecialista3');
            $especialista->sedeDelEspecialista = $request->input('sedeDelEspecialista3');
            $especialista->especialidadesDelEspecialista = $request->input('especialidadesDelEspecialista3');
            $especialista->save();
        }
    //


    //SUBIR FOTO DE PERFIL
        public function subirImagenEspecialista(Request $request)
        {
            $identificador = '';
            $identificador = $request->input('id');
            $especialista = Especialista::find($identificador);

            if (request()->hasFile('imagenDelEspecialista'))
            {
              if ($especialista->imagenDelEspecialista!=null) {
                unlink(public_path().'/perfilesDeEspecialistas/'.$especialista->imagenDelEspecialista);
              }
                $destinationPath = public_path().'/perfilesDeEspecialistas';
                $files = request()->file('imagenDelEspecialista');
                $file_name = $files->getClientOriginalName();
                $files->move($destinationPath , $file_name);
                $especialista->imagenDelEspecialista = $file_name;
                $especialista->update();
            }
            return redirect('/especialistas')->with('imagen','cambiada');
        }
    //


    //ELIMINAR REGISTROS
        public function eliminar($id)
        {
            $especialista = Especialista::find($id);
            $especialista->delete();
            return $especialista;
        }
    //
}
