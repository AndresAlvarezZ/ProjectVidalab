@extends('layouts.appCliente')

@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{ asset('css/estiloDeRedesSociales.css') }}" rel="stylesheet">
    <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
  </head>

  <body>
    <p></p>
    @include('layouts.carrusel')
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






