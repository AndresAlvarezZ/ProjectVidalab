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
				<h2 class="tituloDeRegistro"><span>R</span>egistro de <span>C</span>ontenido <span>M</span>ultimedia</h2>
			</div>
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
                            <th scope="col"><center>Archivo</center></th>
                            <th scope="col"><center>Descripción</center></th>
                            <th scope="col"><center>Acción a Realizar<center></th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th scope="col"><center>Identificador</center></th>
                            <th scope="col"><center>Tipo</center></th>
                            <th scope="col"><center>Archivo</center></th>
                            <th scope="col"><center>Descripción</center></th>
                            <th scope="col"><center>Acción a Realizar<center></th>
                        </tr>
                    </tfoot>

                    <tbody>
                        @foreach($archivos as $archivo)
                        <tr>
                            <td><center>{{$archivo->id}}</center></td>

                            @if($archivo->tipoDeArchivo == 1)
                                <td><center>Imagen</center></td>
                            @else
                                <td><center>Video</center></td>
                            @endif

                            @if($archivo->tipoDeArchivo == 1)
                                <td><center>  <img src="/archivosMultimedia/{{$archivo->nombreDelArchivo}}" style="heigh: 160px; width:160px;"> </center></td>
                            @else
                                <td><center>  <video src="/archivosMultimedia/{{$archivo->nombreDelArchivo}}" controls type="video/mp4" style="heigh: 160px; width:160px;"> </center></td>
                            @endif
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
        </div>
        @include('layouts.seccionesGenerales.jsDeTablas')
    </body>
@endsection
