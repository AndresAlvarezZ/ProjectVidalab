@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
           <h3><b><center>Editar datos de Empresa registrada</center></h3></b>
        </div>

        <div class="card-body">

            <form action="/empresas/{{$empresa->idDeLaEmpresa}}" method="POST">
                @csrf
                @method ('PUT')
                
                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Nombre</label>
                        <input type="text" class="form-control" placeholder="Escriba el nombre de la empresa" name="nombreDeLaEmpresa" value="{{$empresa->nombreDeLaEmpresa}}" /> <br>
                        @error('nombreDeLaEmpresa')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Identificador</label>
                        <input type="text" class="form-control" name="idDeLaEmpresa" readonly="idDeLaEmpresa" value="{{$empresa->idDeLaEmpresa}}"/> <br>
                        @error('idDeLaEmpresa')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Número telefónico</label>
                        <input type="text" class="form-control" placeholder="Escriba un número telefónico para contactar" name="numeroDeTelefonoDeLaEmpresa" value="{{$empresa->numeroDeTelefonoDeLaEmpresa}}"/> <br>
                        @error('numeroDeTelefonoDeLaEmpresa')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Correo electrónico</label>
                        <input type="text" class="form-control" placeholder="Escriba un correo electrónico para contactar" name="correoElectronicoDeLaEmpresa" value="{{$empresa->correoElectronicoDeLaEmpresa}}"/> <br>
                        @error('correoElectronicoDeLaEmpresa')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <label for="exampleFormControlSelect1">Ubicación (dirección exacta)</label>
                <textarea name="direccionDeLaEmpresa" class="form-control" cols="30" rows="5" placeholder="Escriba la dirección exacta de la empresa">{{$empresa->direccionDeLaEmpresa}}</textarea> <br>
                @error('direccionDeLaEmpresa')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="row">
                    <div class="col">
                        <center><button type="submit" class="btn btn-success">Actualizar datos</button></center> 
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