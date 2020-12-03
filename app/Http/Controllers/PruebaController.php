<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prueba;
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
            $pruebas = Prueba::all();
            $name = auth()->administrador()->nombreDelUsuarioAdministrador;
            if (auth()->administrador()->estadoDelUsuarioAdministrador==1) {
            return view('pruebas.index',compact('pruebas', 'name'));
            }
            else{
            return "<h1>Acceso Denegado </h1><h3>Lo sentimos $name <br> has sido inhabilitado!!!</h3>";
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
            $prueba->numeroDeMaquina = $request->input('numeroDeMaquina1');
            $prueba->descuentoDelAnalisis = $request->input('descuentoDelAnalisis1');
            $prueba->save();
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
            $prueba->numeroDeMaquina = $request->input('numeroDeMaquina3');
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
