@extends('layouts.appAdmin')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Perfiles</title>
        <link href="{{ asset('css/estiloDeCliente.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">

        <link href="{{ asset('css/menuAdministrador.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    </head>

    <body>
    <section class="profesionales" id="profesionales">
			<div class="title tituloProfesionales">
				<h2 class="tituloDeSeccion"><span>P</span>rofesionales</h2>
				<p>
					Nuestro laboratorio VIDAlab cuenta con especialistas en el área.
				</p>
			</div>
			<div class="contenedor">
				@if($especialistaDisponible == 1)
                    @foreach($especialistas as $especialista)
                        <div class="marco">
                        <div class="imagen">
                            @if($especialista->imagenDelEspecialista==null)
                            <img src="/perfilesDeEspecialistas/imagenFija.jpg">
                            @endif
                            @if($especialista->imagenDelEspecialista!=null)
                            <img src="/perfilesDeEspecialistas/{{$especialista->imagenDelEspecialista}}">
                            @endif
                        </div>
                        <div class="text">
                            <p>
                            <span class="icon-home"> </span>Sede, {{ $especialista->sedeDelEspecialista}} <br>
                            <span class="icon-envelop"> </span>{{ $especialista->correoDelEspecialista}} <br>
                            <span class="icon-folder-plus"> </span>{{ $especialista->especialidadesDelEspecialista}}
                            </p>
                            <h3>{{ $especialista->nombreDelEspecialista}} {{$especialista->segundoNombreDelEspecialista}} {{$especialista->primerApellidoDelEspecialista}} {{$especialista->segundoApellidoDelEspecialista}}</h3>
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
