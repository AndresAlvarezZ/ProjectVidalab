<?php

use Illuminate\Support\Facades\Route;
use App\Prueba;
use App\Paquete;
use App\Aspecto;
use App\Fondo;
use App\Especialista;
use App\Archivos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
  $pruebas = Prueba::all();
  $paquetes = Paquete::all();
    return view('catalogo.index', compact('pruebas', 'paquetes'));
});*/
Route::get('/', function()
{
  $aspecto = Aspecto::find('1');
  $idAspecto = Aspecto::find('1');
  $aspectoDisponible = 0;
  if(empty($idAspecto))
  {
      $aspectoDisponible = 0;
  }
  else{
      $aspectoDisponible = $idAspecto->id;
  }

  $especialistas = Especialista::all();
  $idEspecialista = Especialista::all();
    $especialistaDisponible = 0;
    if(empty($idEspecialista))
    {
        $especialistaDisponible = 0;
    }
    else{
        $especialistaDisponible = '1';
    }

    $fondo = Fondo::find('1');
    $idFondo = Fondo::find('1');
    $fondosDisponibles = 0;
    if(empty($idFondo))
    {
        $fondosDisponibles = 0;
    }
    else{
        $fondosDisponibles = $idFondo->id;
    }

    $numeroDeOfertas = DB::table('paquetes')->count();
    if($numeroDeOfertas >= 6)
    {
      $ultimasCincoOfertas = Paquete::latest()->take(6)->get();
    }


    $archivos = Archivos::all();
    $fotos = Archivos::where('tipoDeArchivo', 1)->get();
    return view('homeGeneral', compact('fotos', 'aspecto', 'especialistas', 'fondo', 'numeroDeOfertas', 'ultimasCincoOfertas', 'fondosDisponibles', 'aspectoDisponible', 'especialistaDisponible'));
});

Auth::routes();

//*---------------RUTAS LISTAS-------------------- */

//RUTAS DE BIENVENIDA
  Route::get('/homeAdmins', 'AdministradorController@index')->name('homeAdmins');
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/inicio', 'HomeController@homePublico')->name('homePublico');
//


//RUTAS DE SUBMÓDULO ADMINISTRADOR
  Route::get('/administradores', 'AdministradorController@listar');
  Route::post('/nuevoAdministrador/registrar', 'AdministradorController@nuevoAdministradorCreate');//*
  Route::get('/administradores/activos', 'AdministradorController@listarAdministradoresActivos');
  Route::get('/administradores/inactivos', 'AdministradorController@listarAdministradoresInactivos');
  Route::put('/administradores/{administrador}', 'AdministradorController@actualizar');//*
  Route::put('/administradores/inactivar/{administrador}', 'AdministradorController@inactivar');//*
  Route::put('/administradores/activar/{administrador}', 'AdministradorController@activar');//*
//


//RUTAS DE SUBMÓDULO TAREAS
  Route::post('/tareas/registrar', 'TareaController@guardar');//*
  Route::delete('/tareas/eliminar/{id}', 'TareaController@eliminar');//*
//


//RUTAS DE SUBMÓDULO INFORMACION DE LA EMPRESA
  Route::get('/informacion', 'AspectoController@index');
  Route::post('/aspectos/registrar', 'AspectoController@guardar');//*
  Route::put('/aspectos/{aspecto}', 'AspectoController@actualizar');//*

  Route::put('/subirFondos', 'FondoController@subirFondos');
  Route::put('/actualizar/fondo', 'FondoController@actualizarFondo');

  Route::get('/multimedia','ArchivosController@index');
  Route::get('/galeriaDeFotos','ArchivosController@galeriaDeFotos');                                //CLIENTES
  Route::get('/galeriaDeVideos','ArchivosController@galeriaDeVideos');                              //CLIENTES
  Route::get('/galeria/Publica/DeFotos','ArchivosController@galeriaDeFotosPublica');                //PUBLICO
  Route::get('/galeria/Publica/DeVideos','ArchivosController@galeriaDeVideosPublica');              //PUBLICO
  Route::get('/galeria/administrativa','ArchivosController@galeriaAdministrativa');                 //ADMIN
  Route::post('/multimediaPost','ArchivosController@multimediaPost');//*
  Route::put('/multimedia/{archivo}','ArchivosController@editarMultimedia');//*
  Route::delete('/multimedia/{archivo}','ArchivosController@eliminarMultimedia');//*
//


//RUTAS DE SUBMÓDULO ESPECIALISTAS
  Route::get('/especialistas', 'EspecialistaController@index');
  Route::get('/especialistas/mostrar', 'EspecialistaController@verPerfiles');       //ADMINISTRADORES
  Route::get('/especialistas/perfiles', 'EspecialistaController@verEspecialistas');            //CLIENTES
  Route::post('/especialistas/registrar', 'EspecialistaController@guardar');//*
  Route::put('/especialistas/{especialista}', 'EspecialistaController@actualizar');//*
  Route::delete('/especialistas/{especialista}', 'EspecialistaController@eliminar');//*
  Route::put('/subirImagenEspecialista','EspecialistaController@subirImagenEspecialista');//*
//


