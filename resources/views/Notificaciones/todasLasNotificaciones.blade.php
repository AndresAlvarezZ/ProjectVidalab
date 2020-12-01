@extends('layouts.especial')
@section('content')
    <head>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"><script src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <script src="{{ asset('js/buscador/buscadorDeRegistros.js') }}?v=<?php echo(rand()); ?>"defer></script>
        <script src="{{ asset('js/buscador/clientesP.js') }}?v=<?php echo(rand()); ?>"defer></script>
        <script src="{{ asset('js/buscador/clientesM.js') }}?v=<?php echo(rand()); ?>"defer></script>
        <script src="{{ asset('js/buscador/empresasP.js') }}?v=<?php echo(rand()); ?>"defer></script>
        <script src="{{ asset('js/buscador/empresasM.js') }}?v=<?php echo(rand()); ?>"defer></script>

        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    </head>

    <body>
        <div class="container-fluid">
            <div class="card-header"><h4><b><center>REGISTRO CORREOS</center></b></h4></div>
                <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-todas-tab" data-toggle="tab" href="#nav-todas" role="tab" aria-controls="nav-todas" aria-selected="true">Todas</a>
                            <a class="nav-link" id="nav-clientesP-tab" data-toggle="tab" href="#nav-clientesP" role="tab" aria-controls="nav-clientesP" aria-selected="false">Clientes: Personalizado</a>
                            <a class="nav-link" id="nav-clientesM-tab" data-toggle="tab" href="#nav-clientesM" role="tab" aria-controls="nav-clientesM" aria-selected="false">Clientes: Masivo</a>
                            <a class="nav-link" id="nav-empresasP-tab" data-toggle="tab" href="#nav-empresasP" role="tab" aria-controls="nav-empresasP" aria-selected="false">Empresas: Personalizado</a>
                            <a class="nav-link" id="nav-empresasM-tab" data-toggle="tab" href="#nav-empresasM" role="tab" aria-controls="nav-empresasM" aria-selected="false">Empresas: Masivo</a>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-todas" role="tabpanel" aria-labelledby="nav-todas-tab">
                            <ul class="list-group">
                            <br>
                                <table id="registros" class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col"><center>Enviado por: </center></th>
                                            <th scope="col"><center>Enviado a: </center></th>
                                            <th scope="col"><center>Asunto: </center></th>
                                            <th scope="col"><center>Archivo: </center></th>
                                            <th scope="col"><center>Fecha de envío: </center></th>
                                            <th scope="col"><center>Abrir correo</center></th>
                                        </tr>
                                    </thead>

                                    <tfoot class="thead-dark">
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
                                                <td><center><a href="#" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para ver el correo completo">Ver</a></center></td>
                                            </tr>
                                            <?php $contador++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="nav-clientesP" role="tabpanel" aria-labelledby="nav-clientesP-tab">
                            <ul class="list-group">
                            <br>
                                <table id="registrosClientesP" class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col"><center>Enviado por: </center></th>
                                            <th scope="col"><center>Enviado a: </center></th>
                                            <th scope="col"><center>Asunto: </center></th>
                                            <th scope="col"><center>Archivo: </center></th>
                                            <th scope="col"><center>Fecha de envío: </center></th>
                                            <th scope="col"><center>Abrir correo</center></th>
                                        </tr>
                                    </thead>

                                    <tfoot class="thead-dark">
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
                                            @if($notificacion->tipoDeNotificacion == '1')
                                                <tr>
                                                    <td><center>{{$nombre[$contador]}} {{$apellido[$contador]}}</center></td>
                                                    <td><center>{{$notificacion->receptorDeNotificacion}}</center></td>
                                                    <td><center>{{$notificacion->asuntoDeNotificacion}}</center></td>
                                                    <td><center>{{$notificacion->archivo}}</center></td>
                                                    <td><center>{{$notificacion->created_at}}</center></td>
                                                    <td><center><a href="#" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para ver el correo completo">Ver</a></center></td>
                                                </tr>
                                            @endif
                                            <?php $contador++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="nav-clientesM" role="tabpanel" aria-labelledby="nav-clientesM-tab">
                            <ul class="list-group">
                            <br>
                                <table id="registrosClientesM" class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col"><center>Enviado por: </center></th>
                                        <th scope="col"><center>Enviado a: </center></th>
                                        <th scope="col"><center>Asunto: </center></th>
                                        <th scope="col"><center>Archivo: </center></th>
                                        <th scope="col"><center>Fecha de envío: </center></th>
                                        <th scope="col"><center>Abrir correo</center></th>
                                        </tr>
                                    </thead>
                                    <tfoot class="thead-dark">
                                        <tr>
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
                                            @if($notificacion->tipoDeNotificacion == '2')
                                                <tr>
                                                    <td><center>{{$nombre[$contador]}} {{$apellido[$contador]}}</center></td>
                                                    <td><center>{{$notificacion->receptorDeNotificacion}}</center></td>
                                                    <td><center>{{$notificacion->asuntoDeNotificacion}}</center></td>
                                                    <td><center>{{$notificacion->archivo}}</center></td>
                                                    <td><center>{{$notificacion->created_at}}</center></td>
                                                    <td><center><a href="#" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para ver el correo completo">Ver</a></center></td>
                                                </tr>
                                            @endif
                                            <?php $contador++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="nav-empresasP" role="tabpanel" aria-labelledby="nav-empresasP-tab">
                            <ul class="list-group">
                            <br>
                                <table id="registrosEmpresasP" class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col"><center>Enviado por: </center></th>
                                        <th scope="col"><center>Enviado a: </center></th>
                                        <th scope="col"><center>Asunto: </center></th>
                                        <th scope="col"><center>Archivo: </center></th>
                                        <th scope="col"><center>Fecha de envío: </center></th>
                                        <th scope="col"><center>Abrir correo</center></th>
                                        </tr>
                                    </thead>
                                    <tfoot class="thead-dark">
                                        <tr>
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
                                            @if($notificacion->tipoDeNotificacion == '3')
                                                <tr>
                                                    <td><center>{{$nombre[$contador]}} {{$apellido[$contador]}}</center></td>
                                                    <td><center>{{$notificacion->receptorDeNotificacion}}</center></td>
                                                    <td><center>{{$notificacion->asuntoDeNotificacion}}</center></td>
                                                    <td><center>{{$notificacion->archivo}}</center></td>
                                                    <td><center>{{$notificacion->created_at}}</center></td>
                                                    <td><center><a href="#" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para ver el correo completo">Ver</a></center></td>
                                                </tr>
                                            @endif
                                            <?php $contador++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="nav-empresasM" role="tabpanel" aria-labelledby="nav-empresasM-tab">
                            <ul class="list-group">
                            <br>
                                <table id="registrosEmpresasM" class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col"><center>Enviado por: </center></th>
                                        <th scope="col"><center>Enviado a: </center></th>
                                        <th scope="col"><center>Asunto: </center></th>
                                        <th scope="col"><center>Archivo: </center></th>
                                        <th scope="col"><center>Fecha de envío: </center></th>
                                        <th scope="col"><center>Abrir correo</center></th>
                                        </tr>
                                    </thead>
                                    <tfoot class="thead-dark">
                                        <tr>
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
                                            @if($notificacion->tipoDeNotificacion == '4')
                                                <tr>
                                                    <td><center>{{$nombre[$contador]}} {{$apellido[$contador]}}</center></td>
                                                    <td><center>{{$notificacion->receptorDeNotificacion}}</center></td>
                                                    <td><center>{{$notificacion->asuntoDeNotificacion}}</center></td>
                                                    <td><center>{{$notificacion->archivo}}</center></td>
                                                    <td><center>{{$notificacion->created_at}}</center></td>
                                                    <td><center><a href="#" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para ver el correo completo">Ver</a></center></td>
                                                </tr>
                                            @endif
                                            <?php $contador++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
            <br>
            <center><a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
    </body>
@endsection
