
	@extends('layouts.app')
@extends('pop_up.modal')
@section('content')


	<div class="container">

        <div class="card-header">
           <h3><b><center>Catálogo de Análisis</center></b></h3>
        </div>
        <link rel="stylesheet" type="text/css" href="css/estiloDelCatalogo.css">
				<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		    <script src="{{ asset('js/localStorage.js') }}"defer></script>


        @foreach($pruebas as $prueba)
            <div class="card">
                <img src="imagenes/microbiologia2.jpg">
                <br>
                <h5><b>{{$prueba->nombreDelAnalisis}}</b></h5>
                <p>Costo: ₡ {{$prueba->costoDelAnalisis}}</p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$prueba->codigoDelAnalisis}}">Leer más</button>
								<button id="carritoDeCompras" type="button" class="btn btn-primary" onclick="
								AgregarCarrito('{{$prueba->codigoDelAnalisis}}',
								'{{$prueba->nombreDelAnalisis}}',
								'{{$prueba->descripcionDelAnalisis}}',
								'{{$prueba->costoDelAnalisis}}',
								'{{$prueba->descuentoDelAnalisis}}',
								'{{$prueba->numeroDeMaquina}}','{{$identificadorDeAnalisis}}')" name="button">Agregar al carrito</button>

            </div>
        @endforeach
<a class='flotante' href='/compras/carrito'><img src='imagenes/vida.jpg' border="0"/>Ir al carrito</a>

        <div class="card-header">
           <h3><b><center>Catálogo de Ofertas de Paquetes de Análisis</center></b></h3>
        </div>
            @foreach($paquetes as $paquete)
                <div class="card">
                    <img src="imagenes/microbiologia.jpg">
                    <br>
                    <h5><b>{{$paquete->nombreDelPaquete}}</b></h5>
                    <p>Costo: ₡ {{$paquete->costoDelPaquete}}</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$paquete->codigoDelPaquete}}">Leer más</button>
										<button id="carritoDeCompras" type="button" class="btn btn-primary" onclick="
										AgregarCarrito('{{$paquete->codigoDelPaquete}}',
										'{{$paquete->nombreDelPaquete}}',
										'{{$paquete->descripcionDelPaquete}}',
										'{{$paquete->costoDelPaquete}}',
										'no-aplica','{{$identificadorDePaqete}}')" name="button">Agregar al carrito</button>
								</div>
						@endforeach

@endsection