//RUTAS DE SUBMÓDULO NOTIFICACIONES
  Route::get('/notificaciones','NotificacionesController@Notificaciones');
  Route::get('/mostrarNotificaciones/{notificacion}', 'NotificacionesController@mostrarNotificacion');
  Route::get('/notificacionEspecifica','NotificacionesController@NotificacionEspecifica');
  Route::get('/notificacionMasiva','NotificacionesController@NotificacionMasiva');
  Route::get('/notificacionEspecificaEmpresarial','NotificacionesController@NotificacionEspecificaEmpresarial');
  Route::get('/notificacionMasivaEmpresarial','NotificacionesController@NotificacionMasivaEmpresarial');
  Route::post('/envioNotificacionEspecifica','NotificacionesController@envioDeNotificacionEspecifica');//*
  Route::post('/envioNotificacionMasiva','NotificacionesController@envioDeNotificacionMasiva');//*
  Route::post('/envioNotificacionEspecificaEmpresarial','NotificacionesController@envioDeNotificacionEspecificaEmpresarial');//*
  Route::post('/envioNotificacionMasivaEmpresarial','NotificacionesController@envioDeNotificacionMasivaEmpresarial');//*
//


//RUTAS DE SUBMÓDULO EMPRESAS
  Route::get('/empresas', 'EmpresaController@index');
  Route::post('/empresas/registrar', 'EmpresaController@guardar');
  Route::post('/importar/registros/empresas', 'EmpresaController@importarRegistros');//*
  Route::get('/empresas/{empresa}', 'EmpresaController@mostrar');
  Route::put('/empresas/{empresa}', 'EmpresaController@actualizar');
  Route::delete('/empresas/{empresa}', 'EmpresaController@eliminar');
//


//RUTAS DE SUBMÓDULO CITAS
  Route::get('/citas', 'CitaController@index');
  Route::post('/citas/registrar', 'CitaController@guardar');//*
  Route::delete('/citas/{cita}', 'CitaController@eliminar');//*
  Route::put('/citas/{cita}', 'CitaController@actualizar');//*
//


//RUTAS DE SUBMÓDULO PRUEBAS
  Route::post('/pruebas/registrar', 'PruebaController@guardar');//*
  Route::post('/importar/registros/pruebas', 'PruebaController@importarRegistros');//*
  Route::get('/pruebas', 'PruebaController@index');
  Route::put('/pruebas/{prueba}', 'PruebaController@actualizar');//*
  Route::delete('/pruebas/{prueba}', 'PruebaController@eliminar');//*
//


//RUTAS DE SUBMÓDULO PAQUETES
  Route::post('/paquetes/registrar', 'PaqueteController@guardar');//*
  Route::post('/importar/registros/paquetes', 'PaqueteController@importarRegistros');//*
  Route::get('/paquetes', 'PaqueteController@index');
  Route::put('/subirImagenPaquete','PaqueteController@subirImagenPaquete');//*
  Route::put('/paquetes/{paquete}', 'PaqueteController@actualizar');//*
  Route::delete('/paquetes/{paquete}', 'PaqueteController@eliminar');//*
//


//RUTAS DE SUBMÓDULO CATALOGO
  Route::get('/catalogos', 'CatalogoController@index')->name('catalogo');                               //CLIENTES
  Route::get('/catalogosAdmins', 'CatalogoController@indexAdmins')->name('catalogosAdmins');            //ADMINISTRADORES
  Route::get('/catalogo/publico', 'CatalogoController@catalogoPublico')->name('catalogoPublico');       //PUBLICO
  Route::get('/compras/carrito','CatalogoController@carrito');                                          //CLIENTES
  Route::get('/consulta/carrito','CatalogoController@carritoPublico');                                  //PUBLICO
//


//RUTAS DE SUBMÓDULO COMPRAS
  Route::get('/compras/FinalizarCompra','ComprasController@FinalizarCompra');    //CLIENTE
  Route::get('/consulta/total','ComprasController@totalCarritoPublico');         //PUBLICO
  Route::get('/compras/validarCompra','ComprasController@validarCompra');        //CLIENTE        
  Route::get('/compras/domicilio','ComprasController@pedidoDomicilio');
  Route::get('/compras/domicilioFactura','ComprasController@pedidoDomicilioFactura');
//


//RUTAS DE SUBMÓDULO FACTURAS
  Route::get('/verCompras','FacturasController@verCompras');
  Route::get('/verComprasCanceladas','FacturasController@verComprasCanceladas');
//


//RUTAS DE SUBMÓDULO SOLICITUDES
  Route::get('/solicitudes','SolicitudesController@index');
  Route::get('/solicitudes/enEspera','SolicitudesController@SolicitudesEnEspera');
  Route::get('/solicitudes/confirmadas','SolicitudesController@SolicitudesConfirmadas');
  Route::get('/solicitudes/finalizadas','SolicitudesController@SolicitudesFinalizadas');
  Route::get('/solicitudes/canceladas','SolicitudesController@SolicitudesCanceladas');
  Route::put('/solicitudes/procesarSolicitud/{solicitud}','SolicitudesController@procesarSolicitud');//*
//

//RUTAS DE SUBMÓDULO CLIENTES
  Route::get('/afiliarme','ClientesController@IngresarCliente');  
  Route::get('/verPerfil','ClientesController@verPerfil');
  Route::get('/clientes','ClientesController@listarClientes');
  Route::get('/clientes/perfiles','ClientesController@perfilesDeClientes');
  Route::Post('/afiliarme','ClientesController@CrearCliente');//*
  Route::put('/subirImagen','ClientesController@subirImagen');//*
  Route::put('/editarPerfil','ClientesController@editarPerfil');//*
  Route::get('/graficar/clientes','ClientesController@graficarClientes');  
//


//RUTAS DE SUBMÓDULO FACTURAS
  Route::get('/facturas','FacturasController@miExpediente');
  Route::get('/procesarFactura/{factura}','FacturasController@procesarCompra');
  Route::put('/procesarFactura/{factura}','FacturasController@actualizarFactura');
  Route::get('/verFacturas','AdministradorController@mostrarFacturas');
//


//RUTAS DE PRUEBA DE SISTEMA
Route::get('/prueba{codigo}','ComprasController@FinalizarCompra');
