    @if($fondosDisponibles == 1)
      <section class="inicio" id="inicio" style= "background: url('/imgHomeClientes/{{$fondo->imagenDeBienvenida}}'); background-size: cover;">
    @else
      <section class="inicio" id="inicio" style= "background: url('/imgHomeClientes/P1.jpeg'); background-size: cover;">
    @endif

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
            @if($fondosDisponibles == 1)
						  <img src="/imgHomeClientes/{{$fondo->imagenDeHistoria}}">
            @else
              <img src="imgHomeClientes/P2.jpeg">
            @endif
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
            @if($fondosDisponibles == 1)
						  <img src="/imgHomeClientes/{{$fondo->imagenDeMision}}">
            @else
              <img src="imgHomeClientes/P3.jpeg">
            @endif
					</div>
				</div>
			</div>
			<div class="fila">
				<div class="columna">
					<div class="imagen">
            @if($fondosDisponibles == 1)
						  <img src="/imgHomeClientes/{{$fondo->imagenDeVision}}">
            @else
              <img src="imgHomeClientes/P4.jpeg">
            @endif
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
            @if($fondosDisponibles == 1)
						  <img src="/imgHomeClientes/{{$fondo->imagenDeValores}}">
            @else
              <img src="imgHomeClientes/P5.jpeg">
            @endif
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
            @if($fondosDisponibles == 1)
              <img src="/imgHomeClientes/{{$fondo->imagenDeCompromiso}}">
            @else
              <img src="imgHomeClientes/P6.jpeg">
            @endif
					</div>
				</div>
			</div>
    </section>


    @if($fondosDisponibles == 1)
      <section class="profesionales" id="profesionales" style= "background: url('/imgHomeClientes/{{$fondo->imagenDeProfesionales}}'); background-size: cover;">
    @else
      <section class="profesionales" id="profesionales" style= "background: url('/imgHomeClientes/P7.jpg'); background-size: cover;">
    @endif
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
              <h3>{{$especialista->nombreDelEspecialista}} {{$especialista->segundoNombreDelEspecialista}} {{$especialista->primerApellidoDelEspecialista}} {{$especialista->segundoApellidoDelEspecialista}}</h3>
                <p>
                <span class="icon-home"> </span> Sede, {{$especialista->sedeDelEspecialista}} <br>
                <span class="icon-envelop"> </span> {{$especialista->correoDelEspecialista}} <br>
                <span class="icon-folder-plus"> </span> {{$especialista->especialidadesDelEspecialista}}
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

		<section class="catalogo" id="catalogo">
			<div class="title">
				<h2 class="tituloDeSeccion"><span>C</span>atálogo de <span>A</span>nálisis y <span>P</span>aquetes</h2>
				<p>
					<br>
					En esta sección podrá encontrar la lista de análisis que se realizan en VIDAlab, así como nuestras ofertas especiales
				</p>
			</div>
			<div class="contenedor">

            @if($numeroDeOfertas >= 6)
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="width:850px; heigh:850px;">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  @foreach($ultimasCincoOfertas as $oferta)
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  @endforeach
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="imgDePaquetes/imagenFija.png" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                      <p>De click en "Ver todo" para informarse a detalle de todas nuestras ofertas</p>
                    </div>
                  </div>
                  @foreach($ultimasCincoOfertas as $oferta)
                  <div class="carousel-item">
                    @if($oferta->imagenDelPaquete==null)
                      <img src="imgDePaquetes/imagenFija.png" class="d-block w-100">
                    @endif
                    @if($oferta->imagenDelPaquete!=null)
                      <img src="imgDePaquetes/{{$oferta->imagenDelPaquete}}" class="d-block w-100">
                    @endif
                    <div class="carousel-caption d-none d-md-block">
                      <p>{{$oferta->nombreDelPaquete}}</p>
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
            @else
              <div class="marco">
                <div class="imagen">
                  <img src="imgDePaquetes/imagenFija.png">
                </div>
              </div>
            @endif
					</div>
          @guest
          <div class="title">
            <a href="/catalogo/publico" class="boton">Ver todo</a>
          </div>
          @else
          <div class="title">
            <a href="/catalogos" class="boton">Ver todo</a>
          </div>
          @endguest

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
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="width:850px; heigh:850px;">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              @foreach($fotos as $foto)
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              @endforeach
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="archivosMultimedia/imagenFija.jpeg" class="d-block w-100" alt="...">
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
            <a href="/galeria/Publica/DeFotos" class="boton">Ver fotos en cuadrícula</a>
          </div>

        <!--VIDEOS-->

          <div class="title">
            <a href="/galeria/Publica/DeVideos" class="boton">Ver videos en cuadrícula</a>
          </div>
        <!--FIN VIDEOS-->

      </div>
    </section>


    @if($fondosDisponibles == 1)
      <section class="contactos" id="contactos" style= "background: url('/imgHomeClientes/{{$fondo->imagenDeContactos}}'); background-size: cover;">
    @else
      <section class="contactos" id="contactos" style= "background: url('/imgHomeClientes/P8.jpg'); background-size: cover;">
    @endif
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
         <!-- <span class="icon-instagram"> </span>
          @if($aspectoDisponible == 1)
            {{$aspecto->instagram}}
          @else
            Dato no disponible
          @endif
					<br></br> -->
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
