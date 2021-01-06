<head>
    <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menuAdministrador.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
</head>

<li><div class="logo"><span>HUMA</span><span class="fin" >check </span> 
<br><span class="conector">de </span> 
<a href="/homeAdmins"><span class="vida">VIDA</span><span class="lab">lab</span></a></div></li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle btnMenu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="icon-home"></span>VIDAlab</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/administradores">Registro de Administradores</a>
        <a class="dropdown-item" href="/administradores/activos">Administradores Activos</a>
        <a class="dropdown-item" href="/administradores/inactivos">Administradores Inactivos</a>
        <a class="dropdown-item" href="/especialistas">Registrar Especialistas</a>
        <a class="dropdown-item" href="/especialistas/mostrar">Ver perfiles de especialistas</a>
        <a class="dropdown-item" href="/informacion">Información VIDAlab</a>
        <a class="dropdown-item" href="/multimedia">Contenido multimedia</a>
        <a class="dropdown-item" href=""></a>
    </div>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle btnMenu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="icon-lab"></span>SERVICIOS</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/pruebas">Análisis</a>
        <a class="dropdown-item" href="/paquetes">Paquetes</a>
        <a class="dropdown-item" href="/catalogosAdmins">Catálogo</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle btnMenu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="icon-envelop"></span>CORREOS</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/notificaciones">Todos las Notificaciones</a>
        <a class="dropdown-item" href="/notificacionEspecifica">Notificación Específica a Cliente</a>
        <a class="dropdown-item" href="/notificacionMasiva">Notificación Masiva a Clientes</a>
        <a class="dropdown-item" href="/notificacionEspecificaEmpresarial">Notificación Específica Empresarial</a>
        <a class="dropdown-item" href="/notificacionMasivaEmpresarial">Notificación Masiva Empresarial</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle btnMenu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="icon-office"></span>EMPRESARIAL</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/empresas">Empresas</a>
        <a class="dropdown-item" href="/citas">Citas Generales</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle btnMenu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="icon-users"></span>CLIENTES</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/clientes">Registro de Clientes</a>
        <a class="dropdown-item" href="/clientes/perfiles">Perfiles de clientes</a>
        <a class="dropdown-item" href="/graficar/clientes">Grafica de registro</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle btnMenu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="icon-location"></span>A DOMICILIO</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/solicitudes">Todas las solicitudes</a>
        <a class="dropdown-item" href="/solicitudes/enEspera">Solicitudes En Espera</a>
        <a class="dropdown-item" href="/solicitudes/confirmadas">Solicitudes Confirmadas</a>
        <a class="dropdown-item" href="/solicitudes/finalizadas">Solicitudes Finalizadas</a>
        <a class="dropdown-item" href="/solicitudes/canceladas">Solicitudes Canceladas</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle btnMenu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="icon-cart"></span>COMPRAS EN LÍNEA</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/verCompras">Pendientes</a>
        <a class="dropdown-item" href="/verComprasCanceladas">Canceladas</a>
        <a class="dropdown-item" href="/verFacturas">Facturas generadas</a>
        <a class="dropdown-item" href=""></a>
        <a class="dropdown-item" href=""></a>
    </div>
</li>


