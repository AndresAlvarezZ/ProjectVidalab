@extends('layouts.app')
@include('Perfiles.cambioDeImagen')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil</title>
    <link rel="stylesheet" href="/css/perfil.css">
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h3>Perfil de cliente</h3>
            </div>
            <div class="card-body">
              <div class="imagen">
                @if($cliente->imagenDelCliente==null)
                <img src="/imagenes/perfil.jpg" height="125" alt="">
                @endif
                @if($cliente->imagenDelCliente!=null)
                <img id="imagenPerfil" src="/imagenes/{{$cliente->imagenDelCliente}}" alt="">
                @endif
                <br>
                <button id="btnModal" type="button" data-toggle="modal" data-target="#agregarImagen"><img src="/imagenes/subir.png" height="25" alt=""></button></p>
              </div>
              <div class="datosPersonales">
                <table>
                  <tr>
                    <td><label id="lblPerfil"  for=""><strong>Nombre:</strong></label></td>
                    <td>{{$cliente->nombreDelCliente}}</td>
                  </tr>
                  <tr>
                    <td><label id="lblPerfil"  for=""><strong>Cédula: </strong></label></td>
                    <td>{{$cliente->dniDelCliente}}</td>
                  </tr>
                  <tr>
                    <td><label id="lblPerfil"  for=""><strong>Primer Apellido: </strong></label></td>
                    <td>{{$cliente->primerApellidoDelCliente}}</td>
                  </tr>
                  <tr>
                    <td><label id="lblPerfil" for=""><strong>Segundo Apellido: </strong></label></td>
                    <td>{{$cliente->segundoApellidoDelCliente}}</td>
                  </tr>
                  <tr>
                    <td><label id="lblPerfil"  for=""><strong>Edad: </strong></label></td>
                    <td>{{$cliente->edadDelCliente}}</td>
                  </tr>
                  <tr>
                    <td><label id="lblPerfil"  for=""><strong>Teléfono:</strong></label></td>
                    <td>{{$cliente->telefonoDelCliente}}</td>
                  </tr>
                  <tr>
                    <td><label id="lblPerfil"  for=""><strong>Domicilio:</strong></label></td>
                    <td><textarea readonly name="name" rows="4" cols="25">{{$cliente->domicilioDelCliente}}</textarea></td>
                  </tr>
                </table>
                <br>
                <a class="btn btn-primary" type="button" data-toggle="modal" data-target="#editarPerfil">Editar mis datos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
@endsection
