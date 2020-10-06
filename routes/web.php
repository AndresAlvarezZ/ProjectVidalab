<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//controlador de homes
Route::get('/homeAdmins', 'AdministradorController@index')->name('homeAdmins');
Route::get('/home', 'HomeController@index')->name('home');
//controlador de administrador
Route::get('/nuevoAdministrador', 'AdministradorController@nuevoAdministrador');
Route::get('/nuevoAdministrador/nuevoAdministrador', 'AdministradorController@nuevoAdministrador');
Route::post('/nuevoAdministrador/registro', 'AdministradorController@nuevoAdministradorCreate');
//controlador de notificaciones
Route::get('/nuevaNotificacion', 'NotificacionesController@Notificacion');
Route::get('/notificacionEspecifica','NotificacionesController@NotificacionEspecifica');
Route::get('/notificacionMasiva','NotificacionesController@NotificacionMasiva');
Route::post('/notificacionEspecifica','NotificacionesController@envioDeNotificacionEspecifica');
Route::post('/notificacionMasiva','NotificacionesController@envioDeNotificacionMasiva');
//controlador de Clientes
Route::get('/afiliarme','ClientesController@IngresarCliente');
Route::Post('/afiliarme','ClientesController@CrearCliente');



//RUTAS DEL CATALOGO
Route::get('/catalogos', 'CatalogoController@index');

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
