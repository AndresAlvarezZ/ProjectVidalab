@extends('layouts.especial')
@extends('pop_up.modalEmpresas')
@section('content')
    <head>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"><script src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="{{ asset('js/transacciones/transaccionesDeEmpresas.js') }}?v=<?php echo(rand()); ?>"defer></script>
        <script src="{{ asset('js/buscador/buscadorDeRegistros.js') }}?v=<?php echo(rand()); ?>"defer></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    </head>

    <body>
        <div class="container-fluid">
            <div class="card-header"><h4><b><center>REGISTRO DE EMPRESAS</center></b></h4></div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarEmpresa">Registrar nueva Empresa</button>
                        </div>
                    </div>
                    <br>

                    <ul class="list-group">
                        <table id="registros" class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"><center>Código</center></th>
                                    <th scope="col"><center>Nombre</center></th>
                                    <th scope="col"><center>Número Telefónico</center></th>
                                    <th scope="col"><center>Correo Electrónico<center></th>
                                    <th scope="col"><center>Ubicación<center></th>
                                    <th scope="col"><center>Acción<center></th>
                                </tr>
                            </thead>

                            <tfoot class="thead-dark">
                                </tr>
                                    <th scope="col"><center>Identificador</center></th>
                                    <th scope="col"><center>Nombre</center></th>
                                    <th scope="col"><center>Número Telefónico</center></th>
                                    <th scope="col"><center>Correo Electrónico<center></th>
                                    <th scope="col"><center>Ubicación<center></th>
                                    <th scope="col"><center>Acción<center></th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach($empresas as $empresa)
                                <tr>
                                    <td><center>{{$empresa->idDeLaEmpresa}}</center></td>
                                    <td><center>{{$empresa->nombreDeLaEmpresa}}</center></td>
                                    <td><center>{{$empresa->numeroDeTelefonoDeLaEmpresa}}</center></td>
                                    <td><center>{{$empresa->correoElectronicoDeLaEmpresa}}</center></td>
                                    <td><center>{{$empresa->direccionDeLaEmpresa}}</center></td>
                                    <td><center>
                                        <a href="/empresas/{{$empresa->idDeLaEmpresa}}" class="btn btn-warning">Sus citas</a> <br></br>
                                        <a href="#" class="btn btn-info btnEditar">Actualizar</a> <br></br>
                                        <a href="#" class="btn btn-danger btnEliminar">Eliminar</a> <br></br>
                                    </center></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </ul>
                </div>
            </div>
            <br>
            <center><a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
    </body>
@endsection
