@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <title>Carrito de compras</title>
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h1 class=>Estas son tus facturas</h1>
        </div>
        <div class="card-body">
          <div class="mostarFacturas">
          <table>
            <?php $indiceFactura = 1; ?>
            <?php foreach ($facturas as $factura): ?>
              @php
              $fecha = date('d-m-Y', strtotime($factura->fecha))
              @endphp
              <tr>
                <td id="factura"><strong>Factura #{{$indiceFactura}}</strong></td>
                <td id="factura"></td>
              </tr>
              <tr>
                <td id="sinRaya"><strong>Fecha</td></strong>
                <td id="sinRaya">{{$fecha}}</td>
              </tr>
              <tr>
                <td id="sinRaya"><strong>Cédula</td></strong>
                <td id="sinRaya">{{$factura->idCliente}}</td>
              </tr>
              <tr>
                <td id="sinRaya"><strong>Condicion</strong></td>
                <td id="sinRaya">{{$factura->condicionDeCompra}}</td>
              </tr>
              <tr>
                <td id="articulos"><strong>Artículos</strong></td>
              </tr>
              <?php
              $indice =1;
              ?>
              <?php foreach ($compras as $articulos): ?>
                <?php if ($articulos->fecha == $factura->fecha): ?>
                  <tr>
                    <td id="sinRaya">{{$indice}}-{{$articulos->nombre}}</td>
                  </tr>
                  <?php $indice++; ?>
                <?php endif; ?>
              <?php endforeach; ?>
              <tr>
                <td id="sinRaya"><strong>Subtotal</strong></td>
                <td id="sinRaya">{{$factura->total+$factura->descuento}}</td>
              </tr>
              <tr>
                <td id="sinRaya"><strong>Descuento</strong></td>
                <td id="sinRaya">{{$factura->descuento}}</td>
              </tr>
              <tr>
                <td id="sinRaya"><strong>Total</strong></td>
                @php
                $total = $factura->total-$factura->descuento
                @endphp
                <td id="sinRaya">{{$factura->total}}</td>
              </tr>
              <?php $indiceFactura++; ?>
            <?php endforeach; ?>
          </table>
        </div>
        <div class="card-foot">
          <div class="">
            <form class="" id="prueba" method="post">
            </form>
            <a href="/home" type="button" class="btn btn-primary">Entendido</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
@endsection
