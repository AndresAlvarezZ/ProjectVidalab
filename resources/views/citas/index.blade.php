@extends('layouts.appAdmin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4><b><center>Registro de Citas de todas las Empresas</center></b></h4></div>
                    <div class="card-body">
                        <div class="alert alert-info" role="alert">
                            <center>¡Lista de citas ordenada de forma <i>descendente, según fecha de regristro</i> en el sistema!</center>
                        </div>
                        <ul class="list-group">
                            <table class="table">
                            <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"><center>Identificador</center></th>
                                        <th scope="col"><center>Fecha de cita</center></th>
                                        <th scope="col"><center>Hora de cita</center></th>
                                        <th scope="col"><center>Clientes totales por atender</center></th>
                                        <th scope="col"><center>Análisis solicitados</center></th>
                                        <th scope="col"><center>Solicitante</center></th>
                                        <th></th>
                                        <th scope="col"><center>Acción a realizar</center></th>
                                    </tr>
                                </thead>
                               <tbody>
                                    @foreach($citas as $cita)
                                        <tr>
                                            <th scope="row"><center>{{ $cita->idDeLaEmpresa}}</center></th>
                                            <th scope="row"><center>{{ $cita->fechaDeCita}}</center></th>
                                            <td><center>{{$cita->horaDeCita}}</center></td>
                                            <td><center>{{$cita->numeroDeClientesPorAtender}}</center></td>
                                            <td><center>{{$cita->tiposDeAnalisisRequeridos}}</center></td>
                                            <td><center>{{$cita->nombreDelSolicitante}} {{$cita->primerApellidoDelSolicitante}} {{$cita->segundoApellidoDelSolicitante}}</center></td>
                                            <td></td>
                                            <td><a href="/empresas/{{$cita->idDeLaEmpresa}}" class="btn btn-primary">Ir al Registro</a> </center></td>
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
        <center><a href="/homeAdmins" class="btn btn-danger">Ir al menú principal</a></center>
    </div>
</div>
@endsection
