@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
           <h3><b><center>Registrar nuevo Paquete</center></b></h3>
        </div>

        <div class="card-body">
            <form action="/paquetes" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Código</label>
                        <input type="text" class="form-control" placeholder="Escriba el código del paquete" name="codigoDelPaquete" value="{{old('codigoDelPaquete')}}" /> <br> 
                        @error('codigoDelPaquete')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Nombre</label>
                        <input type="text" class="form-control" placeholder="Escriba el nombre del paquete" name="nombreDelPaquete" value="{{old('nombreDelPaquete')}}"/> <br> 
                        @error('nombreDelPaquete')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Costo</label>
                        <input type="text" class="form-control" placeholder="Escriba el costo del paquete" name="costoDelPaquete" value="{{old('costoDelPaquete')}}"/> <br> 
                        @error('costoDelPaquete')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>


                <label for="exampleFormControlSelect1">Descripción</label>
                <textarea name="descripcionDelPaquete" class="form-control" cols="30" rows="5" placeholder="Escriba la descripción del paquete">{{old('descripcionDelPaquete')}}</textarea> <br> 
                @error('descripcionDelPaquete')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="row">
                    <div class="col">
                        <center><button type="submit" class="btn btn-success">Registrar paquete</button></center>
                    </div>
                    <div class="col">
                        <center><a href="/paquetes" class="btn btn-danger">Cancelar y Volver</a></center>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection  