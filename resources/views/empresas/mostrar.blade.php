
@extends('layouts.especial')
@extends('pop_up.modalCitas')
@section('content')

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"><script src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">

        <script src="{{ asset('js/transacciones/transaccionesDeCitas.js') }}?v=<?php echo(rand()); ?>"defer></script>
        <script src="{{ asset('js/buscador/buscadorDeRegistros.js') }}?v=<?php echo(rand()); ?>"defer></script>

        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    </head>

    <body>
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
                    <div class="card-header titulo"><h4><b><center>REGISTRO DE CITAS POR EMPRESA<center></b></h4></div>
                        <div class="card-body">
                            <div class="alert alert-info" role="alert">
                                <center>¡Lista de citas ordenada de forma <i>descendente, según fecha de regristro</i> en el sistema!</center>
                            </div>
                            <br>


                            <ul class="list-group">
                                <table id="registros" class="table table-hover">
                                    <thead class="thead-dark">
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

                                    <tfoot class="thead-dark">
                                        </tr>
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
                                                    <a href="#" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para actualizar los datos de esta cita"><span class="icon-loop2"></span>Actualizar</a> <br></br>
                                                    <a href="#" class="btn btn-danger btnEliminar" data-toggle="tooltip" data-placement="right" title="Click para eliminar todo el registro de esta cita"><span class="icon-bin"></span>Eliminar</a> <br></br>
                                            </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
