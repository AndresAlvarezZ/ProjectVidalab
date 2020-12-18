@extends('layouts.especial')
@section('content')

    <head>
        @include('layouts.seccionesGenerales.cssDeTablas')
    </head>

    <body>
        @include('layouts.seccionesGenerales.css-jsDeModales')   
        <div class="container-fluid">
            <div class="title">
				<h2 class="tituloDeRegistro"><span>R</span>egistro de <span>E</span>mpresas</h2>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <button type="button" class="btn btn-primary btnAgregar" data-toggle="modal" data-target="#agregarEmpresa" data-toggle="tooltip" data-placement="right" title="Click para agregar datos de nueva empresa"><span class="icon-office"> </span>Registrar nueva Empresa</button>
                    </div>
                </div>
                <br>

                <ul class="list-group">
                    <table id="registros" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col"><center>Nombre</center></th>
                                <th scope="col"><center>Fecha de Nacimiento</center></th>
                                <th scope="col"><center>Edad<center></th>
                                <th scope="col"><center>Hijos<center></th>
                                <th scope="col"><center>Correo<center></th>
                                <th scope="col"><center>Teléfono<center></th>
                                <th scope="col"><center>Domicilio<center></th>
                            </tr>
                        </thead>

                        <tfoot>
                            </tr>
                                <th scope="col"><center>Nombre</center></th>
                                <th scope="col"><center>Fecha de Nacimiento</center></th>
                                <th scope="col"><center>Edad<center></th>
                                <th scope="col"><center>Hijos<center></th>
                                <th scope="col"><center>Correo<center></th>
                                <th scope="col"><center>Teléfono<center></th>
                                <th scope="col"><center>Domicilio<center></th>
                            </tr>
                        </tfoot>

                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td><center>{{$cliente->nombreDelCliente}} {{$cliente->segundoNombreDelCliente}} {{$cliente->primerApellidoDelCliente}} {{$cliente->segundoApellidoDelCliente}}</center></td>
                                <td><center>{{$cliente->fechaDeNacimientoDelCliente}}</center></td>
                                <td><center>Edad calculada en tiempo real</center></td>
                                <td><center>{{$cliente->numeroDeHijosDelcliente}}</center></td>
                                <td><center>{{$cliente->correoDelCliente}}</center></td>
                                <td><center>{{$cliente->telefonoDelCliente}}</center></td>
                                <td><center>{{$cliente->domicilioDelCliente}}</center></td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </ul>
            </div>
            <br>
            <center><a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>
@endsection
