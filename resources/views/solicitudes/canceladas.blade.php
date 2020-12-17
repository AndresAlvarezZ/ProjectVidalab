@extends('layouts.especial')
@extends('pop_up.modalSolicitudesYFacturas')
@section('content')

    <head>
        @include('layouts.seccionesGenerales.cssDeTablas')
        <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
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
                <div class="card-header titulo"><h4><b><center>REGISTRO DE SOLICITUDES EN ESTADO: CANCELADAS</center></b></h4></div>
                <div class="card-body">

                    <div class="alert alert-info" role="alert">
                        <center><b>Lista de clientes que han prescindido del servicio a domicilio</b><br>Lista de solicitudes ordenadas en cola según fecha y hora de registro en el sistema</center>
                    </div>

                    <table id="registros" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col"><center>Factura#</center></th>
                                <th scope="col"><center>Nombre del cliente</center></th>
                                <th scope="col"><center>Domicilio</center></th>
                                <th scope="col"><center>Teléfono</center></th>
                                <th scope="col"><center>Análisis Solicitados</center></th>
                                <th scope="col"><center>Costo del Servicio</center></th>
                                <th scope="col"><center>Acción</center></th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th scope="col"><center>Factura#</center></th>
                                <th scope="col"><center>Nombre del cliente</center></th>
                                <th scope="col"><center>Domicilio</center></th>
                                <th scope="col"><center>Teléfono</center></th>
                                <th scope="col"><center>Análisis Solicitados</center></th>
                                <th scope="col"><center>Costo del Servicio</center></th>
                                <th scope="col"><center>Acción</center></th>
                            </tr>
                        </tfoot>

                        <tbody>
                            @foreach($canceladas as $solicitud)
                                <tr>
                                    <td><center>{{$solicitud->idFactura}}</center></td>
                                    <td><center>{{$solicitud->nombreDelCiente}}</center></td>
                                    <td><center>{{$solicitud->domicilioDelCiente}}</center></td>
                                    <td><center>{{$solicitud->telefonoDelCliente}}</center></td>
                                    <td><center>{{$solicitud->analisisSolicitados}}</center></td>
                                    <td><center>{{$solicitud->costoDelServicio}}</center></td>
                                    <td><center><a href="#" class="btn btn-primary btnEnCancelada" data-toggle="tooltip" data-placement="right" title="Click para actualizar el estado de esta solicitud"><span class="icon-loop2"></span></a></center></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <script src="{{ asset('js/transacciones/procesarSolicitudesYFacturas.js') }}?v=<?php echo(rand()); ?>"defer></script>
                </div>
            </div>
            <br>
            <center><a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>
@endsection
