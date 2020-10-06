@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4><b><center>Registro de Paquetes de Análisis</center></b></h4></div>
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
                                    @foreach($paquetes as $paquete)
                                        <tr>
                                            <th scope="row"><center>{{ $paquete->codigoDelPaquete}}</center></th>
                                            <th scope="row"><center>{{ $paquete->nombreDelPaquete}}</center></th>
                                            <td><center>₡ {{$paquete->costoDelPaquete}}</center></td>
                                            <td><center><a href="/paquetes/{{$paquete->idDelPaquete}}" class="btn btn-primary">Consultar datos</a> |  
                                            <a href="/paquetes/{{$paquete->idDelPaquete}}/editar" class="btn btn-success">Editar datos</a> |
                                            <a href="/paquetes/{{$paquete->idDelPaquete}}/eliminar" class="btn btn-danger">Eliminar datos</a> </center></td>
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
        <center><a href="/paquetes/agregar" class="btn btn-dark">Registrar Paquete</a>    |   <a href="/pruebas" class="btn btn-dark">Desplegar lista de análisis</a>    |    <a href="/catalogos" class="btn btn-dark">Ir al catálogo</a>    |    <a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
    </div>
</div>
@endsection