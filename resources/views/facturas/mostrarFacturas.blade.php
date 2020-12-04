@extends('layouts.especial')
@section('content')

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"><script src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
        <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <script src="{{ asset('js/buscador/buscadorDeRegistros.js') }}"defer></script>
        
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    </head>

    <body>
        <div class="container-fluid">
            <div class="card-header"><h4><b><center>REGISTRO DE COMPRAS EN LÍNEA</center></b></h4></div>
                <div class="card-body">
                    <ul class="list-group">
                        <table id="registros" class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"><center>Fecha</center></th>
                                    <th scope="col"><center>Cédula</center></th>
                                    <th scope="col"><center>Condición</center></th>
                                    <th scope="col"><center>Total</center></th>
                                    <th scope="col"><center>Acción a realizar</center></th>
                                </tr>
                            </thead>

                            <tfoot class="thead-dark">
                                </tr>
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
                                    <?php if ($factura->condicionDeCompra=='Pendiente'): ?>
                                      <tr>
                                          <td><center>{{ $fecha}}</center></td>
                                          <td><center>{{ $factura->idCliente}}</center></td>
                                          <td><center>{{ $factura->condicionDeCompra}}</center></td>
                                          <td><center>{{ $factura->total}}</center></td>
                                          <td><center><a href="/procesarFactura/{{$factura->idFactura}}" class="btn btn-primary btnCompras"><span class="icon-loop2"></span>Procesar compra</a> </center></td>
                                      </tr>
                                    <?php endif; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </ul>
                </div>
            </div>
            <br>
            <center><a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
    </body>
@endsection
