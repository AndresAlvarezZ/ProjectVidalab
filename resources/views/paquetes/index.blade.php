@extends('layouts.especial')
@extends('pop_up.modalPaquetes')
@section('content')

    <head>
        @include('layouts.seccionesGenerales.cssDeTablas')
        <link href="{{ asset('css/menuAdministrador.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    </head>

    <body>
        @include('layouts.seccionesGenerales.css-jsDeModales')   
        <div class="container-fluid">
            <div class="title">
				<h2 class="tituloDeRegistro"><span>R</span>egistro de <span>P</span>aquetes</h2>
			</div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <button type="button" class="btn btn-primary btnAgregar" data-toggle="modal" data-target="#agregarPaquete" data-toggle="tooltip" data-placement="right" title="Click para agregar datos de nueva cita"><span class="icon-lab"> </span>Registrar nuevo Paquete</button>
                    </div>
                </div>
                <br>

                <table id="registros" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col"><center>Código</center></th>
                            <th scope="col"><center>Nombre</center></th>
                            <th scope="col"><center>Imagen</center></th>
                            <th scope="col"><center>Descripción</center></th>
                            <th scope="col"><center>Costo</center></th>
                            <th scope="col"><center>Acción a realizar</center></th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th scope="col"><center>Código</center></th>
                            <th scope="col"><center>Nombre</center></th>
                            <th scope="col"><center>Imagen</center></th>
                            <th scope="col"><center>Descripción</center></th>
                            <th scope="col"><center>Costo</center></th>
                            <th scope="col"><center>Acción a realizar</center></th>
                        </tr>
                    </tfoot>

                    <tbody>
                        @foreach($paquetes as $paquete)
                        <tr>
                            <td><center>{{$paquete->codigoDelPaquete}}</center></td>
                            <td><center>{{$paquete->nombreDelPaquete}}</center></td>
                            <td><center>{{$paquete->imagenDelPaquete}}</center></td>
                            <td><center>{{$paquete->descripcionDelPaquete}}</center></td>
                            <td><center>{{$paquete->costoDelPaquete}}</center></td>
                            <td><center>
                                <button type="button" class="btn btn-primary btnImagen" data-toggle="modal" data-target="#agregarImagen" data-toggle="tooltip" data-placement="right" title="Click para agregar imagen de paquete"><span class="icon-camera"></span></button>
                                <a href="#" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para actualizar los datos de este paquete"><span class="icon-loop2"></span></a>
                                <a href="#" class="btn btn-danger btnEliminar" data-toggle="tooltip" data-placement="right" title="Click para eliminar todo el registro de este paquete"><span class="icon-bin"></span></a>
                            </center></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <script src="{{ asset('js/transacciones/transaccionesDePaquetes.js') }}?v=<?php echo(rand()); ?>"defer></script>
            </div>
            <br>
            <center><a href="/pruebas" class="btn btn-dark">Desplegar lista de análisis</a>    |    <a href="/catalogosAdmins" class="btn btn-dark">Ir al catálogo</a>    |    <a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>
@endsection
