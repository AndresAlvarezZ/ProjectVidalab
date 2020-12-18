@extends('layouts.especial')
@section('content')
    <head>
        @include('layouts.seccionesGenerales.cssDeTablas')
    </head>

    <body>
        @include('layouts.seccionesGenerales.css-jsDeModales')   
        <div class="container-fluid">
            <div class="title">
				<h2 class="tituloDeRegistro"><span>R</span>egistro de <span>C</span>orreos</h2>
			</div>
            <div class="card-body">
                @if (session('status'))

                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script src="{{ asset('js/notificacion.js') }}?v=<?php echo(rand()); ?>"defer></script>
                @endif
               
                <table id="registros" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col"><center>Enviado por: </center></th>
                            <th scope="col"><center>Enviado a: </center></th>
                            <th scope="col"><center>Asunto: </center></th>
                            <th scope="col"><center>Archivo: </center></th>
                            <th scope="col"><center>Fecha de envío: </center></th>
                            <th scope="col"><center>Abrir correo</center></th>
                        </tr>
                    </thead>

                    <tfoot>
                        </tr>
                            <th scope="col"><center>Enviado por: </center></th>
                            <th scope="col"><center>Enviado a: </center></th>
                            <th scope="col"><center>Asunto: </center></th>
                            <th scope="col"><center>Archivo: </center></th>
                            <th scope="col"><center>Fecha de envío: </center></th>
                            <th scope="col"><center>Abrir correo</center></th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <?php $contador = 0; ?>
                        @foreach($notificaciones as $notificacion)
                            <tr>
                                <td><center>{{$nombre[$contador]}} {{$apellido[$contador]}}</center></td>
                                <td><center>{{$notificacion->receptorDeNotificacion}}</center></td>
                                <td><center>{{$notificacion->asuntoDeNotificacion}}</center></td>
                                <td><center>{{$notificacion->archivo}}</center></td>
                                <td><center>{{$notificacion->created_at}}</center></td>
                                <td><center><a href="/mostrarNotificaciones/{{$notificacion->id}}" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para ver el correo completo"><span class="icon-eye"></span></a></center></td>
                            </tr>
                            <?php $contador++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br>
        </div>
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>
@endsection
