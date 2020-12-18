
	@extends('layouts.appAdmin')
@section('content')
  <head>
    <link href="{{ asset('css/galeria.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <link href="{{ asset('css/menuAdministrador.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
  </head>

  <body>
    <section class="galeria" id="galeria">
			<div class="title">
				<h2 class="tituloDeSeccion"><span>F</span>oto <span>G</span>alería</h2>
			</div>

			@if($fotoDisponible == 1)
				<div class="contenedor">
					@foreach($fotos as $foto)
						<div class="marco">
							<div class="imagen">
								<img src="/archivosMultimedia/{{$foto->nombreDelArchivo}}">
							</div>
							<div class="text">
								<p>
									{{$foto->descripcionDelArchivo}}
									<br>
								</p>
								<h5><span class="vida"><span>VIDA</span><span class="lab">lab</span></h5>
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

		<section class="galeria" id="galeria">
			<div class="title">
				<h2 class="tituloDeSeccion">V</span>ideo <span>G</span>alería</h2>
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
@endsection
