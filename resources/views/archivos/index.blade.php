@extends('layouts.especial')
@extends('pop_up.modalArchivos')
@section('content')

    <head>
        @include('layouts.seccionesGenerales.cssDeTablas')
    </head>

    <body>
        @include('layouts.seccionesGenerales.css-jsDeModales')   
        <div class="container-fluid">
            <div class="title">
				<h2 class="tituloDeRegistro"><span>R</span>gistro de <span>C</span>ontenido <span>M</span>ultimedia</h2>
			</div>
            <div class="card-header titulo"><h4><b><center>Registro de Contenido Multimedia</center></b></h4></div>
            <div class="card-body">
                @if (session('status'))

                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script src="{{ asset('js/agregacion.js') }}?v=<?php echo(rand()); ?>"defer></script>
                @endif
                @if (session('status1'))

                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script src="{{ asset('js/actualizacion.js') }}?v=<?php echo(rand()); ?>"defer></script>
                @endif
                @if (session('status2'))

                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script src="{{ asset('js/eliminacion.js') }}?v=<?php echo(rand()); ?>"defer></script>
                @endif
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <button type="button" class="btn btn-primary btnAgregarMultimedia" data-toggle="modal" data-target="#agregarArchivo" data-toggle="tooltip" data-placement="right" title="Click para agregar datos de nuevo contenido"><span class="icon-camera"> </span>Agregar Contenido</button>
                    </div>
                    <br>
                    <br>
                    <div class="col-lg-12 margin-tb">
                        <a href="/galeria/administrativa" type="button" class="btn btn-primary btnVerMultimedia"  data-placement="right" title="Ver contenido completo"><span class="icon-eye"> </span>Ver el Contenido</a>
                    </div>
                </div>
                <br>

                <table id="registros" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col"><center>Identificador</center></th>
                            <th scope="col"><center>Tipo</center></th>
                            <th scope="col"><center>Nombre del archivo</center></th>
                            <th scope="col"><center>Descripción</center></th>
                                <th scope="col"><center>Acción<center></th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                        <th scope="col"><center>Identificador</center></th>
                        <th scope="col"><center>Tipo</center></th>
                        <th scope="col"><center>Nombre del archivo</center></th>
                        <th scope="col"><center>Descripción</center></th>
                            <th scope="col"><center>Acción<center></th>
                        </tr>
                    </tfoot>

                    <tbody>
                        @foreach($archivos as $archivo)
                        <tr>
                            <td><center>{{$archivo->id}}</center></td>
                            <td><center>{{$archivo->tipoDeArchivo}}</center></td>
                            <td><center>{{$archivo->nombreDelArchivo}}</center></td>
                            <td><center>{{$archivo->descripcionDelArchivo}}</center></td>
                            <td><center>
                                <a href="#" class="btn btn-info btnEditar" data-toggle="tooltip" data-placement="right" title="Click para actualizar registro multimedia"><span class="icon-loop2"></span></a>
                                <a href="#" class="btn btn-danger btnEliminar" data-toggle="tooltip" data-placement="right" title="Click para eliminar registro multimedia"><span class="icon-bin"></span></a>
                            </center></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <script src="{{ asset('js/transacciones/transaccionesDeMultimedios.js') }}?v=<?php echo(rand()); ?>"defer></script>
            </div>
            <br>
            <center><a href="/homeAdmins" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>
@endsection
