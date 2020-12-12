@extends('layouts.appAdmin')

@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">    
    <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <title></title>
    <link href="{{ asset('css/estilo.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
  </head>

  <body>
    <div class="jumbotron jumbotron-fluid">

      @include('layouts.seccionesGenerales.carrusel')


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
  
  @include('layouts.seccionesGenerales.redesSociales')
  
</html>
@endsection
