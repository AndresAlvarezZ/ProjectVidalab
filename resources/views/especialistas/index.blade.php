@extends('layouts.especial')
@extends('pop_up.modalEspecialistas')
@section('content')

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"><script src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
        <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">

        <script src="{{ asset('js/transacciones/transaccionesDeEspecialistas.js') }}?v=<?php echo(rand()); ?>"defer></script>
        <script src="{{ asset('js/buscador/buscadorDeRegistros.js') }}?v=<?php echo(rand()); ?>"defer></script>
        
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

        <link href="{{ asset('css/menuAdministrador.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    </head>

    <body>
        <div class="container-fluid">
            <div class="card-header titulo"><h4><b><center>REGISTRO DE ESPECIALISTAS</center></b></h4></div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <button type="button" class="btn btn-primary btnAgregar" data-toggle="modal" data-target="#agregarEspecialista" data-toggle="tooltip" data-placement="right" title="Click para agregar datos de nuevo especialista"><span class="icon-user"></span>Registrar nuevo Especialista</button>
                        </div>
                    </div>
                    <br>

                    <ul class="list-group">
                        <table id="registros" class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"><center>Identificador</center></th>
                                    <th scope="col"><center>Nombre Completo</center></th>
                                    <th scope="col"><center>Foto</center></th>
                                    <th scope="col"><center>Correo Electrónico</center></th>
                                    <th scope="col"><center>Sede<center></th>
                                    <th scope="col"><center>Especialidades<center></th>
                                    <th scope="col"><center>Acción<center></th>
                                </tr>
                            </thead>

                            <tfoot class="thead-dark">
                                </tr>
                                    <th scope="col"><center>Identificador</center></th>
                                    <th scope="col"><center>Nombre Completo</center></th>
                                    <th scope="col"><center>Foto</center></th>
                                    <th scope="col"><center>Correo Electrónico</center></th>
                                    <th scope="col"><center>Sede<center></th>
                                    <th scope="col"><center>Especialidades<center></th>
                                    <th scope="col"><center>Acción<center></th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach($especialistas as $especialista)
                                <tr>
                                    <td><center>{{$especialista->id}}</center></td>
                                    <td><center>{{$especialista->nombreDelEspecialista}} {{$especialista->segundoNombreDelEspecialista}} {{$especialista->primerApellidoDelEspecialista}} {{$especialista->segundoApellidoDelEspecialista}}</center></td>
                                    <td><center>{{$especialista->imagenDelEspecialista}}</center></td>
                                    <td><center>{{$especialista->correoDelEspecialista}}</center></td>
                                    <td><center>{{$especialista->sedeDelEspecialista}}</center></td>
                                    <td><center>{{$especialista->especialidadesDelEspecialista}}</center></td>
                                    <td><center>
                                        <button type="button" class="btn btn-primary btnPerfil" data-toggle="modal" data-target="#agregarImagen" data-toggle="tooltip" data-placement="right" title="Click para actualizar foto de perfil del especialista"><span class="icon-camera"></span> Perfil</button> <br></br>
                                        <a href="#" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para actualizar los datos de esta especialista"><span class="icon-loop2"></span>Actualizar</a> <br></br>
                                        <a href="#" class="btn btn-danger btnEliminar" data-toggle="tooltip" data-placement="right" title="Click para eliminar todo el registro de esta especialista"><span class="icon-bin"></span>Eliminar</a> <br></br>
                                    </center></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </ul>
                </div>
            </div>
            <br>
            <center><a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
    </body>
@endsection
