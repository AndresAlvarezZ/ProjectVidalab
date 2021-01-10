@extends('layouts.especial')
@extends('pop_up.modalSolicitudesYFacturas')
@section('content')

    <head>
        @include('layouts.seccionesGenerales.cssDeTablas')
    </head>

    <body>
        @include('layouts.seccionesGenerales.css-jsDeModales')   
        <div class="container-fluid">
            <div class="title">
				<h2 class="tituloDeRegistro"><span>R</span>egistro de <span>S</span>olicitudes <span>C</span>anceladas</h2>
			</div>
            <div class="card-body">

                <div class="alert alert-info" role="alert">
                    <center><b>Lista de clientes que han prescindido del servicio a domicilio</b><br>Lista de solicitudes ordenadas en cola según fecha y hora de registro en el sistema</center>
                </div>

                <table id="registros" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col"><center>Factura #</center></th>
                            <th scope="col"><center>Nombre del Cliente</center></th>
                            <th scope="col"><center>Domicilio</center></th>
                            <th scope="col"><center>Teléfono</center></th>
                            <th scope="col"><center>Análisis Solicitados</center></th>
                            <th scope="col"><center>Costo del Servicio</center></th>
                            <th scope="col"><center>Acción a Realizar</center></th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th scope="col"><center>Factura #</center></th>
                            <th scope="col"><center>Nombre del Cliente</center></th>
                            <th scope="col"><center>Domicilio</center></th>
                            <th scope="col"><center>Teléfono</center></th>
                            <th scope="col"><center>Análisis Solicitados</center></th>
                            <th scope="col"><center>Costo del Servicio</center></th>
                            <th scope="col"><center>Acción a Realizar</center></th>
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
            <br>
            <center><a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>
@endsection
