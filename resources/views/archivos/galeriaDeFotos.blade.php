@extends('layouts.appClienteEspecialGaleria')
@section('content')
	<head>
  	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link href="{{ asset('css/galeria.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">

	</head>

  	<body>

		<section class="galeria" id="galeria">
			<div class="title">
				<h2 class="tituloDeSeccion"><span>N</span>uestra<span> F</span>oto <span>G</span>alería</h2>
				<p>
					Acá podrá aprender sobre nuestra labor mediante fotografías tomadas en laboratorio VIDAlab
				</p>
			</div>

			@if($fotoDisponible == 1)
				<div class="contenedor">
					@foreach($fotos as $foto)
						<div class="marco">
							<div class="imagen">
								<img src="/imagenes/{{$foto->nombreDelArchivo}}">
							</div>
							<div class="text">
								<p>
									{{$foto->descripcionDelArchivo}}
									<br>
								</p>
								<h5><span class="vida">VIDA</span><span class="lab">lab</span></h5>
							</div>
						</div>
					@endforeach
				</div>
			@else
				<p class="noDisponible">
					Datos no disponibles
				</p>
          	@endif
		</section>

  	</body>

	@include('layouts.seccionesGenerales.derechosDeAutor')

@endsection
