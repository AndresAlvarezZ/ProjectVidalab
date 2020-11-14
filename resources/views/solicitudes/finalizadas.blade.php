@extends('layouts.especial')
@section('content')
    
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"><script src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="{{ asset('js/buscador/buscadorDeRegistros.js') }}?v=<?php echo(rand()); ?>"defer></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    </head>

    <body>
        <div class="container-fluid">
            <div class="card-header"><h4><b><center>Registro  de Solicitudes en estado: Finalizadas</center></b></h4></div>
                <div class="card-body">

                    <div class="alert alert-info" role="alert">
                        <center>¡Lista de solicitudes ordenadas en cola!</center>
                    </div>

                    <ul class="list-group">
                        <table id="registros" class="table table-hover">
                            <thead class="thead-dark">
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

                            <tfoot class="thead-dark">
                                </tr>
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
                                @foreach($finalizadas as $solicitud)
                                    <tr>
                                        <td><center>{{$solicitud->idFactura}}</center></td>
                                        <td><center>{{$solicitud->nombreDelCiente}}</center></td>
                                        <td><center>{{$solicitud->domicilioDelCiente}}</center></td>
                                        <td><center>{{$solicitud->telefonoDelCliente}}</center></td>
                                        <td><center>{{$solicitud->analisisSolicitados}}</center></td>
                                        <td><center>{{$solicitud->costoDelServicio}}</center></td>
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
    </body>
@endsection

