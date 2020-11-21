  <head>
    @extends('layouts.appAdmin')
  </head>

  @section('content')
    <body>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="card">
              <div class="card-header"><h4><b><center>CORREO PERSONALIZADO</center><b></h4></div>
              
              <div class="card-body">
                <form action="notificacionEspecifica" method="post" enctype="multipart/form-data" target="_self">
                  @csrf
                  <label for="asunto"><strong>Asunto:</strong></label><br>
                  <input type="text" name="asunto" placeholder="Escriba el asunto del correo" value="" class="form-control" required ><br>
                  <label for=""><strong>Mensaje:</strong></label><br><textarea  rows="6" cols="40" placeholder="Escriba motivo del correo" name="mensaje" class="form-control" required></textarea><br>
                  <input type="file" name="file" >
            
                  <br><br>
              
                  <label>Selecionar cliente</label><br>
                  <select class="form-control" name="clienteOpcion">
                    @foreach ($clientes as $cliente)
                      <option value="{{$cliente->correoDelCliente}}">{{$cliente->nombreDelCliente}}</option>
                    @endforeach
                  </select>
                  <br>
                  <center><button type="submit" class="btn btn-success"> Enviar Correo</button></center>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>    
  @endsection
