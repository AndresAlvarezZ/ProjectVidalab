@extends('layouts.appAdmin')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/perfilesDeClientes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <script src="http://momentjs.com/downloads/moment.min.js"></script>

        <link href="{{ asset('css/menuAdministrador.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    </head>

    <body>
    <section class="profesionales" id="profesionales">
			<div class="title tituloProfesionales">
				<h2 class="tituloDeSeccion"><span>C</span>lientes <span>VIDA</span>lab</h2>
			</div>
			<div class="contenedor">
				@if($perfilDisponible == 1)
                    @foreach($perfiles as $perfil)
                        <div class="marco">
                        <div class="imagen">
                            @if($perfil->imagenDelCliente==null)
                            <img src="/perfilesDeClientes/imagenFija.jpg">
                            @endif
                            @if($perfil->imagenDelCliente!=null)
                            <img src="/perfilesDeClientes/{{$perfil->imagenDelCliente}}">
                            @endif
                        </div>
                        <div class="text">
                        <h3>{{ $perfil->nombreDelCliente}} {{$perfil->segundoNombreDelCliente}} {{$perfil->primerApellidoDelCliente}} {{$perfil->segundoApellidoDelCliente}}</h3>
                            <p>
                            <span class="icon-profile"> </span> {{ $perfil->dniDelCliente}} <br>
                            <span class="icon-calendar"> </span> {{ \Carbon\Carbon::parse( $perfil->fechaDeNacimientoDelCliente)->format('d/m/Y')}} <br>
                            <span class="icon-info"> </span><?php $date1 = new DateTime('now');$date2 = new DateTime("$perfil->fechaDeNacimientoDelCliente");$diff = $date1->diff($date2);echo $diff->y .' años '; ?><br>
                            <span class="icon-man-woman"> </span> {{ $perfil->numeroDehijosDelcliente}} hijo(s)<br>
                            <span class="icon-envelop"> </span> {{ $perfil->correoDelCliente}} <br>
                            <span class="icon-history"> </span> Cliente desde {{ \Carbon\Carbon::parse( $perfil->created_at)->format('m/Y')}}
                            </p>
                        </div>
                            </div>
                    @endforeach
                @else
                    <p>
                        Datos no disponibles
                    </p>
                @endif
			</div>
		</section>
    </body>
</html>
@endsection
