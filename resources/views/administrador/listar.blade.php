@extends('layouts.appAdmin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-40">
            <div class="card">
                <div class="card-header"><h4><b><center>Registro de Administradores</center></b></h4></div>
                    <div class="card-body"> 
                        <ul class="list-group">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"><center>Nombre</center></th>
                                        <th scope="col"><center>Identificación </center></th>
                                        <th scope="col"><center>Rol</center></th>
                                        <th scope="col"><center>Estado<center></th>
                                        <th scope="col"><center>Acción a realizar<center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><center>{{$superAdministradores->primerApellidoAdministrador}} {{$superAdministradores->segundoApellidoAdministrador}} {{$superAdministradores->nombreDelUsuarioAdministrador}} </center></th>
                                        <th scope="row"><center>{{ $superAdministradores->dniDelUsuarioAdministrador}}</center></td>
                                        <th scope="row"><center>
                                                        @if($superAdministradores->rol == true)
                                                            Super Administrador
                                                        @else
                                                            Administrador
                                                        @endif
                                                        </center></td>
                                        <th scope="row"><center>Activo</center></td>
                                        <td><center><a href="/administradores/{{$superAdministradores->id}}" class="btn btn-primary">Consultar datos</a> |  
                                        <a href="/administradores/{{$superAdministradores->id}}/editar" class="btn btn-success">Editar datos</a>
                                        </center>
                                        </td>
                                    </tr>

                                    @foreach($administradores as $administrador)
                                    <tr>
                                        <th scope="row"><center>{{$administrador->primerApellidoAdministrador}} {{$administrador->segundoApellidoAdministrador}} {{$administrador->nombreDelUsuarioAdministrador}} </center></th>
                                        <td><center>{{ $administrador->dniDelUsuarioAdministrador}}</center></td>
                                        <td><center>
                                                @if($administrador->rol == true)
                                                    Super Administrador
                                                @else
                                                    Administrador
                                                @endif
                                            </center></td>
                                        <td><center>
                                            @if($administrador->estadoDelUsuarioAdministrador == true)
                                                Activo
                                            @else
                                                Inactivo
                                            @endif
                                        </center></td>
                                        <td><center><a href="/administradores/{{$administrador->id}}" class="btn btn-primary">Consultar datos</a> |  
                                        <a href="/administradores/{{$administrador->id}}/editar" class="btn btn-success">Editar datos</a>
                                        </center>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <center><a href="/nuevoAdministrador" class="btn btn-dark">Registrar administrador</a>    |   <a href="/administradores/activos" class="btn btn-dark">Administradores Activos</a>    |   <a href="/administradores/inactivos" class="btn btn-dark">Administradores Inactivos</a>    |   <a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
    </div>
</div>
@endsection
