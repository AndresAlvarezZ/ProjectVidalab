@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="es-ES">

<head>
    <title>Carrito de compras</title>
    <link href="{{ asset('css/estilo.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <script src="{{ asset('js/localStorage.js') }}?v=<?php echo(rand()); ?>"defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/sesion.js') }}?v=<?php echo(rand()); ?>"defer></script>

<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h1 class=>Carrito de Compras</h1>
        </div>
        <div class="card-body">
          <table id="tabla">
              <thead>

              </thead>
              <tbody>

              </tbody>
          </table>
        </div>
        <div class="card-foot">
          <div class="">
            <form class="" id="prueba" method="post">
            </form>
            <a href="/compras/FinalizarCompra" type="button" class="btn btn-primary">Procesar compra</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
@endsection
