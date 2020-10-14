@extends('layouts.appAdmin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4><b><center>Registro de Analisis</center></b></h4></div>
                    <div class="card-body">
                        <ul class="list-group">
                            <table class="table">
                            <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"><center>Código</center></th>
                                        <th scope="col"><center>Nombre</center></th>
                                        <th scope="col"><center>Costo</center></th>
                                        <th scope="col"><center>Acción a realizar</center></th>
                                    </tr>
                                </thead>
                               <tbody>
                                    @foreach($pruebas as $prueba)
                                        <tr>
                                            <th scope="row"><center>{{ $prueba->codigoDelAnalisis}}</center></th>
                                            <th scope="row"><center>{{ $prueba->nombreDelAnalisis}}</center></th>
                                            <td><center>₡ {{$prueba->costoDelAnalisis}}</center></td>
                                            <td><center><a href="/pruebas/{{$prueba->codigoDelAnalisis}}" class="btn btn-primary">Consultar datos</a> |
                                            <a href="/pruebas/{{$prueba->codigoDelAnalisis}}/editar" class="btn btn-success">Editar datos</a> |
                                            <a href="/pruebas/{{$prueba->codigoDelAnalisis}}/eliminar" class="btn btn-danger">Eliminar datos</a> </center></td>
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
        <center><a href="/pruebas/agregar" class="btn btn-dark">Registrar Análisis</a>    |   <a href="/paquetes" class="btn btn-dark">Desplegar paquetes de análisis</a>    |    <a href="/catalogos" class="btn btn-dark">Ir al catálogo</a>    |    <a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
    </div>
</div>
@endsection
