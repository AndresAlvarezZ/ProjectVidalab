@extends('layouts.especial')
@extends('pop_up.modalPruebas')
@section('content')
    <head>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"><script src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="js/transacciones/transaccionesDePruebas.js"></script>
        <script src="js/buscadores/buscadorDePruebas.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    </head>

    <body>
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
        <center><a href="/pruebas/agregar" class="btn btn-dark">Registrar Análisis</a>    |   <a href="/paquetes" class="btn btn-dark">Desplegar paquetes de análisis</a>    |    <a href="/catalogosAdmins" class="btn btn-dark">Ir al catálogo</a>    |    <a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
    </div>
    </body>  
@endsection
