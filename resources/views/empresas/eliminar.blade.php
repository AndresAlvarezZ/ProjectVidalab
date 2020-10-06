@extends('layouts.app')

@section('content')
    
<div class="container">

    <div class="card">
        <div class="card-header">
            <h3><b><center>Eliminar Empresa registrada</center></b></h3>  
        </div>
        <div class="card-body">
            <form action="/empresas/{{$empresa->idDeLaEmpresa}}" method="POST">
                @csrf   
                @method('DELETE')

                <div class="alert alert-danger" role="alert">
                    <center>¡Lea cuidadosamente la información y recuerde que si tiene citas registradas no podrá eliminar este registro! 
                    <b>¿Realmente desea eliminar este registro?.</b></center>
                </div>

                <div class="row">
                    <div class="col">
                    <label for="exampleFormControlSelect1">Nombre</label>
                        <input type="text" class="form-control" name="nombreDeLaEmpresa" readonly="nombreDeLaEmpresa" value="{{$empresa->nombreDeLaEmpresa}}"/> <br> 
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Identificador</label>
                        <input type="text" class="form-control" name="idDeLaEmpresa" readonly="idDeLaEmpresa" value="{{$empresa->idDeLaEmpresa}}"/> <br> 
                    </div>
                </div> 
                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Número telefónico</label>
                        <input type="text" class="form-control" name="numeroDeTelefonoDeLaEmpresa" readonly="numeroDeTelefonoDeLaEmpresa" value="{{$empresa->numeroDeTelefonoDeLaEmpresa}}"/> <br> 
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Correo electrónico</label>
                        <input type="text" class="form-control"name="correoElectronicoDeLaEmpresa" readonly="correoElectronicoDeLaEmpresa" value="{{$empresa->correoElectronicoDeLaEmpresa}}"/> <br>                
                    </div>
                </div>

                <label for="exampleFormControlSelect1">Ubicación (dirección exacta)</label>
                <textarea name="direccionDeLaEmpresa" class="form-control" cols="30" rows="5" readonly="direccionDeLaEmpresa">{{$empresa->direccionDeLaEmpresa}}</textarea> <br> 
               
                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Fecha de Registro</label>
                        <input type="text" class="form-control" name="fechaDeRegistro" readonly="fechaDeRegistro" value="{{$empresa->created_at}}"/> <br> 
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <center><button type="submit" class="btn btn-danger">Eliminar Registro</button></center>
                    </div>
                    <div class="col">
                        <center><a href="/empresas" class="btn btn-primary">Cancelar y Volver</a></center>
                    </div>
                </div>
            
            </form>
        </div>
    </div>   
</div>                   
@endsection