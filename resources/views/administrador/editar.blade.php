@extends('layouts.appAdmin')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
           <h3><b><center>Editar datos de administrador registrado</center></h3></b>
        </div>

        <div class="card-body">

            <form action="/administradores/{{$administrador->id}}" method="POST">
                @csrf
                @method ('PUT')
                
                <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlSelect1">Rol</label>
                    <input type="text" class="form-control" readonly="rol" value="{{$administrador->rol}}"/> <br> 
                </div>
                <div class="col"> 
                    <label for="exampleFormControlSelect1">Estado</label>
                    <input type="text" class="form-control" readonly="estadoDelUsuarioAdministrador" value="{{$administrador->estadoDelUsuarioAdministrador}}"/> <br> 
                </div>    
            </div>

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
                    <label for="exampleFormControlSelect1">Número telefónico</label>
                    <input id="telefonoDelUsuarioAdministrador" type="number" class="form-control @error('telefonoDelUsuarioAdministrador') is-invalid @enderror" name="telefonoDelUsuarioAdministrador" value="{{$administrador->telefonoDelUsuarioAdministrador}}" required autocomplete="telefonoDelUsuarioAdministrador" autofocus>
                    @error('telefonoDelUsuarioAdministrador')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col"> 
                    <label for="exampleFormControlSelect1">Correo electrónico</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$administrador->email}}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>  

            <p></p>

            <div class="row">
                <div class="col">
                    <center><button type="submit" class="btn btn-success">Actualizar datos</button></center> 
                </div>
                <div class="col">
                    <center><a href="/administradores" class="btn btn-primary">Cancelar y Volver</a></center>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection