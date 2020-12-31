<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarea;

class TareaController extends Controller
{
    //GUARDAR REGISTROS
        public function guardar (Request $request)
        {
            $tarea = new Tarea;

            $tarea->tipoDeTarea = $request->input('tipoDeTarea');
            $tarea->tarea = $request->input('tarea');
            $tarea->save();
        }
    //


    //ELIMINAR REGISTROS
      public function eliminar ($id)
      {
        $tarea = Tarea::find($id);
        $tarea->delete();
        return $tarea;
      }
    //



    //ELIMINAR
}