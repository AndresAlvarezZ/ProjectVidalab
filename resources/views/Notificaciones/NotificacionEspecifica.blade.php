@extends('layouts.especial')
@section('content')

  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"><script src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <link href="{{ asset('css/estiloDeNotificaciones.css') }}" rel="stylesheet">
    <script src="{{ asset('js/transacciones/transaccionesDeNotificaciones.js') }}?v=<?php echo(rand()); ?>"defer></script>
    <script src="{{ asset('js/buscador/clientesP.js') }}?v=<?php echo(rand()); ?>"defer></script>
    <script src="{{ asset('js/cambiarNombre.js') }}?v=<?php echo(rand()); ?>"defer></script>
    <script src="{{ asset('js/scroll.js') }}?v=<?php echo(rand()); ?>"defer></script>

    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  </head>


  <body background="wallpapers/PaisajeFloral.jpg">
    <div class="container-fluid">
      <div class="row no-gutters">

        <div class="col-sm">
          <div class="card" style="max-width: 50rem;">
            <div class="card-header"><center><h4><b>CORREOS PERSONALIZADOS ENVIADOS A CLIENTES</b></h4></center></div>
              <div class="card-body">
                <div class="alert alert-info" role="alert">
                    <center>Historial de correos ordenados del más reciente al más antiguo</center>
                </div>
                <br>
                <center>
                  <ul class="list-group">
                    <table id="registrosClientesP" class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col"><center>Enviado por: </center></th>
                          <th scope="col"><center>Enviado a: </center></th>
                          <th scope="col"><center>Asunto: </center></th>
                          <th scope="col"><center>Fecha de envío: </center></th>
                          <th scope="col"><center>Abrir correo</center></th>
                        </tr>
                      </thead>
                      <tfoot class="thead-dark">
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
                                  <td><center><a href="#" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para ver el correo completo">Ver</a></center></td>
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
            <div class="card" style="max-width: 50rem;">
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
                      <option value="{{$cliente->correoDelCliente}}">{{$cliente->nombreDelCliente}}</option>
                    @endforeach
                  </select>
                  <br></br>

                  <center><button id="btnEnviar" type="submit" onclick="iniciarContador()" class="btn btn-success"> Enviar Correo</button></center>
                </form>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </body>
@endsection
