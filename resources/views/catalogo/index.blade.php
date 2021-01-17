@extends('layouts.appClienteEspecial')
@extends('pop_up.modal')
@section('content')
	<head>
  	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="{{ asset('js/localStorage.js') }}?v=<?php echo(rand()); ?>"defer></script>
		<link href="{{ asset('css/catalogo.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
	</head>

  	<body>
			<form class="" action="index.html" method="post">
	  	<a class='flotante' href='/compras/carrito'><span class="icon-cart"><label for="" id="articulos"></label> </span></a>
			</form>

		<section class="analisis" id="analisis">
			<div class="title">
				<h2 class="tituloDeSeccion"><span>L</span>ista de <span>A</span>nálisis</h2>
				<p>
					Listas de análisis/tests que realiza VIDAlab
				</p>
			</div>
			@if($pruebaDisponible == 1)
				<div class="contenedorDeAnalisis">

					@foreach($abecedario as $abc)
					<?php
						$validador = 1;
						foreach($pruebas as $prueba)

						if(Str::of($prueba->nombreDelAnalisis)->startsWith($abc))
						{
							if($validador == 1)
							{
						?>
								<div class="marcoDeAnalisis">
									<h4>{{$abc}}</h4>
									<div class="imagenDeAnalisis">
										<table id="registros" class="table table-hover">
											<thead class="thead-dark">
												<tr>
													<th scope="col"><center>Nombre</center></th>
													<th scope="col"><center>Acción a realizar</center></th>
												</tr>
											</thead>
											<tfoot class="thead-dark">
												</tr>
													<th scope="col"><center>Nombre</center></th>
													<th scope="col"><center>Acción a realizar</center></th>
												</tr>
											</tfoot>
											<tbody>
											@foreach($pruebas as $prueba)
												<?php

												if(Str::of($prueba->nombreDelAnalisis)->startsWith($abc))
												{
												?>
													<tr>
														<td><center>{{$prueba->nombreDelAnalisis}}</center></td>
														<td><center>
														<div class="title">
															<button type="button" class="btn boton" data-toggle="modal" data-target="#{{$prueba->codigoDelAnalisis}}"><span class="icon-eye"></span></button>
															<button id="carritoDeCompras" type="button" class="btn btn-primary" onclick="
																AgregarCarrito('{{$prueba->codigoDelAnalisis}}',
																'{{$prueba->nombreDelAnalisis}}',
																'{{$prueba->descripcionDelAnalisis}}',
																'{{$prueba->costoDelAnalisis}}',
																'{{$prueba->descuentoDelAnalisis}}',
																'{{$prueba->numeroDeMaquina}}','{{$identificadorDeAnalisis}}')" name="button"><span class="icon-cart"></span>
															</button>
														</div>
														</center></td>
													</tr>
												<?php } ?>
											@endforeach
											<?php
												$validador = 0;
											?>
											</tbody>
										</table>
									</div>
								</div>
						<?php
							}
						}
					?>
					@endforeach


				</div>
			@else
				<p class="noDisponible">
					Datos no disponibles
				</p>
          	@endif
		</section>



		<section class="paquete" id="paquete">
			<div class="title">
				<h2 class="tituloDeSeccion"><span>P</span>aquetes de <span>A</span>nálisis</h2>
				<p>
					Aproveche nuestras ofertas disponibles
				</p>
			</div>
			@if($pruebaDisponible == 1)
				<div class="contenedorDePaquete">
					@foreach($paquetes as $paquete)
						<div class="marcoDePaquete">
							<div class="imagenDePaquete">
								@if($paquete->imagenDelPaquete==null)
									<img src="/imgDePaquetes/imagenFija.png">
								@endif
								@if($paquete->imagenDelPaquete!=null)
									<img src="/imgDePaquetes/{{$paquete->imagenDelPaquete}}">
								@endif
							</div>
							<div class="text">
								<p>
									{{$paquete->nombreDelPaquete}}
								</p>
								<div class="title">
									<button type="button" class="btn boton" data-toggle="modal" data-target="#{{$paquete->codigoDelPaquete}}">Leer</button>
									<button id="carritoDeCompras" type="button" class="btn btn-primary" onclick="
										AgregarCarrito('{{$paquete->codigoDelPaquete}}',
										'{{$paquete->nombreDelPaquete}}',
										'{{$paquete->descripcionDelPaquete}}',
										'{{$paquete->costoDelPaquete}}',
										'no-aplica','','{{$identificadorDePaqete}}')" name="button"><span class="icon-cart"></span>
									</button>
								</div>
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
