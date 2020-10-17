@extends('layouts.appAdmin')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
           <h3><b><center>Actualizar estado de sministrador</center></h3></b>
        </div>

        <div class="card-body">

            <form action="/administradores/estado/{{$administrador->id}}" method="POST">
                @csrf
                @method ('PUT')

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Identificación</label>
                        <input type="text" class="form-control" readonly="dniDelUsuarioAdministrador" value="{{$administrador->dniDelUsuarioAdministrador}}"/> <br>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Nombre</label>
                        <input type="text" class="form-control" readonly="nombreDelUsuarioAdministrador" value="{{$administrador->nombreDelUsuarioAdministrador}}"/> <br>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Primer apellido</label>
                        <input type="text" class="form-control" readonly="primerApellidoAdministrador" value="{{$administrador->primerApellidoAdministrador}}"/> <br>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Segundo apellido</label>
                        <input type="text" class="form-control" readonly="segundoApellidoAdministrador" value="{{$administrador->segundoApellidoAdministrador}}"/> <br>
                    </div>
                </div>

                <div class="row">

                    <div class="col">
                        <label for="exampleFormControlSelect1">Estado Actual</label>
                        <br>
                        @if ($administrador->estadoDelUsuarioAdministrador == true)
                            <input type="text" class="alert alert-success" name="estadoDelUsuarioAdministrador" readonly="estadoDelUsuarioAdministrador" value="Activo"/> <br>
                        @else
                            <input type="text" class="alert alert-danger" name="estadoDelUsuarioAdministrador" readonly="estadoDelUsuarioAdministrador" value= "Inactivo"/> <br>
                        @endif
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Motivo</label>
                        <input type="text" class="form-control" readonly="motivoDeEstadoDelUsuarioAdministrador" value="{{$administrador->motivoDeEstadoDelUsuarioAdministrador}}"/>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Estado a asignar</label> <br>
                        @if ($administrador->estadoDelUsuarioAdministrador == true)

                            <input type="text" class="alert alert-danger" name="estadoDelUsuarioAdministrador" readonly="estadoDelUsuarioAdministrador" value="false"/> <br>
                            <label for="exampleFormControlSelect1">Motivo de inactividad</label>
                        @else
                            <input type="text" class="alert alert-success" name="estadoDelUsuarioAdministrador" readonly="estadoDelUsuarioAdministrador" value= "true"/> <br>
                            <label for="exampleFormControlSelect1">Motivo de actividad</label>
                        @endif
                    </div>
                </div>


                <input type="text" class="form-control" placeholder="Escriba el motivo de cambio de estado" name="motivoDeEstadoDelUsuarioAdministrador" value="{{old('motivoDeEstadoDelUsuarioAdministrador')}}" />
                @error('motivoDeEstadoDelUsuarioAdministrador')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <p></p>

                <div class="row">
                    <div class="col">
                        <center>
                            @if ($administrador->estadoDelUsuarioAdministrador == true)
                                <button type="submit" class="btn btn-danger">Desactivar</button>
                            @else
                                <button type="submit" class="btn btn-success">Activar</button>
                            @endif
                        </center>
                    </div>
                    <div class="col">
                        <center><a href="/administradores" class="btn btn-primary">Cancelar y Volver</a></center>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
