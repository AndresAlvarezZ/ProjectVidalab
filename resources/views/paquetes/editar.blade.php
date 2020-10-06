@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
           <h3><b><center>Editar datos de Paquete registrado</center></h3></b>
        </div>

        <div class="card-body">

            <form action="/paquetes/{{$paquete->idDelPaquete}}" method="POST">
                @csrf
                @method ('PUT')
                
                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Código</label>
                        <input type="text" class="form-control" placeholder="Escriba el código del paquete" name="codigoDelPaquete" value="{{$paquete->codigoDelPaquete}}" /> <br>
                        @error('codigoDelPaquete')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Nombre</label>
                        <input type="text" class="form-control" placeholder="Escriba el nombre del paquete" name="nombreDelPaquete" value="{{$paquete->nombreDelPaquete}}"/> <br>
                        @error('nombreDelPaquete')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Costo</label>
                        <input type="text" class="form-control" placeholder="Escriba el costo del paquete" name="costoDelPaquete" value="{{$paquete->costoDelPaquete}}"/> <br>
                        @error('costoDelPaquete')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <label for="exampleFormControlSelect1">Descripción</label>
                <textarea name="descripcionDelPaquete" class="form-control" cols="30" rows="5" placeholder="Escriba la descripción del paquete">{{$paquete->descripcionDelPaquete}}</textarea> <br>
                @error('descripcionDelPaquete')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="row">
                    <div class="col">
                        <center><button type="submit" class="btn btn-success">Actualizar datos</button></center> 
                    </div>
                    <div class="col">
                        <center><a href="/paquetes" class="btn btn-primary">Cancelar y Volver</a></center>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection