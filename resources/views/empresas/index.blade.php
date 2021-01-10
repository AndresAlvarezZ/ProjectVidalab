@extends('layouts.especial')
@extends('pop_up.modalEmpresas')
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
                        <button type="button" class="btn btn-primary btnImportar" data-toggle="modal" data-target="#importarRegistros" data-toggle="tooltip" data-placement="right" title="Click para importar todos los registros"><span class="icon-lab"> </span><span class="icon-table2"> </span>Importar Registros</button>
                    </div>
                </div>
                <br>

                <ul class="list-group">
                    <table id="registros" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col"><center>Código</center></th>
                                <th scope="col"><center>Nombre</center></th>
                                <th scope="col"><center>Número Telefónico</center></th>
                                <th scope="col"><center>Correo Electrónico<center></th>
                                <th scope="col"><center>Ubicación<center></th>
                                <th scope="col"><center>Acción a Realizar<center></th>
                            </tr>
                        </thead>

                        <tfoot>
                            </tr>
                                <th scope="col"><center>Identificador</center></th>
                                <th scope="col"><center>Nombre</center></th>
                                <th scope="col"><center>Número Telefónico</center></th>
                                <th scope="col"><center>Correo Electrónico<center></th>
                                <th scope="col"><center>Ubicación<center></th>
                                <th scope="col"><center>Acción a Realizar<center></th>
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
                                    <button type="button" class="btn btn-primary btnAgregarCita" data-toggle="modal" data-target="#agregarCita" data-toggle="tooltip" data-placement="right" title="Click para agregar datos de nueva cita"><span class="icon-calendar"></span></button></p>
                                    <a href="/empresas/{{$empresa->idDeLaEmpresa}}" class="btn btn-warning btnCitas"  data-placement="right" title="Click para ver citas de esta empresa"><span class="icon-folder-plus"></span></a>
                                    <a href="#" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para actualizar los datos de esta empresa"><span class="icon-loop2"></span></a>
                                    <a href="#" class="btn btn-danger btnEliminar" data-toggle="tooltip" data-placement="right" title="Click para eliminar todo el registro de esta empresa"><span class="icon-bin"></span></a>
                                </center></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <script src="{{ asset('js/transacciones/transaccionesDeEmpresas.js') }}?v=<?php echo(rand()); ?>"defer></script>
                </ul>
            </div>
            <br>
            <center><a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>
@endsection
