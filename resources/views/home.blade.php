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
    @if(session('compra'))
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('js/compra.js') }}?v=<?php echo(rand()); ?>"defer></script>
    @endif
    @if(session('solicitud'))
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('js/solicitud.js') }}?v=<?php echo(rand()); ?>"defer></script>
    @endif
  <a class='flotante' href='#'><span class="icon-home"></span></a>

  @include('layouts.seccionesGenerales.cuerpoDelSitioWeb')

  </body>

  @include('layouts.seccionesGenerales.redesSociales')

  @include('layouts.seccionesGenerales.derechosDeAutor')

</html>
@endsection
