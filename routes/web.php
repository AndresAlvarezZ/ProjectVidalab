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
  return view('welcome');
});

Auth::routes();

//RUTAS DE BIENVENIDA
Route::get('/homeAdmins', 'AdministradorController@index')->name('homeAdmins');
Route::get('/home', 'HomeController@index')->name('home');


//RUTAS DE SUBMÓDULO ADMINISTRADOR
Route::get('/nuevoAdministrador', 'AdministradorController@nuevoAdministrador');
Route::get('/nuevoAdministrador/nuevoAdministrador', 'AdministradorController@nuevoAdministrador');
Route::post('/nuevoAdministrador/registro', 'AdministradorController@nuevoAdministradorCreate');

Route::get('/administradores', 'AdministradorController@listar');
Route::get('/administradores/activos', 'AdministradorController@listarAdministradoresActivos');
Route::get('/administradores/inactivos', 'AdministradorController@listarAdministradoresInactivos');
Route::get('/administradores/{administrador}', 'AdministradorController@mostrar');
Route::get('/administradores/{administrador}/editar', 'AdministradorController@editar');
Route::put('/administradores/{administrador}', 'AdministradorController@actualizar');
Route::get('/administradores/{administrador}/editarEstado', 'AdministradorController@editarEstado');
Route::put('/administradores/estado/{administrador}', 'AdministradorController@actualizarEstado');


//RUTAS DE SUBMÓDULO NOTIFICACIONES
Route::get('/nuevaNotificacion', 'NotificacionesController@Notificacion');
Route::get('/notificacionEspecifica','NotificacionesController@NotificacionEspecifica');
Route::get('/notificacionMasiva','NotificacionesController@NotificacionMasiva');
Route::post('/notificacionEspecifica','NotificacionesController@envioDeNotificacionEspecifica');
Route::post('/notificacionMasiva','NotificacionesController@envioDeNotificacionMasiva');

//RUTAS DE SUBMÓDULO CLIENTES
Route::get('/afiliarme','ClientesController@IngresarCliente');
Route::Post('/afiliarme','ClientesController@CrearCliente');


//RUTAS DE SUBMÓDULO CATALOGO
Route::get('/catalogos', 'CatalogoController@index')->name('catalogo');
Route::get('/catalogosAdmins', 'CatalogoController@indexAdmins')->name('catalogosAdmins');


//RUTAS DE SUBMÓDULO PAQUETES
Route::get('/paquetes/agregar', 'PaqueteController@agregar');
Route::post('/paquetes', 'PaqueteController@guardar');
Route::get('/paquetes', 'PaqueteController@index');
Route::get('/paquetes/{paquete}', 'PaqueteController@mostrar');
Route::get('/paquetes/{paquete}/editar', 'PaqueteController@editar');
Route::put('/paquetes/{paquete}', 'PaqueteController@actualizar');
Route::get('/paquetes/{paquete}/eliminar', 'PaqueteController@eliminar');
Route::delete('/paquetes/{paquete}', 'PaqueteController@destruir');


//RUTAS DE SUBMÓDULO PRUEBAS
Route::get('/pruebas/agregar', 'PruebaController@agregar');
Route::post('/pruebas', 'PruebaController@guardar');
Route::get('/pruebas', 'PruebaController@index');
Route::get('/pruebas/{prueba}', 'PruebaController@mostrar');
Route::get('/pruebas/{prueba}/editar', 'PruebaController@editar');
Route::put('/pruebas/{prueba}', 'PruebaController@actualizar');
Route::get('/pruebas/{prueba}/eliminar', 'PruebaController@eliminar');
Route::delete('/pruebas/{prueba}', 'PruebaController@destruir');


//RUTAS DE SUBMÓDULO CATALOGO
Route::get('/catalogo/{prueba}', 'CatalogoController@mostrar');


//RUTAS DE SUBMÓDULO COMPRAS
Route::get('/compras/carrito','CatalogoController@carrito');
Route::get('/compras/FinalizarCompra','ComprasController@FinalizarCompra');
Route::get('/compras/validarCompra','ComprasController@validarCompra');
Route::get('/compras/domicilio','ComprasController@pedidoDomicilio');
Route::get('/compras/domicilioFactura','ComprasController@pedidoDomicilioFactura');


//Rutas de SUBMODULO de Facturas
Route::get('/facturas','FacturasController@miExpediente');
Route::get('/verCompras','FacturasController@verCompras');
Route::get('/procesarFactura/{factura}','FacturasController@procesarCompra');
Route::put('/procesarFactura/{factura}','FacturasController@actualizarFactura');

//Rutas de solicitudes
Route::get('/solicitudes/enEspera','SolicitudesController@SolicitudesEnEspera');
Route::get('/solicitudes/confirmadas','SolicitudesController@SolicitudesConfirmadas');
Route::get('/solicitudes/finalizadas','SolicitudesController@SolicitudesFinalizadas');
Route::get('/solicitudes/canceladas','SolicitudesController@SolicitudesCanceladas');
Route::get('/solicitudes/cambioDeEstado/{solicitud}','SolicitudesController@cambioDeEstado');
Route::put('/solicitudes/procesarCambio/{solicitud}','SolicitudesController@procesarCambio');
Route::get('/solicitudesConfirmadas/cambioDeEstado/{solicitud}','SolicitudesController@cambioDeEstadoConfirmadas');
Route::put('/solicitudesConfirmadas/procesarCambio/{solicitud}','SolicitudesController@procesarCambio');

//RUTAS DE SUBMODULO EMPRESAS
Route::get('/empresas/agregar', 'EmpresaController@agregar');
Route::post('/empresas', 'EmpresaController@guardar');
Route::get('/empresas', 'EmpresaController@index');
Route::get('/empresas/{empresa}', 'EmpresaController@mostrar');
Route::get('/empresas/{empresa}/editar', 'EmpresaController@editar');
Route::put('/empresas/{empresa}', 'EmpresaController@actualizar');
Route::get('/empresas/{empresa}/eliminar', 'EmpresaController@eliminar');
Route::delete('/empresas/{empresa}', 'EmpresaController@destruir');


//RUTAS DE SUBMÓDULO CITAS
Route::get('/citas/{empresa}/agregar', 'CitaController@agregar');
Route::post('/citas', 'CitaController@guardar');
Route::get('/citas', 'CitaController@index');
Route::get('/citas/{cita}', 'CitaController@mostrar');
Route::get('/citas/{cita}/editar', 'CitaController@editar');
Route::put('/citas/{cita}', 'CitaController@actualizar');
Route::get('/citas/{cita}/eliminar', 'CitaController@eliminar');
Route::delete('/citas/{cita}', 'CitaController@destruir');


//RUTAS DE PRUEBA DE SISTEMA
Route::get('/prueba{codigo}','ComprasController@FinalizarCompra');
