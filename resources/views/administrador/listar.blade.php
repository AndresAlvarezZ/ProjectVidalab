@extends('layouts.especial')
@extends('pop_up.modalAdministradores')
@section('content')

    <head>
        @include('layouts.seccionesGenerales.cssDeTablas')
    </head>

    <body>
        @include('layouts.seccionesGenerales.css-jsDeModales')   
        <div class="container-fluid">
            <div class="title">
				<h2 class="tituloDeRegistro"><span>R</span>egistro de <span>A</span>dministradores</h2>
			</div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <button type="button" class="btn btn-primary btnAgregar" data-toggle="modal" data-target="#agregarAdministrador" data-toggle="tooltip" data-placement="right" title="Click para agregar datos de nuevo administrador(a)"><span class="icon-user"> </span>Registrar nuevo Administrador(a)</button></p>
                    </div>
                </div>

                <table  id="registros" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col"><center>ID</center></th>
                            <th scope="col"><center>Nombre</center></th>
                            <th scope="col"><center>Cédula</center></th>
                            <th scope="col"><center>Teléfono</center></th>
                            <th scope="col"><center>Correo</center></th>
                            <th scope="col"><center>Rol</center></th>
                            <th scope="col"><center>Estado</center></th>
                            <th scope="col"><center>Acción a Realizar<center></th>
                        </tr>
                    </thead>

                    <tfoot>
                        </tr>
                            <th scope="col"><center>ID</center></th>
                            <th scope="col"><center>Nombre</center></th>
                            <th scope="col"><center>Cédula</center></th>
                            <th scope="col"><center>Teléfono</center></th>
                            <th scope="col"><center>Correo</center></th>
                            <th scope="col"><center>Rol</center></th>
                            <th scope="col"><center>Estado</center></th>
                            <th scope="col"><center>Acción a Realizar<center></th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <tr>
                            <td><center>{{$superAdministradores->id}}</center></td>
                            <td><center>{{$superAdministradores->primerApellidoAdministrador}} {{$superAdministradores->segundoApellidoAdministrador}} {{$superAdministradores->nombreDelUsuarioAdministrador}}</center></td>
                            <td><center>{{$superAdministradores->dniDelUsuarioAdministrador}}</center></td>
                            <td><center>{{$superAdministradores->telefonoDelUsuarioAdministrador}}</center></td>
                            <td><center>{{$superAdministradores->email}}</center></td>
                            <td><center>
                                @if($superAdministradores->rol == 1)
                                    Super Administrador
                                @else
                                    Administrador
                                @endif
                            </center></td>
                            <td><center>Activo</center></td>
                            <td><center>
                                @if(auth()->administrador()->rol == $superAdministradores->rol)
                                <a href="#" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para actualizar los datos de este administrador"><span class="icon-loop2"></span></a>
                                @endif
                            </center></td>
                        </tr>

                        @foreach($administradores as $administrador)
                        <tr>
                            <td><center>{{$administrador->id}}</center></td>
                            <td><center>{{$administrador->primerApellidoAdministrador}} {{$administrador->segundoApellidoAdministrador}} {{$administrador->nombreDelUsuarioAdministrador}}</center></td>
                            <td><center>{{$administrador->dniDelUsuarioAdministrador}}</center></td>
                            <td><center>{{$administrador->telefonoDelUsuarioAdministrador}}</center></td>
                            <td><center>{{$administrador->email}}</center></td>
                            <td><center>
                                @if($administrador->rol == 1)
                                    Super Administrador
                                @else
                                    Administrador
                                @endif
                            </center></td>
                            <td><center>
                                @if($administrador->estadoDelUsuarioAdministrador == 1)
                                    Activo
                                @else
                                    Inactivo
                                @endif
                            </center></td>
                            <td><center>
                                <a href="#" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para actualizar los datos de este administrador"><span class="icon-loop2"></span></a>
                                @if($administrador->estadoDelUsuarioAdministrador == 1)
                                    <a href="#" class="btn btn-danger btnInactivar"  data-placement="right" title="Click para denegar acceso al administrador(a)"><span class="icon-user"> </span><span class="icon-cross"></span></a>
                                @else
                                    <a href="#" class="btn btn-success btnActivar" data-placement="right" title="Click para conceder el acceso al administrador(a)"><span class="icon-user"> </span><span class="icon-checkmark"></span></a>
                                @endif
                            </center></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <script src="{{ asset('js/transacciones/administradores.js') }}?v=<?php echo(rand()); ?>"defer></script>
            </div>
            <br>
            <center><a href="/administradores/activos" class="btn btn-dark">Administradores Activos</a>    |   <a href="/administradores/inactivos" class="btn btn-dark">Administradores Inactivos</a>    |   <a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center></center>
        </div>
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>
@endsection
