@extends('layouts.appPublicaEspecialGaleria')
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
				<h2 class="tituloDeSeccion"><span>N</span>uestra<span> V</span>ideo <span>G</span>alería</h2>
				<p>
					Acá podrá aprender sobre nuestra labor mediante videos capturados en laboratorio VIDAlab
				</p>
			</div>
			@if($videoDisponible == 1)	
				<div class="contenedor">
					@foreach($videos as $video)
						<div class="marco">
							<div class="imagen">
								<video src="/archivosMultimedia/{{$video->nombreDelArchivo}}" controls type="video/mp4">
								<video src="/archivosMultimedia/{{$video->nombreDelArchivo}}" controls type="video/ogg">
								Lo sentimos, si navegador no soporta este formato de video. Formato sugerido (mp4).
								</video>
							</div>
							<div class="text">
								<p>
									{{$video->descripcionDelArchivo}}
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