<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aspecto;
use App\Fondo;

class AspectoController extends Controller
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

    //LISTAR REGISTROS
        public function index ()
        {
            $aspectos = Aspecto::all();
            $id = Aspecto::find('1');
            $datosDisponibles = 0;
            if(empty($id))
            {
                $datosDisponibles = 0;
            }
            else{
                $datosDisponibles = $id->id;
            }

            $fondos = Fondo::all();
            $idFondo = Fondo::find('1');
            $fondosDisponibles = 0;
            if(empty($idFondo))
            {
                $fondosDisponibles = 0;
            }
            else{
                $fondosDisponibles = $idFondo->id;
            }

            $name = auth()->administrador()->nombreDelUsuarioAdministrador;
            if (auth()->administrador()->estadoDelUsuarioAdministrador==1) 
            {
                return view('aspectos.index',compact('aspectos', 'fondos', 'datosDisponibles', 'fondosDisponibles', 'name'));
            }
            else
            {
                return view('layouts.seccionesGenerales.accesoDenegado', compact('name'));
            }
        }
    //


    //GUARDAR REGISTROS
      public function guardar (Request $request)
      {
        $aspectos = new Aspecto;

        $aspectos->telefono = $request->input('telefono1');
        $aspectos->correoElectronico = $request->input('correoElectronico1');
        $aspectos->facebook = $request->input('facebook1');
        $aspectos->whatsapp = $request->input('whatsapp1');
        $aspectos->instagram = $request->input('instagram1');
        $aspectos->ubicacion = $request->input('ubicacion1');
        $aspectos->horarioRegular = $request->input('horarioRegular1');
        $aspectos->historia = $request->input('historia1');
        $aspectos->lema = $request->input('lema1');
        $aspectos->horarioEspecial = $request->input('horarioEspecial1');
        $aspectos->mision = $request->input('mision1');
        $aspectos->vision = $request->input('vision1');
        $aspectos->compromiso = $request->input('compromiso1');
        $aspectos->valores = $request->input('valores1');
        $aspectos->save();
      }
    //

    public function actualizar (Request $request, $id)
    {
        $aspectos = Aspecto::find('1');
        if($id == '1')
        {
            $aspectos->ubicacion = $request->input('ubicacion2');
        }
        else if($id == '2')
        {
            $aspectos->telefono = $request->input('telefono2');
        }
        else if($id == '3')
        {
            $aspectos->correoElectronico = $request->input('correoElectronico2');
        }
        else if($id == '4')
        {
            $aspectos->facebook = $request->input('facebook2');
        }
        else if($id == '5')
        {
            $aspectos->instagram = $request->input('instagram2');
        }
        else if($id == '6')
        {
            $aspectos->whatsapp = $request->input('whatsapp2');
        }
        else if($id == '7')
        {
            $aspectos->horarioRegular = $request->input('horarioRegular2');
        }
        else if($id == '8')
        {
            $aspectos->horarioEspecial = $request->input('horarioEspecial2');
        }
        else if($id == '9')
        {
            $aspectos->lema = $request->input('lema2');
        }
        else if($id == '10')
        {
            $aspectos->historia = $request->input('historia2');
        }
        else if($id == '11')
        {
            $aspectos->valores = $request->input('valores2');
        }
        else if($id == '12')
        {
            $aspectos->compromiso = $request->input('compromiso2');
        }
        else if($id == '13')
        {
            $aspectos->mision = $request->input('mision2');
        }
        else if($id == '14')
        {
            $aspectos->vision = $request->input('vision2');
        }

        $aspectos->save();
    }
}
