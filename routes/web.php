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
