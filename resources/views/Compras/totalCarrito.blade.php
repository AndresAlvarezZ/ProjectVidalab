@extends('layouts.appPublicaEspecialGaleria')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="{{ asset('js/carritoPublico.js') }}?v=<?php echo(rand()); ?>"defer></script>
      <link href="{{ asset('css/carrito.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
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
                  <td><strong>Descuento</strong></td>
                </tr>

              </table>
            </div>
            <div class="card-foot">
              <form class="" id="tabla" action="#" method="get">
                 @csrf
              </form>
            </div>
            <div class="alert alert-info" role="alert">
              ¡Si desea comprar o solicitar a domicilio mediante la página deberá registrarse e iniciar sesión!
            </div>
          </div>
            <div class="card-foot">
              <a type="button" class="btn botonCatalogo" href="/catalogos">Volver al catalogo</a>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
@endsection
