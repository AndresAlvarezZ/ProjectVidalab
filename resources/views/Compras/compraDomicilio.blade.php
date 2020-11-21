@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="{{ asset('js/finalizarPedido.js') }}?v=<?php echo(rand()); ?>"defer></script>
      <link href="{{ asset('css/domicilio.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <title>Procesando compra...</title>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h1 class=>Procesando Compra</h1>
            </div>
            <div class="card-body">
              @if(session('status'))
              <span class="alert alert-danger" role="alert">
                {{session('status')}}
              </span>
              @endif

              <table id="Articulos">
                <tr>
                  <td><strong>Artículo</strong></td>
                  <td><strong>Precio</strong></td>
                </tr>

              </table>
            </div>
            <div class="card-foot">
              <form class="" id="tabla" action="/compras/domicilioFactura" method="get">
                 @csrf
              </form>
            </div>
            <div class="card-foot">
              <a type="button" class="btn btn-primary" href="/catalogos">Volver al catalogo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
@endsection
