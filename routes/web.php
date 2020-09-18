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

Route::get('/home', 'AdministradorController@index')->name('home');

Route::get('/nuevoAdministrador', 'AdministradorController@nuevoAdministrador');
Route::get('/nuevoAdministrador/nuevoAdministrador', 'AdministradorController@nuevoAdministrador');
Route::post('/nuevoAdministrador/registro', 'AdministradorController@nuevoAdministradorCreate');
