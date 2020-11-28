@extends('layouts.especial')
@section('content')

  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"><script src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/estiloDeNotificaciones.css">
    <script src="{{ asset('js/scroll.js') }}"defer></script>
    <script src="{{ asset('js/buscador/buscadorDeRegistros.js') }}"defer></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
  </head>


  <body background="wallpapers/PaisajeFloral.jpg">
    <div class="container-fluid">
      <div class="row no-gutters">

        <div class="col-sm">
          <div class="card" style="max-width: 50rem;">
            <div class="card-header"><center><h4><b>REGISTRO DE CORREOS ENVIADOS</b></h4></center></div>
              <div class="card-body">
                <div class="alert alert-info" role="alert">
                    <center>Historial de correos ordenados del más reciente al más antiguo</center>
                </div>
                <br>
                <center>
                  <ul class="list-group">
                    <table id="registros" class="table table-hover">
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
                                  <td><center><a href="#" class="btn btn-info btnEditar">Ver</a></center></td>
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
              <div class="card-header"><h4><b><center>CORREO PERSONALIZADO EMPRESARIAL</center><b></h4></div>
              <div class="card-body">
                <form action="envioNotificacionEspecificaEmpresarial" method="post" enctype="multipart/form-data" target="_self">
                  @csrf

                  <input type="hidden" name="tipoDeNotificacion" value="3">
                  <label for="asunto"><strong>Asunto:</strong></label><br>
                  <input type="text" name="asunto" placeholder="Escriba el asunto del correo" value="" class="form-control" required>
                  <br></br>
                  <label for=""><strong>Mensaje:</strong></label><br><textarea  rows="6" cols="40" placeholder="Escriba motivo del correo" name="mensaje" class="form-control" required></textarea><br>
                  <input type="file" name="file" >

                  <br></br>

                  <label>Selecionar cliente</label><br>
                  <select class="form-control" name="clienteOpcion">
                    @foreach ($empresas as $empresa)
                      <option value="{{$empresa->correoElectronicoDeLaEmpresa}}">{{$empresa->nombreDeLaEmpresa}}</option>
                    @endforeach
                  </select>
                  <br></br>
                  <center><button type="submit" class="btn btn-success"> Enviar Correo</button></center>
                </form>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </body>
@endsection
