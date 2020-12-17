@extends('layouts.especial')
@extends('pop_up.modalAdministradores')
@section('content')

    <head>
        @include('layouts.seccionesGenerales.cssDeTablas')
    </head>

    <body>
        @include('layouts.seccionesGenerales.css-jsDeModales')   
        <div class="container-fluid">
            <div class="card">
            <div class="card-header titulo"><h4><b><center>REGISTRO DE ADMINISTRADORES: INACTIVOS</center></b></h4></div>
                <div class="card-body">
                    <table  id="registros" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col"><center>ID</center></th>
                                <th scope="col"><center>Nombre</center></th>
                                <th scope="col"><center>Cédula</center></th>
                                <th scope="col"><center>Rol</center></th>
                                <th scope="col"><center>Estado</center></th>
                                <th scope="col"><center>Motivo reciente</center></th>
                                <th scope="col"><center>Acción a Realizar<center></th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th scope="col"><center>ID</center></th>
                                <th scope="col"><center>Nombre</center></th>
                                <th scope="col"><center>Cédula</center></th>
                                <th scope="col"><center>Rol</center></th>
                                <th scope="col"><center>Estado</center></th>
                                <th scope="col"><center>Motivo reciente</center></th>
                                <th scope="col"><center>Acción a Realizar<center></th>
                            </tr>
                        </tfoot>

                        <tbody>
                            @foreach($administradores as $administrador)
                                @if($administrador->estadoDelUsuarioAdministrador == 0)
                                <tr>
                                    <td><center>{{$administrador->id}}</center></td>
                                    <td><center>{{$administrador->primerApellidoAdministrador}} {{$administrador->segundoApellidoAdministrador}} {{$administrador->nombreDelUsuarioAdministrador}}</center></td>
                                    <td><center>{{$administrador->dniDelUsuarioAdministrador}}</center></td>
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
                                    <td><center>{{$administrador->motivoDeEstadoDelUsuarioAdministrador}}</center></td>
                                    <td><center>
                                        <a href="#" class="btn btn-success btnActivar" data-toggle="tooltip" data-placement="right" title="Click para conceder a este administrador el acceso al sistema"><span class="icon-user"> </span><span class="icon-checkmark"></span></a>
                                    </center></td>
                                </tr>
                                @endif
                            @endforeach   
                        </tbody>
                    </table>
                    <script src="{{ asset('js/transacciones/administradores.js') }}?v=<?php echo(rand()); ?>"defer></script>
                </div>
            </div>
            <center><a href="/administradores/activos" class="btn btn-dark">Administradores Activos</a>    |   <a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div> 
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>  
@endsection
