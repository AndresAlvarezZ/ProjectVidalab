@extends('layouts.appAdmin')

@section('content')
    
<div class="container"> 
    <div class="card">
        <div class="card-header">
            <h3><b><center>Consultar administradores registrados</center></b></h3>  
        </div>

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
                    <input type="text" class="form-control" readonly="telefonoDelUsuarioAdministrador" value="{{$administrador->telefonoDelUsuarioAdministrador}}"/> <br> 
                </div>
                <div class="col"> 
                    <label for="exampleFormControlSelect1">Correo electrónico</label>
                    <input type="text" class="form-control" readonly="email" value="{{$administrador->email}}"/> <br> 
                </div>
            </div>  

            <div class="row">
                <div class="col">
                    <center><a href="/administradores" class="btn btn-danger">Regresar a la lista</a></center> 
                </div>
                <div class="col">
                    <center><a href="/homeAdmins" class="btn btn-danger">Ir al menú principal</a></center> 
                </div>          
            </div>
        </div> 
    </div>
</div>                    
@endsection