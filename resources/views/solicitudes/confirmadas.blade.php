@extends('layouts.appAdmin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4><b><center>Registro de solicitudes confirmadas</center></b></h4></div>
                    <div class="card-body">
                        <div class="alert alert-info" role="alert">
                            <center>¡Lista de solicitudes ordenada de forma <i>ascendente, según fecha de regristro</i> en el sistema!</center>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <ul class="list-group">
                            <table class="table">
                            <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"><center>Factura#</center></th>
                                        <th scope="col"><center>Nombre del cliente</center></th>
                                        <th scope="col"><center>Domicilio</center></th>
                                        <th scope="col"><center>Teléfono</center></th>
                                        <th scope="col"><center>Análisis Solicitados</center></th>
                                        <th scope="col"><center>Costo del Servicio</center></th>
                                        <th scope="col"><center></center></th>
                                    </tr>
                                </thead>
                               <tbody>
                                    @foreach($confirmadas as $solicitud)
                                        <tr>
                                            <th scope="row"><center>{{ $solicitud->idFactura}}</center></th>
                                            <th scope="row"><center>{{ $solicitud->nombreDelCiente}}</center></th>
                                            <th scope="row"><center>{{ $solicitud->domicilioDelCiente}}</center></th>
                                            <th scope="row"><center>{{ $solicitud->telefonoDelCliente}}</center></th>
                                            <th scope="row"><center>{{ $solicitud->analisisSolicitados}}</center></th>
                                            <th scope="row"><center>{{ $solicitud->costoDelServicio}}</center></th>
                                            <td scope="row"><center><a href="/solicitudesConfirmadas/cambioDeEstado/{{$solicitud->idDeSolicitudConfirmada}}" class="btn btn-primary">Procesar Solicitud</a> </center></td>
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
