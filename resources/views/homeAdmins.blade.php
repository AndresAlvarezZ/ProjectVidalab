@extends('layouts.especial')
@extends('pop_up.modalTareas')

@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">    
    @include('layouts.seccionesGenerales.cssDeTablas')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">    
    <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  </head>

  <body>
    @include('layouts.seccionesGenerales.css-jsDeModales')   
    <div class="jumbotron-fluid">

      <div class="row">
        <div class="col">
          <div class="card" style="max-width: 18rem;">
            <div class="card-header"><center><h3><b>Mi tarea es...</b></h3></center></div>
            <div class="card-body">
              <form id="tareaForm">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="tipoDeTarea" class="col-form-label">Tipo: </label>
                  <select id="tipoDeTarea" class="form-control" name="tipoDeTarea" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Urgente</option>
                    <option value="2">Aplazable</option>
                  </select>
                  @error('tipoDeTarea')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="tarea">¿Qué debo realizar?</label>
                  <textarea required class="form-control" id="tarea" name="tarea" rows="5"></textarea>
                </div>
                <p>
                  <button type="submit" class="btn btn-success">Agregar Tarea</button>
                </p>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card-body">
            <div class="alert alert-info" role="alert">
                <center>Lista de Tareas ordenadas de la más antigua a la más reciente<br>
                Urgente: <button class="btn btn-danger" disable></button><br>
                Aplazable: <button class="btn btn-warning" disable></button>
                </center>
            </div>
            <br>
            <table id="registros" class="table table-striped" style="width:100%">
              <thead>
                <tr>
                  <th scope="col"><center>ID</center></th>
                  <th scope="col"><center>Tipo</center></th>
                  <th scope="col"><center>Tarea</center></th>
                  <th scope="col"><center>Acción</center></th> 
                </tr>
              </thead>

              <tfoot>
                <tr>
                  <th scope="col"><center>ID</center></th>
                  <th scope="col"><center>Tipo</center></th>
                  <th scope="col"><center>Tarea</center></th>
                  <th scope="col"><center>Acción</center></th>
                </tr>
              </tfoot>

              <tbody>
                <?php
                  use App\Tarea;
                  $tareas = Tarea::all();
                ?>
                @foreach($tareas as $tarea)
                  <tr>
                    <td><center>{{$tarea->id}}</center></td>
                    @if($tarea->tipoDeTarea == 1)
                      <td><center><button class="btn btn-danger" disable></button></center></td>
                    @else
                      <td><center><button class="btn btn-warning" disable></button></center></td>
                    @endif
                    <td><center>{{$tarea->tarea}}</center></td>
                    <td><center>
                        <a href="#" class="btn btn-success btnCompletar" data-toggle="tooltip" data-placement="right" title="Click para completar tarea Será eliminada"><span class="icon-checkmark"></span></a>
                    </center></td>
                  </tr>
                @endforeach        
              </tbody>
            </table>
            <script src="{{ asset('js/transacciones/transaccionesDeTareas.js') }}?v=<?php echo(rand()); ?>"defer></script>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="row justify-center">
          <div class="col-md-8">
              @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif
          </div>
        </div>
      </div>
    </div>
    @include('layouts.seccionesGenerales.jsDeTablas')
  </body>
  
  @include('layouts.seccionesGenerales.redesSociales')
  @include('layouts.seccionesGenerales.derechosDeAutor')
</html>
@endsection
