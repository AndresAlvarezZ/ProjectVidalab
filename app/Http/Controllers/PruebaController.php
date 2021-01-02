<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
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


    //GUARDAR REGISTROS
        public function importarRegistros(Request $request)
        {
            $archivoCSV = $_FILES['archivo']; 
            $archivoCSV = file_get_contents($archivoCSV['tmp_name']); 

            $archivoCSV = explode("\n", $archivoCSV);
            $archivoCSV = array_filter($archivoCSV); 

            foreach ($archivoCSV as $dato) 
            {
                $listaDePruebas[] = explode(",", $dato);
            }

            foreach ($listaDePruebas as $dato) 
            {
                if(!empty(Prueba::find($dato[0])))
                {
                    $affected = DB::table('pruebas')->where('codigoDelAnalisis', $dato[0])
                    ->update
                    ([
                        'nombreDelAnalisis' => $dato[1],
                        'descripcionDelAnalisis' => $dato[2],
                        'categoriaDelAnalisis' => $dato[3],
                        'costoDelAnalisis' => $dato[4],
                        'descuentoDelAnalisis' => $dato[5],
                    ]);
                }
                else
                {
                    DB::table('pruebas')->insert([
                        'codigoDelAnalisis' => $dato[0],
                        'nombreDelAnalisis' => $dato[1],
                        'descripcionDelAnalisis' => $dato[2],
                        'categoriaDelAnalisis' => $dato[3],
                        'costoDelAnalisis' => $dato[4],
                        'descuentoDelAnalisis' => $dato[5],
                    ]);
                }
            }

            return redirect('/pruebas');
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
