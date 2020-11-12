@extends('layouts.appAdmin')

@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <ul class="desplegable">
      <li class="lista">
        <a href="javascript:void(0)" class="dropbtn">Administradores</a>
        <div class="dropdown-content">
          <a  href="/administradores">Registro de Administradores</a>
          <a  href="/administradores/activos">Administradores Activos</a>
          <a  href="/administradores/inactivos">Administradores Inactivos</a>
        </div>
      </li>
      <li class="lista">
        <a href="javascript:void(0)" class="dropbtn">Nueva Notificación</a>
        <div class="dropdown-content">
          <a href="/notificacionEspecifica">Notificación Específica</a>
          <a href="/notificacionMasiva">Notificación Masiva</a>
        </div>
      </li>
      <li class="liDesplegable"><a class="desplegable1"  href="/empresas">Registro Empresas</a></li>
      <li class="liDesplegable"><a class="desplegable1"  href="/pruebas">Registro de Análisis</a></li>
      <li class="liDesplegable"><a class="desplegable1"  href="/paquetes">Registro de Paquetes</a></li>
      <li class="liDesplegable"><a class="desplegable1"  href="/citas">Registro de Citas</a></li>
      <li class="lista">
        <a href="javascript:void(0)" class="dropbtn">Registro de Solicitudes</a>
        <div class="dropdown-content">
          <a href="/solicitudes/enEspera">Solicitudes En Espera</a>
          <a href="/solicitudes/confirmadas">Solicitudes Confirmadas</a>
          <a href="/solicitudes/finalizadas">Solicitudes Finalizadas</a>
          <a href="/solicitudes/canceladas">Solicitudes Canceladas</a>
        </div>
      </li>
      <li class="liDesplegable"><a class="desplegable1"  href="/verCompras">Ver Compras</a></li>
      <li class="liDesplegable"><a class="desplegable1"  href="/catalogosAdmins">Catálogo</a></li>
    </ul>
    <link href="{{ asset('css/estilo.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row justify-center">
          <div class="col-md-8">
            <div class="card">
              <h1>Si el plan no funciona...cambia el plan pero nunca cambies la meta 💙 <br> Soon=> ✨</h1>
              @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <footer>
    <div class="container">
      <h3>este es el pie de la pagina</h3>
    </div>
  </footer>
</html>
@endsection
