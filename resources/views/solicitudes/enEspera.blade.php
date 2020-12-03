@extends('layouts.especial')
@extends('pop_up.modalSolicitudesYFacturas')
@section('content')


    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"><script src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
        <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">

        <script src="{{ asset('js/transacciones/procesarSolicitudesYFacturas.js') }}?v=<?php echo(rand()); ?>"defer></script>
        <script src="{{ asset('js/buscador/buscadorDeRegistros.js') }}?v=<?php echo(rand()); ?>"defer></script>
        
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    </head>


    <body>
        <div class="container-fluid">
            <div class="card-header titulo"><h4><b><center>REGISTRO DE SOLICITUDES EN ESTADO: EN ESPERA</center></b></h4></div>
                <div class="card-body">

                    <div id="enEspera" class="alert enEspera alert-info"  role="alert">
                        <center><b>Lista de clientes que solicitan toma de muestra a domicilio</b><br>Lista de solicitudes ordenadas en cola según fecha y hora de registro en el sistema</center>
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
                                @foreach($enEspera as $solicitud)
                                    <tr>
                                        <td><center>{{$solicitud->idFactura}}</center></td>
                                        <td><center>{{$solicitud->nombreDelCiente}}</center></td>
                                        <td><center>{{$solicitud->domicilioDelCiente}}</center></td>
                                        <td><center>{{$solicitud->telefonoDelCliente}}</center></td>
                                        <td><center>{{$solicitud->analisisSolicitados}}</center></td>
                                        <td><center>{{$solicitud->costoDelServicio}}</center></td>
                                        <td><center><a href="#" class="btn btn-primary btnEnEspera" data-toggle="tooltip" data-placement="right" title="Click para actualizar el estado de esta solicitud"><span class="icon-loop2"></span>Procesar Solicitud</a> </center></td>
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
