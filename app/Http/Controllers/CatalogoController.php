<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prueba;
use App\Paquete;
class CatalogoController extends Controller
{


  //PERMISOS
    public function __construct()
    {
      //$this->middleware('auth:web')->only('index','carrito');
      $this->middleware('auth:admins')->only('indexAdmins');
    }
  //


  //LISTAR REGISTROS AMBOS CATÁLOGOS: CLIENTES
    public function index(Prueba $nombre)
    {
      $pruebas = Prueba::orderBy('nombreDelAnalisis', 'asc')->get();
      $paquetes = Paquete::orderBy('nombreDelPaquete', 'ASC')->get();
      $abecedario=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
      $identificadorDeAnalisis = 'Analisis';
      $identificadorDePaqete = 'Paquete';

      $idPrueba = Prueba::all();
          $pruebaDisponible = 0;
          if(empty($idPrueba))
          {
              $pruebaDisponible = 0;
          }
          else{
              $pruebaDisponible = '1';
          }


          $idPaquete = Paquete::all();
          $paqueteDisponible = 0;
          if(empty($idPaquete))
          {
              $paqueteDisponible = 0;
          }
          else{
              $paqueteDisponible = '1';
          }
      $name = $nombre->email;
      return view('catalogo.index', compact('abecedario', 'pruebas', 'paquetes','name','identificadorDeAnalisis','identificadorDePaqete', 'pruebaDisponible', 'paqueteDisponible'));
    }
  //


  //LISTAR REGISTROS AMBOS CATÁLOGOS: PUBLICO
    public function catalogoPublico()
    {
      $pruebas = Prueba::all();
      $paquetes = Paquete::orderBy('nombreDelPaquete', 'ASC')->get();
      $abecedario=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
      $identificadorDeAnalisis = 'Analisis';
      $identificadorDePaqete = 'Paquete';

      $idPrueba = Prueba::all();
          $pruebaDisponible = 0;
          if(empty($idPrueba))
          {
              $pruebaDisponible = 0;
          }
          else{
              $pruebaDisponible = '1';
          }


          $idPaquete = Paquete::all();
          $paqueteDisponible = 0;
          if(empty($idPaquete))
          {
              $paqueteDisponible = 0;
          }
          else{
              $paqueteDisponible = '1';
          }
      return view('catalogo.catalogoPublico', compact('abecedario', 'pruebas', 'paquetes','identificadorDeAnalisis','identificadorDePaqete', 'pruebaDisponible', 'paqueteDisponible'));
    }
  //


  //LISTAR REGISTROS AMBOS CATÁLOGOS: ADMINISTRADORES
    public function indexAdmins(Prueba $nombre)
    {
      $pruebas = Prueba::all();
      $paquetes = Paquete::orderBy('nombreDelPaquete', 'ASC')->get();
      $abecedario=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
     
      $idPrueba = Prueba::all();
          $pruebaDisponible = 0;
          if(empty($idPrueba))
          {
              $pruebaDisponible = 0;
          }
          else{
              $pruebaDisponible = '1';
          }


          $idPaquete = Paquete::all();
          $paqueteDisponible = 0;
          if(empty($idPaquete))
          {
              $paqueteDisponible = 0;
          }
          else{
              $paqueteDisponible = '1';
          }
      $name = auth()->administrador()->nombreDelUsuarioAdministrador;
      if (auth()->administrador()->estadoDelUsuarioAdministrador==1) 
      {
        return view('catalogo.indexAdmins', compact('abecedario', 'pruebas', 'paquetes','name', 'pruebaDisponible', 'paqueteDisponible'));
      }
      else
      {
        return view('layouts.seccionesGenerales.accesoDenegado', compact('name'));
      }
    }
  //
  

  //DATOS PARA EL CARRITO
    public function carrito()
    {
      $usuario = 'user';
      $name = 'sinDatos';
      return view('Compras.carrito', compact('usuario','name'));
    }
  //


    //DATOS PARA EL CARRITO PUBLICO
    public function carritoPublico()
    {
      $usuario = 'user';
      $name = 'sinDatos';
      return view('Compras.carritoPublico', compact('usuario','name'));
    }
  //
}
