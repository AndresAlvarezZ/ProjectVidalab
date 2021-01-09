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
				<h2 class="tituloDeRegistro"><span>R</span>egistro de <span>C</span>ompras en <span>L</span>ínea: <span>C</span>anceladas</h2>
			</div>
            <div class="card-body">
                <table id="registros" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col"><center>Fecha</center></th>
                            <th scope="col"><center>Cédula</center></th>
                            <th scope="col"><center>Condición</center></th>
                            <th scope="col"><center>Total</center></th>
                            <th scope="col"><center>Acción a realizar</center></th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th scope="col"><center>Fecha</center></th>
                            <th scope="col"><center>Cédula</center></th>
                            <th scope="col"><center>Condición</center></th>
                            <th scope="col"><center>Total</center></th>
                            <th scope="col"><center>Acción a realizar</center></th>
                        </tr>
                    </tfoot>

                    <tbody>
                        @foreach($facturas as $factura)
                            <?php $fecha = date('d-m-Y',strtotime($factura->fecha)) ?>
                            <?php if ($factura->condicionDeCompra=='Cancelado'): ?>
                                <tr>
                                    <th scope="row"><center>{{ $fecha}}</center></th>
                                    <th scope="row"><center>{{ $factura->idCliente}}</center></th>
                                    <th scope="row"><center>{{ $factura->condicionDeCompra}}</center></th>
                                    <th scope="row"><center>{{ $factura->total}}</center></th>
                                    <td scope="row"><center><a href="/procesarFactura/{{$factura->idFactura}}" class="btn btn-primary btnCompras" data-placement="right" title="Click para actualizar factura a pendiente"><span class="icon-loop2"></span></a> </center></td>
                                </tr>
                            <?php endif; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
            <br>
            <center><a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>
@endsection
