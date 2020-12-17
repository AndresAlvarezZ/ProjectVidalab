@extends('layouts.especial')
@section('content')


    <head>
    @include('layouts.seccionesGenerales.cssDeTablas')
        <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
       
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

        <link href="{{ asset('css/menuAdministrador.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    </head>


    <body>
    @include('layouts.seccionesGenerales.css-jsDeModales')   
        <div class="container-fluid">
            <div class="card">
            <div class="card-header titulo"><h4><b><center>REGISTRO DE TODAS LAS SOLICITUDES A DOMICILIO</center></b></h4></div>
                <div class="card-body">

                    <ul class="list-group">
                        <table id="registros" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col"><center>Factura#</center></th>
                                    <th scope="col"><center>Nombre del cliente</center></th>
                                    <th scope="col"><center>Domicilio</center></th>
                                    <th scope="col"><center>Teléfono</center></th>
                                    <th scope="col"><center>Análisis Solicitados</center></th>
                                    <th scope="col"><center>Costo del Servicio</center></th>
                                    <th scope="col"><center>Estado</center></th>
                                </tr>
                            </thead>

                            <tfoot>
                                </tr>
                                    <th scope="col"><center>Factura#</center></th>
                                    <th scope="col"><center>Nombre del cliente</center></th>
                                    <th scope="col"><center>Domicilio</center></th>
                                    <th scope="col"><center>Teléfono</center></th>
                                    <th scope="col"><center>Análisis Solicitados</center></th>
                                    <th scope="col"><center>Costo del Servicio</center></th>
                                    <th scope="col"><center>Estado</center></th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach($solicitudes as $solicitud)
                                    <tr>
                                        <td><center>{{$solicitud->idFactura}}</center></td>
                                        <td><center>{{$solicitud->nombreDelCiente}}</center></td>
                                        <td><center>{{$solicitud->domicilioDelCiente}}</center></td>
                                        <td><center>{{$solicitud->telefonoDelCliente}}</center></td>
                                        <td><center>{{$solicitud->analisisSolicitados}}</center></td>
                                        <td><center>{{$solicitud->costoDelServicio}}</center></td>
                                        <td><center>{{$solicitud->estado}}</center></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </ul>
                </div>
            </div>
            <br>
            <center><a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>
@endsection
