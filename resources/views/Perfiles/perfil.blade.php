@extends('layouts.appClienteEspecial')
@include('Perfiles.cambioDeImagen')
@section('content')
<head>
		<meta charset="utf-8">
		<meta name="viewport" contenedor="width=device-width, initial-scale=1.0">
		<title>Cliente VIDAlab</title>
		<link href="{{ asset('css/perfil.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
		<link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
	</head>

	<body>
		<section class="miPerfil" id="miPerfil">
			<div class="contenedorMiPerfil">                    
        <div class="marco">  
          <h2 class="tituloDeSeccion"><span class="fin">Mi Perfil</span></h2>      
          <div class="imgPerfil">
            @if($cliente->imagenDelCliente==null)
              <img src="/imagenes/perfil.jpg">
            @endif
            @if($cliente->imagenDelCliente!=null)
              <img src="/imagenes/{{$cliente->imagenDelCliente}}">
            @endif
          </div>
          <button class="btnModal" type="button" data-toggle="modal" data-target="#agregarImagen"><span class="icon-camera"></span></button>
          <div class="texto">
            <p>
              <h4>Datos Personales</h4>
              <span class="datos">Nombre: </span>{{$cliente->nombreDelCliente}} {{$cliente->segundoNombreDelCliente}} {{$cliente->primerApellidoDelCliente}} {{$cliente->segundoApellidoDelCliente}}<br> 
              <span class="datos">Identificación: </span>{{$cliente->dniDelCliente}} <br> 
              <span class="datos">Fecha de Nacimiento: </span>{{$cliente->fechaDeNacimientoDelCliente}} <br> 
              <span class="datos">Edad: </span>{{$cliente->edadDelCliente}} <br></br> 
              <h4>Datos Adicionales</h4>
              <span class="datos">Teléfono: </span>{{$cliente->telefonoDelCliente}} <br> 
              <span class="datos">Correo electrónico: </span>{{$cliente->correoDelCliente}} <br> 
              <span class="datos">Domicilio: </span>{{$cliente->domicilioDelCliente}} <br></br>
              <h4>Datos Familiares</h4>
              <span class="datos">Número de hijos: </span>{{$cliente->numeroDehijosDelcliente}} <br> 
            </p>
          </div>
          <a class="boton" type="button" data-toggle="modal" data-target="#editarPerfil"><span class="icon-loop2"> </span> Actualizar mis datos</a>
			</div>
		</section>

    @include('layouts.seccionesGenerales.derechosDeAutor')
	</body>
@endsection