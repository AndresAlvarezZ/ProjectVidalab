<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prueba;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\pruebasImport;

class PruebaController extends Controller
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

    //LISTAR REGISTROS
        public function index ()
        {
            $pruebas = Prueba::orderBy('codigoDelAnalisis', 'asc')->get();
            $name = auth()->administrador()->nombreDelUsuarioAdministrador;
            if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
            return view('pruebas.index',compact('pruebas', 'name'));
            }
            else{
                return view('layouts.seccionesGenerales.accesoDenegado', compact('name'));
            }
        }
    //


    //GUARDAR REGISTROS
        public function guardar (Request $request)
        {
            $prueba = new Prueba;

            $prueba->codigoDelAnalisis = $request->input('codigoDelAnalisis1');
            $prueba->nombreDelAnalisis = $request->input('nombreDelAnalisis1');
            $prueba->descripcionDelAnalisis = $request->input('descripcionDelAnalisis1');
            $prueba->costoDelAnalisis = $request->input('costoDelAnalisis1');
            $prueba->categoriaDelAnalisis = $request->input('categoria');
            $prueba->descuentoDelAnalisis = $request->input('descuentoDelAnalisis1');
            $prueba->save();
        }
    //


    //IMPORTAR REGISTROS
        public function importarRegistros(Request $request)
        {
            $archivo = $request->file('archivo');
            Excel::import(new pruebasImport, $archivo);

            return redirect ('/pruebas');
        }
    //


    //ACTUALIZAR REGISTROS
        public function actualizar (Request $request, $id)
        {
            $prueba = Prueba::find($id);

            $prueba->codigoDelAnalisis = $request->input('codigoDelAnalisis3');
            $prueba->nombreDelAnalisis = $request->input('nombreDelAnalisis3');
            $prueba->descripcionDelAnalisis = $request->input('descripcionDelAnalisis3');
            $prueba->costoDelAnalisis = $request->input('costoDelAnalisis3');
            $prueba->descuentoDelAnalisis = $request->input('descuentoDelAnalisis3');
            $prueba->categoriaDelAnalisis = $request->input('categoria3');
            $prueba->save();
        }
    //


    //ELIMINAR REGISTROS
        public function eliminar ($id)
        {
            $prueba = Prueba::find($id);
            $prueba->delete();
            return $prueba;
        }
    //


}
