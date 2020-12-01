<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HUMACheck') }}</title>

    <!-- scripts -->
   <script src="{{ asset('js/app.js') }}"defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/homeAdmins') }}">
                    {{ config('HUMACheck', 'HUMACheck') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

<li class="lista">
  <a href="javascript:void(0)" class="dropbtn">ADMINISTRADORES</a>
  <div class="dropdown-content">
    <a  href="/administradores">Registro de Administradores</a>
    <a  href="/administradores/activos">Administradores Activos</a>
    <a  href="/administradores/inactivos">Administradores Inactivos</a>
  </div>
</li>

<li class="lista">
  <a href="javascript:void(0)" class="dropbtn">NOTIFICACIONES</a>
  <div class="dropdown-content">
    <a href="/notificaciones">Todos las Notificaciones</a>
    <a href="/notificacionEspecifica">Notificación Específica a Cliente</a>
    <a href="/notificacionMasiva">Notificación Masiva a Clientes</a>
    <a href="/notificacionEspecificaEmpresarial">Notificación Específica Empresarial</a>
    <a href="/notificacionMasivaEmpresarial">Notificación Masiva Empresarial</a>
  </div>
</li>

<li class="lista">
  <a href="javascript:void(0)" class="dropbtn">SERVICIOS</a>
  <div class="dropdown-content">
    <a  href="/pruebas">Análisis</a>
    <a  href="/paquetes">Paquetes</a>
    <a  href="/catalogosAdmins">Catálogo</a>
  </div>
</li>

<li class="lista">
  <a href="javascript:void(0)" class="dropbtn">EMPRESARIAL</a>
  <div class="dropdown-content">
    <a  href="/empresas">Empresas</a>
    <a  href="/citas">Citas Generales</a>
  </div>
</li>


<li class="lista">
  <a href="javascript:void(0)" class="dropbtn">SOLICITUDES A DOMICILIO</a>
  <div class="dropdown-content">
    <a href="/solicitudes">Todas las solicitudes</a>
    <a href="/solicitudes/enEspera">Solicitudes En Espera</a>
    <a href="/solicitudes/confirmadas">Solicitudes Confirmadas</a>
    <a href="/solicitudes/finalizadas">Solicitudes Finalizadas</a>
    <a href="/solicitudes/canceladas">Solicitudes Canceladas</a>
  </div>
</li>
<li class="lista">
  <a href="javascript:void(0)" class="dropbtn">COMPRAS EN LÍNEA</a>
  <div class="dropdown-content">
    <a  href="/verCompras">Pendientes</a>
    <a  href="/verComprasCanceladas">Canceladas</a>
  </div>
</li>
<li class="lista">
  <a href="/verFacturas" class="dropbtn">FACTURAS</a>
</li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @php
                        if($acceso ?? ''==true){
                        $name = auth()->administrador()->nombreDelUsuarioAdministrador;
                        }
                        @endphp
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ $name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
