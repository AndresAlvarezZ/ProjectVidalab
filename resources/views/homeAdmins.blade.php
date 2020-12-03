@extends('layouts.appAdmin')

@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estiloDeRedesSociales.css">
    
    <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <title></title>
    <link href="{{ asset('css/estilo.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
  </head>

  <body>
    <div class="jumbotron jumbotron-fluid">

      <div id="siguienteImagen" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="10000">
            <img src="portadas/Portada1.png" class="d-block w-100" alt="Nombre del laboratorio">
          </div>
          <div class="carousel-item" data-interval="2000">
            <img src="portadas/Portada2.jpg" class="d-block w-100" alt="Bienvenida 1">
          </div>
          <div class="carousel-item">
            <img src="portadas/Portada3.jpg" class="d-block w-100" alt="Bienvanida 2">
          </div>
        </div>
        <a class="carousel-control-prev" href="#siguienteImagen" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#siguienteImagen" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>


      <div class="container">
        <div class="row justify-center">
          <div class="col-md-8">
            <div class="card">
              @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  
  <footer>
    <div class="redes-container">
      <ul>
        <li><a target="_blank" href="https://www.facebook.com/Vidalab-Liberia-421241938266820/" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
        <li><a target="_blank" href="https://api.whatsapp.com/send?phone=50687333475" class="whatsapp"><i class="fab fa-whatsapp"></i></a></li>
        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
      </ul>
    </div>
  </footer>
  
</html>
@endsection
