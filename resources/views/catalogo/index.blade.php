@extends('layouts.app')
@extends('pop_up.modal')
@section('content')
    


	<div class="container">

        <div class="card-header">
           <h3><b><center>Catálogo de Análisis</center></b></h3>
        </div>
        <link rel="stylesheet" type="text/css" href="css/estiloDelCatalogo.css">



        @foreach($pruebas as $prueba)
            <div class="card">
                <img src="imagenes/naturaleza.jpg">
                <br>
                <h5><b>{{$prueba->nombreDelAnalisis}}</b></h5>
                <p>Costo: ₡ {{$prueba->costoDelAnalisis}}</p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#LeerMasDelAnalisis">Leer más</button>
            
            </div>
        @endforeach

        
        <div class="card-header">
           <h3><b><center>Catálogo de Ofertas de Paquetes de Análisis</center></b></h3>
        </div>
            @foreach($paquetes as $paquete)
                <div class="card">
                    <img src="imagenes/musica.jpg">
                    <br>
                    <h5><b>{{$paquete->nombreDelPaquete}}</b></h5>
                    <p>Costo: ₡ {{$paquete->costoDelPaquete}}</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#LeerMasDelPaquete">Leer más</button>
            @endforeach
	</div>

@endsection