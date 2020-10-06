@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-40">
            <div class="card">
                <div class="card-header"><h4><b><center>Registro de todas las empresas</center></b></h4></div>
                    <div class="card-body"> 
                        <ul class="list-group">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"><center>Identificador</center></th>
                                        <th scope="col"><center>Nombre de Empresa</center></th>
                                        <th scope="col"><center>Número telefónico de Empresa</center></th>
                                        <th scope="col"><center>Acción a realizar<center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($empresas as $empresa)
                                    <tr>
                                        <th scope="row"><center>{{$empresa->idDeLaEmpresa}}</center></th>
                                        <td><center>{{ $empresa->nombreDeLaEmpresa}}</center></td>
                                        <td><center>{{$empresa->numeroDeTelefonoDeLaEmpresa}}</center></td>
                                        <td><center><a href="/empresas/{{$empresa->idDeLaEmpresa}}" class="btn btn-primary">Consultar datos</a> |  
                                        <a href="/empresas/{{$empresa->idDeLaEmpresa}}/editar" class="btn btn-success">Editar datos</a> |
                                        <a href="/citas/{{$empresa->idDeLaEmpresa}}/agregar" class="btn btn-info">Agregar cita</a> |  
                                        <a href="/empresas/{{$empresa->idDeLaEmpresa}}/eliminar" class="btn btn-danger">Eliminar datos</a></center></td>
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
        <center><a href="/empresas/agregar" class="btn btn-dark">Registrar Empresa</a>    |   <a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
    </div>
</div>
@endsection
