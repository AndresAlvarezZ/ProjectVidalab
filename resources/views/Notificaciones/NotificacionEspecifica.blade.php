@extends('layouts.especial')
@section('content')

  <head>
    @include('layouts.seccionesGenerales.cssDeTablas')
    <script src="{{ asset('js/cambiarNombre.js') }}?v=<?php echo(rand()); ?>"defer></script>
  </head>


  <body class="notificacionEspecifica">
    @include('layouts.seccionesGenerales.css-jsDeModales')   
    <div class="container-fluid">
      <div class="row no-gutters">

        <div class="col-sm">
          <div class="card notificaciones" style="max-width: 50rem;">
            <div class="card-header"><center><h4><b>CORREOS PERSONALIZADOS ENVIADOS A CLIENTES</b></h4></center></div>
              <div class="card-body">
                <div class="alert alert-info" role="alert">
                    <center>Historial de correos ordenados del más reciente al más antiguo</center>
                </div>
                <br>
                <center>
                  <ul class="list-group">
                    <table id="registrosClientesP" class="table table-striped" style="width:100%">
                      <thead>
                        <tr>
                          <th scope="col"><center>Enviado por: </center></th>
                          <th scope="col"><center>Enviado a: </center></th>
                          <th scope="col"><center>Asunto: </center></th>
                          <th scope="col"><center>Fecha de envío: </center></th>
                          <th scope="col"><center>Abrir correo</center></th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th scope="col"><center>Enviado por: </center></th>
                          <th scope="col"><center>Enviado a: </center></th>
                          <th scope="col"><center>Asunto: </center></th>
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
                                  <td><center>{{$notificacion->created_at}}</center></td>
                                  <td><center><a href="/mostrarNotificaciones/{{$notificacion->id}}" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para ver el correo completo"><span class="icon-eye"></span></a></center></td>
                              </tr>
                              <?php $contador++; ?>
                        @endforeach
                      </tbody>
                    </table>
                  </ul>
                </center>
                <br></br>
              </div>
            </div>
          </div>


          <div class="col col-lg-1">
          </div>


          <div class="col-lg">
            <div class="card notificaciones" style="max-width: 50rem;">
              <div class="card-header"><h4><b><center>REDACTAR CORREO A CLIENTE</center><b></h4></div>
              <div class="card-body">
                <form id="notificacionCliente" action="/envioNotificacionEspecifica" method="post" enctype="multipart/form-data" target="_self">
                  @csrf

                  <input type="hidden" name="tipoDeNotificacion" value="1">

                  <label for="asunto"><strong>Asunto:</strong></label><br>
                  <input id="asunto" type="text" name="asunto" placeholder="Escriba el asunto del correo" value="" class="form-control" required>
                  <br></br>

                  <label for=""><strong>Mensaje:</strong></label><br><textarea id="mensaje" rows="6" cols="40" placeholder="Escriba motivo del correo" name="mensaje" class="form-control" required></textarea><br>
                  <input type="file" name="file[]" multiple>

                  <br></br>

                  <label>Selecionar cliente</label><br>
                  <select class="form-control" name="clienteOpcion">
                    @foreach ($clientes as $cliente)
                      <option value="{{$cliente->correoDelCliente}}">{{$cliente->nombreDelCliente}} {{$cliente->primerApellidoDelCliente}}</option>
                    @endforeach
                  </select>
                  <br></br>

                  <center><button id="btnEnviar" type="submit" onclick="iniciarContador()" class="btn btn-success btnEnvio"><span class="icon-upload2"> </span>Enviar Correo</button></center>
                </form>
              </div>
            </div>
            <script src="{{ asset('js/transacciones/transaccionesDeNotificaciones.js') }}?v=<?php echo(rand()); ?>"defer></script>
          </div>


        </div>
      </div>
    </div>
    @include('layouts.seccionesGenerales.jsDeTablas')
  </body>
@endsection
