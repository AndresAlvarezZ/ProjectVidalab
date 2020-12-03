@extends('layouts.appCliente')
@include('Perfiles.cambioDeImagen')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil</title>
    <link href="{{ asset('css/perfil.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
  </head>

  <body>
    <div class="container-md">
      <div class="card-header text-center">
        <h3>Perfil de cliente</h3>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                <table class="table">
                  <tr>
                    <td>
                      @if($cliente->imagenDelCliente==null)
                        <center><img src="/imagenes/perfil.jpg" height="125" alt=""></center>
                      @endif
                      @if($cliente->imagenDelCliente!=null)
                        <center><img id="imagenPerfil" src="/imagenes/{{$cliente->imagenDelCliente}}" alt=""></center>
                      @endif
                    </td>
                  </tr>
                  <tr>
                    <td><center><button id="btnModal" type="button" data-toggle="modal" data-target="#agregarImagen"><span class="icon-camera"></span></button></center></td>
                  </tr>
                </table>
              </h5>
              <p class="card-text">
                <table>
                  <tr>
                    <td><p id="datos"></p></td>
                    <th scope="col">Cédula/Identificación: </th>
                    <td>{{$cliente->dniDelCliente}}</td>
                  </tr>
                  <tr>
                    <td><p id="datos"></p></td>
                    <th scope="col">Nombre:</th>
                    <td>{{$cliente->nombreDelCliente}} {{$cliente->segundoNombreDelCliente}}</td>
                  </tr>
                  <tr>
                      <td><p id="datos"></p></td>
                    <th scope="col">Primer Apellido: </th>
                    <td>{{$cliente->primerApellidoDelCliente}}</td>
                  </tr>
                  <tr>
                      <td><p id="datos"></p></td>
                    <th scope="col">Segundo Apellido:</th>
                    <td>{{$cliente->segundoApellidoDelCliente}}</td>
                  </tr>
                  <tr>
                      <td><p id="datos"></p></td>
                    <th scope="col">Fecha de Nacimiento: </th>
                    <td>{{$cliente->fechaDeNacimientoDelCliente}}</td>
                  </tr>
                  <tr>
                      <td><p id="datos"></p></td>
                    <th scope="col">Edad: </th>
                    <td>{{$cliente->edadDelCliente}}</td>
                  </tr>
                  </table>

              </p>
              <br>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Otros datos personales adicionales</h4>
              <p class="card-text">
                <table>
                  <tr>
                    <th scope="col">Correo electrónico: </th>
                    <td>{{$cliente->correoDelCliente}}</td>
                  </tr>
                  <tr>
                    <th scope="col">Teléfono:</th>
                    <td>{{$cliente->telefonoDelCliente}}</td>
                  </tr>
                  <tr>
                    <th scope="col">Domicilio:</th>
                  </tr>
                  </table>
                  <br>
                  <table>
                  <tr>
                    <textarea readonly name="domicilio" class="form-control" id="domicilio" rows="6">{{$cliente->domicilioDelCliente}}</textarea>
                  </tr>
                </table>
                <h4 class="card-title">Datos personales Familiares</h4>
                <table>
                  <tr>
                    <th scope="col">Número de hijos:</th>
                    <td>{{$cliente->numeroDehijosDelcliente}}</td>
                  </tr>
                </table>
              </p>
              <br>
              <a class="btn btn-primary" type="button" data-toggle="modal" data-target="#editarPerfil">Editar mis datos</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
@endsection
