@extends('layouts.appAdmin')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3><b><center>Consultar Empresa registrada y sus Citas</center></b></h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlSelect1">Identificador</label>
                    <input type="text" class="form-control" readonly="idDeLaEmpresa" value="{{$empresa->idDeLaEmpresa}}"/> <br>
                </div>
                <div class="col">
                    <label for="exampleFormControlSelect1">Nombre</label>
                    <input type="text" class="form-control" readonly="nombreDeLaEmpresa" value="{{$empresa->nombreDeLaEmpresa}}"/> <br>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="exampleFormControlSelect1">Número telefónico</label>
                    <input type="text" class="form-control" readonly="numeroDeTelefonoDeLaEmpresa" value="{{$empresa->numeroDeTelefonoDeLaEmpresa}}"/> <br>
                </div>
                <div class="col">
                    <label for="exampleFormControlSelect1">Correo electrónico</label>
                    <input type="text" class="form-control" readonly="correoElectronicoDeLaEmpresa" value="{{$empresa->correoElectronicoDeLaEmpresa}}"/> <br>
                </div>
            </div>

            <label for="exampleFormControlSelect1">Ubicación (dirección exacta)</label>
            <textarea class="form-control" cols="30" rows="5" readonly="direccionDeLaEmpresa">{{$empresa->direccionDeLaEmpresa}}</textarea> <br>

            <div class="row">
                <div class="col">
                    <label for="exampleFormControlSelect1">Fecha y Hora de Registro</label>
                    <input type="text" class="form-control" readonly="fechaDeRegistro" value="{{$empresa->created_at}}"/> <br>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <center><button class="btn btn-primary" type="button" title="Para ocultar la lista vuelva a presionar este botón" data-toggle="collapse" data-target="#listaCitas" aria-expanded="false" aria-controls="listaCitas">Despliegue la lista de citas</button></center>
                </div>
                <div class="col">
                    <center><a href="/empresas" class="btn btn-danger">Regresar a la lista</a></center>
                </div>
                <div class="col">
                    <center><a href="/homeAdmins" class="btn btn-danger">Ir al menú principal</a></center>
                </div>
            </div>
        </div>
    </div>


    <p>

</p>
<div class="collapse" id="listaCitas">
    <div class="card">
        <div class="card-header"><h4><b><center>Registro de citas<center></b></h4></div>
            <div class="card-body">
            <div class="alert alert-info" role="alert">
                <center>¡Lista de citas ordenada de forma <i>descendente, según fecha de regristro</i> en el sistema!</center>
            </div>
                <ul class="list-group">
                    <table class="table">
                    <thead class="thead-dark">
                            <tr>
                                <th scope="col"><center>Fecha de cita</center></th>
                                <th scope="col"><center>Hora de cita</center></th>
                                <th scope="col"><center>Clientes totales por atender</center></th>
                                <th scope="col"><center>Análisis solicitados</center></th>
                                <th scope="col"><center>Acción a realizar</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($citas as $cita)
                            @if($empresa->idDeLaEmpresa === $cita->idDeLaEmpresa)
                                <tr>
                                    <th scope="row"><center>{{ $cita->fechaDeCita}}</center></th>
                                    <td><center>{{$cita->horaDeCita}}</center></td>
                                    <td><center>{{$cita->numeroDeClientesPorAtender}}</center></td>
                                    <td><center>{{$cita->tiposDeAnalisisRequeridos}}</center></td>
                                    <td><center><a href="/citas/{{$cita->idDeLaCita}}" class="btn btn-primary">Consultar datos</a> |
                                    <a href="/citas/{{$cita->idDeLaCita}}/editar" class="btn btn-success">Editar</a> |
                                    <a href="/citas/{{$cita->idDeLaCita}}/eliminar" class="btn btn-danger">Eliminar</a></center></td>
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
@endsection
