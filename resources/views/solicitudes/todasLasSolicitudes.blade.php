@extends('layouts.especial')
@section('content')


    <head>
        @include('layouts.seccionesGenerales.cssDeTablas')
    </head>


    <body>
    @include('layouts.seccionesGenerales.css-jsDeModales')   
        <div class="container-fluid">
            <div class="title">
				<h2 class="tituloDeRegistro"><span>R</span>egistro de <span>T</span>odas las <span>S</span>olicitudes</h2>
			</div>
            <div class="card-body">

                <ul class="list-group">
                    <table id="registros" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col"><center>Factura #</center></th>
                                <th scope="col"><center>Nombre del Cliente</center></th>
                                <th scope="col"><center>Domicilio</center></th>
                                <th scope="col"><center>Teléfono</center></th>
                                <th scope="col"><center>Análisis Solicitados</center></th>
                                <th scope="col"><center>Costo del Servicio</center></th>
                                <th scope="col"><center>Estado</center></th>
                            </tr>
                        </thead>

                        <tfoot>
                            </tr>
                                <th scope="col"><center>Factura #</center></th>
                                <th scope="col"><center>Nombre del Cliente</center></th>
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
            <br>
            <center><a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>
@endsection
