@extends('layouts.appAdmin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4><b><center>Registro de Compras</center></b></h4></div>
                    <div class="card-body">
                        <div class="alert alert-info" role="alert">
                            <center>¡Lista de compras ordenada de forma <i>ascendente, según fecha de regristro</i> en el sistema!</center>
                        </div>
                        <ul class="list-group">
                            <table class="table">
                            <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"><center>Fecha</center></th>
                                        <th scope="col"><center>Cédula</center></th>
                                        <th scope="col"><center>Condición</center></th>
                                        <th scope="col"><center>Total</center></th>
                                        <th scope="col"><center></center></th>
                                    </tr>
                                </thead>
                               <tbody>
                                    @foreach($facturas as $factura)
                                    <?php $fecha = date('d-m-Y',strtotime($factura->fecha)) ?>
                                        <tr>
                                            <th scope="row"><center>{{ $fecha}}</center></th>
                                            <th scope="row"><center>{{ $factura->idCliente}}</center></th>
                                            <th scope="row"><center>{{ $factura->condicionDeCompra}}</center></th>
                                            <th scope="row"><center>{{ $factura->total}}</center></th>
                                            <td scope="row"><center><a href="/procesarFactura/{{$factura->idFactura}}" class="btn btn-primary">Procesar compra</a> </center></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <center><a href="/homeAdmins" class="btn btn-danger">Ir al menú principal</a></center>
    </div>
</div>
@endsection
