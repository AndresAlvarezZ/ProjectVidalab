
@extends('layouts.especial')
@extends('pop_up.modalCitas')
@section('content')

    <head>
        @include('layouts.seccionesGenerales.cssDeTablas')
    </head>

    <body>
        @include('layouts.seccionesGenerales.css-jsDeModales')
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card" style="max-width: 18rem;">
                        <div class="card-header"><center><h4><b>EMPRESA</b></h4></center></div>

                        <div class="card-body">
                            <center><h4>{{$empresa->idDeLaEmpresa}}</h4></center>
                            <p class="card-text">
                                Empresa: {{$empresa->nombreDeLaEmpresa}}
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Teléfono: {{$empresa->numeroDeTelefonoDeLaEmpresa}}</br>
                                Correo: {{$empresa->correoElectronicoDeLaEmpresa}}
                            </li>
                            <li class="list-group-item">Derección: {{$empresa->direccionDeLaEmpresa}}</li>
                        </ul>
                        <div class="card-body">
                            <center>
                                <a href="/empresas" class="btn btn-dark">Regresar a la lista</a> <br></br>
                                <a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="title">
                        <h2 class="tituloDeRegistro"><span>R</span>egistro de <span>C</span>itas por <span>E</span>mpresa</h2>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info" role="alert">
                            <center>¡Lista de citas ordenada de forma <i>descendente, según fecha de regristro</i> en el sistema!</center>
                        </div>
                        <br>


                        <table id="registros" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col"><center>Código Empresa</center></th>
                                    <th scope="col"><center>ID</center></th>
                                    <th scope="col"><center>Fecha</center></th>
                                    <th scope="col"><center>Hora</center></th>
                                    <th scope="col"><center>Pacientes</center></th>
                                    <th scope="col"><center>Pruebas</center></th>
                                    <th scope="col"><center>Solicitante</center></th>
                                    <th scope="col"><center>Acción a realizar</center></th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th scope="col"><center>Código Empresa</center></th>
                                    <th scope="col"><center>ID</center></th>
                                    <th scope="col"><center>Fecha</center></th>
                                    <th scope="col"><center>Hora</center></th>
                                    <th scope="col"><center>Pacientes</center></th>
                                    <th scope="col"><center>Pruebas</center></th>
                                    <th scope="col"><center>Solicitante</center></th>
                                    <th scope="col"><center>Acción a realizar</center></th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach($citas as $cita)
                                @if($empresa->idDeLaEmpresa == $cita->idDeLaEmpresa)
                                    <tr>
                                        <td><center>{{$empresa->idDeLaEmpresa}}</center></td>
                                        <td><center>{{$cita->idDeLaCita}}</center></td>
                                        <td><center>{{$cita->fechaDeCita}}</center></td>
                                        <td><center>{{$cita->horaDeCita}}</center></td>
                                        <td><center>{{$cita->numeroDeClientesPorAtender}}</center></td>
                                        <td><center>{{$cita->tiposDeAnalisisRequeridos}}</center></td>
                                        <td><center>{{$cita->nombreDelSolicitante}} {{$cita->primerApellidoDelSolicitante}} {{$cita->segundoApellidoDelSolicitante}}</center></td>
                                        <td><center>
                                            <a href="#" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para actualizar los datos de esta cita"><span class="icon-loop2"></span></a>
                                            <a href="#" class="btn btn-danger btnEliminar" data-toggle="tooltip" data-placement="right" title="Click para eliminar todo el registro de esta cita"><span class="icon-bin"></span></a>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        <script src="{{ asset('js/transacciones/transaccionesDeCitas.js') }}?v=<?php echo(rand()); ?>"defer></script>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>
@endsection
