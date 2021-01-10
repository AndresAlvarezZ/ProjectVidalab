<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarea;
use Illuminate\Support\Facades\Auth;

class TareaController extends Controller
{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  //PERMISOS
    public function __construct()
    {
      $this->middleware('auth:admins')
      ->only
      (
        'guardar',
        'eliminar'
      );
    }
  //
    //GUARDAR REGISTROS
      public function guardar(Request $request)
      {
        $tarea = new Tarea;

        $tarea->tipoDeTarea = $request->input('tipoDeTarea');
        $tarea->tarea = $request->input('tarea');
        $tarea->save();
      }
    //


    //ELIMINAR REGISTROS
      public function eliminar($id)
      {
        $tarea = Tarea::find($id);
        $tarea->delete();
        return $tarea;
      }
    //



    //ELIMINAR
}
