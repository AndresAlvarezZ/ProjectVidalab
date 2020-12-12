@extends('layouts.appCliente')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <link href="{{ asset('css/estiloDeCliente.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">    
  </head>

  <body>

  <a class='flotante' href='#'><span class="icon-home"></span></a>

    <section class="inicio" id="inicio" >
      <div class="contenedor">
        <h2>¡Elige VIDAlab!</h2>
        <p>
          @if($aspectoDisponible == 1)
            {{$aspecto->lema}}
          @else
            Dato no disponible
          @endif
        </p>
        <p>
          @if($aspectoDisponible == 1)
            Horario de atención regular: <br>{{$aspecto->horarioRegular}}<br>
            @if($aspecto->horarioEspecial != 'N/A')
              Horario de atención especial: <br>{{$aspecto->horarioEspecial}}
            @endif
          @else
            Dato no disponible
          @endif
        </p>
      </div>
    </section>


		<section class="nosotros" id="nosotros">
			<div class="fila">
				<div class="columna">
					<h2 class="tituloDeSeccion"><span>N</span>uestra<span> H</span>istoria</h2><br>
					<p>
            @if($aspectoDisponible == 1)
              {{$aspecto->historia}}
            @else
              Dato no disponible
            @endif
					</p>
				</div>
				<div class="columna">
					<div class="imagen">
						<img src="imgHomeClientes/historia.jpeg"> <!--DINAMISMO EN LAS IMÁGENES-->
					</div>
				</div>
			</div>
			<div class="fila">
				<div class="columna">
					<h2 class="tituloDeSeccion"><span>M</span>isión</h2><br>
					<p>
            @if($aspectoDisponible == 1)
              {{$aspecto->mision}}
            @else
              Dato no disponible
            @endif
					</p>
				</div>
				<div class="columna">
					<div class="imagen">
						<img src="imgHomeClientes/mision.jpeg">
					</div>
				</div>
			</div>
			<div class="fila">
				<div class="columna">
					<div class="imagen">
						<img src="imgHomeClientes/vision.jpeg">
					</div>
				</div>
				<div class="columna">
					<h2 class="tituloDeSeccion"><span>V</span>isión</h2><br>
					<p>
            @if($aspectoDisponible == 1)
              {{$aspecto->vision}}
            @else
              Dato no disponible
            @endif
					</p>
				</div>
			</div>
			<div class="fila">
				<div class="columna">
					<div class="imagen">
						<img src="imgHomeClientes/valores.jpeg">
					</div>
				</div>
				<div class="columna">
					<h2 class="tituloDeSeccion"><span>V</span>alores</h2><br>
					<p>
            @if($aspectoDisponible == 1)
              {{$aspecto->valores}}
            @else
              Dato no disponible
            @endif 
					</p>
				</div>
			</div>
			<div class="fila">
				<div class="columna">
					<h2 class="tituloDeSeccion"><span>C</span>ompromiso</h2><br>
					<p>
            @if($aspectoDisponible == 1)
              {{$aspecto->compromiso}}
            @else
              Dato no disponible
            @endif
					</p>
				</div>
				<div class="columna">
					<div class="imagen">
						<img src="imgHomeClientes/compromiso.jpeg">
					</div>
				</div>
			</div>
    </section>
    

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
                  <img src="/perfilesDeEspecialistas/perfil.jpg">
                @endif
                @if($especialista->imagenDelEspecialista!=null)
                  <img src="/perfilesDeEspecialistas/{{$especialista->imagenDelEspecialista}}">
                @endif
              </div>
              <div class="text">
                <p>
                <span class="icon-home"> </span>Sede, {{$especialista->sedeDelEspecialista}} <br>
                <span class="icon-envelop"> </span>{{$especialista->correoDelEspecialista}} <br>
                <span class="icon-folder-plus"> </span>{{$especialista->especialidadesDelEspecialista}}
                </p>
                <h3>{{$especialista->nombreDelEspecialista}} {{$especialista->segundoNombreDelEspecialista}} {{$especialista->primerApellidoDelEspecialista}} {{$especialista->segundoApellidoDelEspecialista}}</h3>
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

		<section class="catalogo" id="catalogo">
			<div class="title">
				<h2 class="tituloDeSeccion"><span>C</span>atálogo de <span>A</span>nálisis y <span>P</span>aquetes</h2>
				<p>
					<br>
					En esta sección podrá encontrar la lista de análisis que se realizan en VIDAlab, así como nuestras ofertas especiales
				</p>
			</div>
			<div class="contenedor">
				<div class="marco">
					<div class="imagen">
						<img src="imgHomeClientes/oferta1.jpg">
					</div>
					<div class="text">
          </div>
					<div class="title">
				    <a href="/catalogos" class="boton">Ver todo</a>
			    </div>
				</div>
      </div>
    </section>

  
    <section class="galeriaDeFotos" id="galeriaDeFotos">
    
      <div class="title">
				<h2 class="tituloDeSeccion"><span>G</span>alería de <span> F</span>otos</h2>
				<p class="introduccion">
					Las siguientes son fotografías tomadas en el laboratorio a modo de muestra y aprendizaje sobre nuestro trabajo 
        </p>
			</div>
      <div class="contenedor">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              @foreach($fotos as $foto)
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              @endforeach
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="archivosMultimedia/Portada1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"></div>
              </div>
              @foreach($fotos as $foto)
              <div class="carousel-item">
                <img src="archivosMultimedia/{{$foto->nombreDelArchivo}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <p>{{$foto->descripcionDelArchivo}}</p>
                </div>
              </div>
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Siguiente</span>
            </a>
          </div>
          <div class="title">
            <a href="/galeriaDeFotos" class="boton">Ver fotos en cuadrícula</a>
          </div>
          
        <!--VIDEOS-->

          <div class="title">
            <a href="/galeriaDeVideos" class="boton">Ver videos en cuadrícula</a>
          </div>
        <!--FIN VIDEOS-->      
             
      </div>
    </section>


    <section class="contactos" id="contactos">
			<div class="title">
				<h2 class="tituloDeSeccion"><span>C</span>ontactos</h2>
				<br></br>
				<p>
          <br></br>
          <span class="icon-phone"> </span>
          @if($aspectoDisponible == 1)
            {{$aspecto->telefono}}
          @else
            Dato no disponible
          @endif
					<br></br>
          <span class="icon-envelop"> </span>
          @if($aspectoDisponible == 1)
            {{$aspecto->correoElectronico}}
          @else
            Dato no disponible
          @endif
					<br></br>
          <span class="icon-facebook2"> </span>
          @if($aspectoDisponible == 1)
            {{$aspecto->facebook}}
          @else
            Dato no disponible
          @endif
					<br></br>
          <span class="icon-instagram"> </span>
          @if($aspectoDisponible == 1)
            {{$aspecto->instagram}}
          @else
            Dato no disponible
          @endif
					<br></br>
          <span class="icon-whatsapp"> </span>
          @if($aspectoDisponible == 1)
            {{$aspecto->whatsapp}}
          @else
            Dato no disponible
          @endif
					<br></br>
				</p>
			</div>
    </section>
  
  </body>

  @include('layouts.seccionesGenerales.redesSociales')

  @include('layouts.seccionesGenerales.derechosDeAutor')
  
</html>
@endsection





