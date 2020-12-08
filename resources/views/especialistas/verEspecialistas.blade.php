@extends('layouts.appCliente')
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
            <div class="card-header text-center tituloEspecialistas">
                <h3>Perfil de Especialistas VIDAlab</h3>
            </div>
            <br></br>
            @if($datosDisponibles == 1)
                <br>
            @else
                <div class="alert alert-warning" role="alert">
                    <center><b>No hay registros disponibles</b></center>
                </div>
            @endif


            @foreach($especialistas as $especialista)
            <div class="row">
                <div class="col-xl">
                    <div class="card tarjetaDeEspecialista">
                        <div class="card-body">
                            <h5 class="card-title">
                                <table>
                                    <tr>
                                        <td>
                                            @if($especialista->imagenDelEspecialista==null)
                                                <center><img id="perfil" src="/perfilesDeEspecialistas/perfil.jpg" height="125" alt=""></center>
                                            @endif
                                            @if($especialista->imagenDelEspecialista!=null)
                                                <center><img id="perfil" src="/perfilesDeEspecialistas/{{$especialista->imagenDelEspecialista}}" alt=""></center>
                                            @endif
                                        </td>
                                        <td>
                                            
                                            <table id="especialista">
                                                <tr>
                                                    <td><p id="datos"></p></td>
                                                    <th scope="col"><span class="icon-home"></span></th>
                                                    <td>Sede, {{$especialista->sedeDelEspecialista}}</td>
                                                </tr>
                                                <tr>
                                                    <td><p id="datos"></p></td>
                                                    <th scope="col"><span class="icon-user-tie"></th>
                                                    <td>{{$especialista->nombreDelEspecialista}} {{$especialista->segundoNombreDelEspecialista}} {{$especialista->primerApellidoDelEspecialista}} {{$especialista->segundoApellidoDelEspecialista}}</td>
                                                </tr>
                                                <tr>
                                                    <td><p id="datos"></p></td>
                                                    <th scope="col"><span class="icon-envelop"></th>
                                                    <td>{{$especialista->correoDelEspecialista}}</td>
                                                </tr>
                                                <tr>
                                                    <td><p id="datos"></p></td>
                                                    <th scope="col"><span class="icon-folder-plus"></th>
                                                    <td width="500px"><textarea readonly name="especialidadE" class="form-control" id="especialidadE" col="40" rows="4">{{$especialista->especialidadesDelEspecialista}}</textarea></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <br></br>
            @endforeach
        </div>
    </body>
</html>
@endsection
