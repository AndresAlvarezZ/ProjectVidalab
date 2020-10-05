<!Doctype html>
<html>
<head>
  @extends('layouts.appAdmin')
</head>
<body>
  @section('content')
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
      <div class="card-header">
      <strong>  {{'Formulario de envio de notificaciones a todos los clientes'}} </strong>
      </div>
      <div class="card-body">
        <form action="notificacionMasiva" method="post" enctype="multipart/form-data" target="_self">
            @csrf
          <label for="asunto"><strong>Asunto:</strong></label><br>
          <input type="text" name="asunto" value="" class="form-control" required ><br>
        <label for=""><strong>Mensaje:</strong></label><br><textarea  rows="6" cols="40" name="mensaje" class="form-control" required></textarea><br>
          <input type="file" name="file" >
          <br>
          <br>
          <button type="submit" class="btn btn-primary" > Enviar</button>
        </form>
      </div>
      </body>
    </div>
  </div>
  </div>
  </div>
  @endsection
</body>
</html>
