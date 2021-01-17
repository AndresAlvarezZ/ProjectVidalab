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
        <a class="dropdown-item" href="/administradores"><span class="icon-users"> </span> Administradores</a>
        <a class="dropdown-item" href="/administradores/activos">- Adm. Activos</a>
        <a class="dropdown-item" href="/administradores/inactivos">- Adm. Inactivos</a>
        <a class="dropdown-item" href="/especialistas"><span class="icon-user-plus"> </span> Especialistas</a>
        <a class="dropdown-item" href="/especialistas/mostrar">- Perfiles de Especialistas</a>
        <a class="dropdown-item" href="/informacion"><span class="icon-info"> </span> Información VIDAlab</a>
        <a class="dropdown-item" href="/multimedia"><span class="icon-camera"> </span> Multimedia</a>
        <a class="dropdown-item" href="/pruebas"><span class="icon-lab"> </span> Análisis</a>
        <a class="dropdown-item" href="/paquetes">- Paquetes</a>
        <a class="dropdown-item" href="/catalogosAdmins">- Catálogo</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle btnMenu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="icon-profile"></span>CLIENTES</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/empresas"><span class="icon-office"> </span> Empresas</a>
        <a class="dropdown-item" href="/citas">- Citas Generales</a>
        <a class="dropdown-item" href="/clientes"><span class="icon-man-woman"> </span> Clientes</a>
        <a class="dropdown-item" href="/clientes/perfiles">- Perfiles de clientes</a>
        <a class="dropdown-item" href="/graficar/clientes">- Grafica de registro</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle btnMenu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="icon-price-tags"></span>COMPRAS Y PEDIDOS</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/solicitudes"><span class="icon-location"> </span> Servicio a Domicilio</a>
        <a class="dropdown-item" href="/solicitudes/enEspera">- En Espera</a>
        <a class="dropdown-item" href="/solicitudes/confirmadas">- Confirmadas</a>
        <a class="dropdown-item" href="/solicitudes/finalizadas">- Finalizadas</a>
        <a class="dropdown-item" href="/solicitudes/canceladas">- Canceladas</a>
        <a class="dropdown-item" href="/verFacturas"><span class="icon-cart"> </span> Facturas generadas</a>
        <a class="dropdown-item" href="/verCompras">- Fact. Pendientes</a>
        <a class="dropdown-item" href="/verComprasCanceladas">- Fact. Canceladas</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle btnMenu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="icon-envelop"></span>CORREOS</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/notificaciones">Todas las Notificaciones</a>
        <a class="dropdown-item" href="/notificacionEspecifica">Notificación Específica a Cliente</a>
        <a class="dropdown-item" href="/notificacionMasiva">Notificación Masiva a Clientes</a>
        <a class="dropdown-item" href="/notificacionEspecificaEmpresarial">Notificación Específica Empresarial</a>
        <a class="dropdown-item" href="/notificacionMasivaEmpresarial">Notificación Masiva Empresarial</a>
    </div>
</li>


