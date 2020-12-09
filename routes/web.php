<?php

use Illuminate\Support\Facades\Route;
use App\Prueba;
use App\Paquete;


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
Route::get('/', function(){
  return view('auth.login');
});

Auth::routes();

//*---------------RUTAS LISTAS-------------------- */

//RUTAS DE BIENVENIDA
  Route::get('/homeAdmins', 'AdministradorController@index')->name('homeAdmins');
  Route::get('/home', 'HomeController@index')->name('home');
//


//RUTAS DE SUBMÓDULO ADMINISTRADOR
  Route::get('/administradores', 'AdministradorController@listar');
  Route::post('/nuevoAdministrador/registrar', 'AdministradorController@nuevoAdministradorCreate');
  Route::get('/administradores/activos', 'AdministradorController@listarAdministradoresActivos');
  Route::get('/administradores/inactivos', 'AdministradorController@listarAdministradoresInactivos');
  Route::put('/administradores/{administrador}', 'AdministradorController@actualizar');
  Route::put('/administradores/inactivar/{administrador}', 'AdministradorController@inactivar');
  Route::put('/administradores/activar/{administrador}', 'AdministradorController@activar');
//


//RUTAS DE SUBMÓDULO INFORMACION DE LA EMPRESA
  Route::get('/informacion', 'AspectoController@index');
  Route::post('/aspectos/registrar', 'AspectoController@guardar');
  Route::put('/aspectos/{aspecto}', 'AspectoController@actualizar');
  Route::get('/multimedia','ArchivosController@multimedia');
  Route::get('/multimediaCliente','ArchivosController@multimediaCliente');
  Route::post('/multimediaPost','ArchivosController@multimediaPost');
  Route::get('/verContenido','ArchivosController@verContenido');
  Route::put('/multimedia/{archivo}','ArchivosController@editarMultimedia');
//


//RUTAS DE SUBMÓDULO ESPECIALISTAS
  Route::get('/especialistas', 'EspecialistaController@index');
  Route::get('/especialistas/mostrar', 'EspecialistaController@verPerfiles');                  //ADMINISTRADORES
  Route::get('/especialistas/perfiles', 'EspecialistaController@verEspecialistas');            //CLIENTES

  Route::post('/especialistas/registrar', 'EspecialistaController@guardar');
  Route::put('/especialistas/{especialista}', 'EspecialistaController@actualizar');
  Route::delete('/especialistas/{especialista}', 'EspecialistaController@eliminar');
  Route::put('/subirImagenEspecialista','EspecialistaController@subirImagenEspecialista');
//


//RUTAS DE SUBMÓDULO NOTIFICACIONES
  Route::get('/notificaciones','NotificacionesController@Notificaciones');
  Route::get('/mostrarNotificaciones/{notificacion}', 'NotificacionesController@mostrarNotificacion');
  Route::get('/notificacionEspecifica','NotificacionesController@NotificacionEspecifica');
  Route::get('/notificacionMasiva','NotificacionesController@NotificacionMasiva');
  Route::get('/notificacionEspecificaEmpresarial','NotificacionesController@NotificacionEspecificaEmpresarial');
  Route::get('/notificacionMasivaEmpresarial','NotificacionesController@NotificacionMasivaEmpresarial');
  Route::post('/envioNotificacionEspecifica','NotificacionesController@envioDeNotificacionEspecifica');
  Route::post('/envioNotificacionMasiva','NotificacionesController@envioDeNotificacionMasiva');
  Route::post('/envioNotificacionEspecificaEmpresarial','NotificacionesController@envioDeNotificacionEspecificaEmpresarial');
  Route::post('/envioNotificacionMasivaEmpresarial','NotificacionesController@envioDeNotificacionMasivaEmpresarial');
//


//RUTAS DE SUBMÓDULO EMPRESAS
  Route::get('/empresas', 'EmpresaController@index');
  Route::post('/empresas/registrar', 'EmpresaController@guardar');
  Route::get('/empresas/{empresa}', 'EmpresaController@mostrar');
  Route::put('/empresas/{empresa}', 'EmpresaController@actualizar');
  Route::delete('/empresas/{empresa}', 'EmpresaController@eliminar');
//


//RUTAS DE SUBMÓDULO CITAS
  Route::get('/citas', 'CitaController@index');
  Route::post('/citas/registrar', 'CitaController@guardar');
  Route::delete('/citas/{cita}', 'CitaController@eliminar');
  Route::put('/citas/{cita}', 'CitaController@actualizar');
//


//RUTAS DE SUBMÓDULO PRUEBAS
  Route::post('/pruebas/registrar', 'PruebaController@guardar');
  Route::get('/pruebas', 'PruebaController@index');
  Route::put('/pruebas/{prueba}', 'PruebaController@actualizar');
  Route::delete('/pruebas/{prueba}', 'PruebaController@eliminar');
//


//RUTAS DE SUBMÓDULO PAQUETES
  Route::post('/paquetes/registrar', 'PaqueteController@guardar');
  Route::get('/paquetes', 'PaqueteController@index');
  Route::put('/paquetes/{paquete}', 'PaqueteController@actualizar');
  Route::delete('/paquetes/{paquete}', 'PaqueteController@eliminar');
//


//RUTAS DE SUBMÓDULO CATALOGO
  Route::get('/catalogos', 'CatalogoController@index')->name('catalogo');
  Route::get('/catalogosAdmins', 'CatalogoController@indexAdmins')->name('catalogosAdmins');
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
  Route::put('/solicitudes/procesarSolicitud/{solicitud}','SolicitudesController@procesarSolicitud');
//



/*----------------RUTAS A MEDIAS---------------------- */



//RUTAS DE SUBMÓDULO CLIENTES
  Route::get('/afiliarme','ClientesController@IngresarCliente');
  Route::Post('/afiliarme','ClientesController@CrearCliente');
  Route::get('/verPerfil','ClientesController@verPerfil');
  Route::put('/subirImagen','ClientesController@subirImagen');
  Route::put('/editarPerfil','ClientesController@editarPerfil');


//RUTAS DE SUBMÓDULO COMPRAS
Route::get('/compras/carrito','CatalogoController@carrito');
Route::get('/compras/FinalizarCompra','ComprasController@FinalizarCompra');
Route::get('/compras/validarCompra','ComprasController@validarCompra');
Route::get('/compras/domicilio','ComprasController@pedidoDomicilio');
Route::get('/compras/domicilioFactura','ComprasController@pedidoDomicilioFactura');


//Rutas de SUBMODULO de Facturas faltantes por revisar
Route::get('/facturas','FacturasController@miExpediente');
Route::get('/procesarFactura/{factura}','FacturasController@procesarCompra');
Route::put('/procesarFactura/{factura}','FacturasController@actualizarFactura');
Route::get('/verFacturas','AdministradorController@mostrarFacturas');



//RUTAS DE PRUEBA DE SISTEMA
Route::get('/prueba{codigo}','ComprasController@FinalizarCompra');
