@extends('layouts.especial')
@extends('pop_up.modalPruebas')
@section('content')

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"><script src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
        <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">

        <script src="{{ asset('js/transacciones/transaccionesDePruebas.js') }}?v=<?php echo(rand()); ?>"defer></script>
        <script src="{{ asset('js/buscador/buscadorDeRegistros.js') }}?v=<?php echo(rand()); ?>"defer></script>
        
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    </head>


    <body>
        <div class="container-fluid">
            <div class="card-header titulo"><h4><b><center>REGISTRO DE ANÁLISIS</center></b></h4></div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <button type="button" class="btn btn-primary btnAgregar" data-toggle="modal" data-target="#agregarPrueba" data-toggle="tooltip" data-placement="right" title="Click para agregar datos de nuevo análisis"><span class="icon-lab"></span>Registrar nuevo Análisis</button>
                        </div>
                    </div>
                    <br>

                    <ul class="list-group">
                        <table id="registros" class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"><center>Código</center></th>
                                    <th scope="col"><center>Nombre</center></th>
                                    <th scope="col"><center>Máquina</center></th>
                                    <th scope="col"><center>Descripción</center></th>
                                    <th scope="col"><center>Costo</center></th>
                                    <th scope="col"><center>Descuento</center></th>
                                    <th scope="col"><center>Acción a realizar</center></th>
                                </tr>
                            </thead>

                            <tfoot class="thead-dark">
                                </tr>
                                    <th scope="col"><center>Código</center></th>
                                    <th scope="col"><center>Nombre</center></th>
                                    <th scope="col"><center>Máquina</center></th>
                                    <th scope="col"><center>Descripción</center></th>
                                    <th scope="col"><center>Costo</center></th>
                                    <th scope="col"><center>Descuento</center></th>
                                    <th scope="col"><center>Acción a realizar</center></th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach($pruebas as $prueba)
                                <tr>
                                <td><center>{{$prueba->codigoDelAnalisis}}</center></td>
                                <td><center>{{$prueba->nombreDelAnalisis}}</center></td>
                                <td><center>{{$prueba->numeroDeMaquina}}</center></td>
                                <td><center>{{$prueba->descripcionDelAnalisis}}</center></td>
                                <td><center>{{$prueba->costoDelAnalisis}}</center></td>
                                <td><center>{{$prueba->descuentoDelAnalisis}}</center></td>
                                    <td><center>
                                        <a href="#" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para actualizar los datos de este análisis"><span class="icon-loop2"></span>Actualizar</a> <br></br>
                                        <a href="#" class="btn btn-danger btnEliminar" data-toggle="tooltip" data-placement="right" title="Click para eliminar todo el registro de esta prueba"><span class="icon-bin"></span>Eliminar</a> <br></br>
                                    </center></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </ul>
                </div>
            </div>
            <br>
            <center><a href="/paquetes" class="btn btn-dark">Desplegar paquetes</a>    |    <a href="/catalogosAdmins" class="btn btn-dark">Ir al catálogo</a>    |    <a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
    </body>
@endsection

