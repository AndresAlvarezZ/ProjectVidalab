@extends('layouts.especial')
@section('content')

    <head>
        @include('layouts.seccionesGenerales.cssDeTablas')
        <link href="{{ asset('css/menuAdministrador.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    </head>

    <body>
        @include('layouts.seccionesGenerales.css-jsDeModales')   
        <div class="container-fluid">
            <div class="title">
				<h2 class="tituloDeRegistro"><span>R</span>egistro de <span>C</span>ompras en <span>L</span>ínea</h2>
			</div>
            <div class="card-body">
                <table id="registros" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col"><center>Fecha</center></th>
                            <th scope="col"><center>Cédula</center></th>
                            <th scope="col"><center>Condición</center></th>
                            <th scope="col"><center>Total</center></th>
                            <th scope="col"><center>Acción a Realizar</center></th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th scope="col"><center>Fecha</center></th>
                            <th scope="col"><center>Cédula</center></th>
                            <th scope="col"><center>Condición</center></th>
                            <th scope="col"><center>Total</center></th>
                            <th scope="col"><center>Acción a Realizar</center></th>
                        </tr>
                    </tfoot>

                    <tbody>
                        @foreach($facturas as $factura)
                            <?php $fecha = date('d-m-Y',strtotime($factura->fecha)) ?>
                            <?php if ($factura->condicionDeCompra=='Pendiente'): ?>
                                <tr>
                                    <td><center>{{$fecha}}</center></td>
                                    <td><center>{{$factura->idCliente}}</center></td>
                                    <td><center>{{$factura->condicionDeCompra}}</center></td>
                                    <td><center>{{$factura->total}}</center></td>
                                    <td><center><a href="/procesarFactura/{{$factura->idFactura}}" class="btn btn-primary btnCompras" data-placement="right" title="Click para cancelar factura"><span class="icon-loop2"></span></a></center></td>
                                </tr>
                            <?php endif; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br>
            <center><a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>
@endsection
