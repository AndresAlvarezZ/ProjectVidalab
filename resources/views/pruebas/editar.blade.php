@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">
           <h3><b><center>Editar datos de Análisis registrado</center></h3></b>
        </div>

        <div class="card-body">

            <form action="/pruebas/{{$prueba->idDelAnalisis}}" method="POST">
                @csrf
                @method ('PUT')
                
                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Código</label>
                        <input type="text" class="form-control" placeholder="Escriba el código del análisis" name="codigoDelAnalisis" value="{{$prueba->codigoDelAnalisis}}" /> <br>
                        @error('codigoDelAnalisis')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Nombre</label>
                        <input type="text" class="form-control" placeholder="Escriba el nombre del análisis" name="nombreDelAnalisis" value="{{$prueba->nombreDelAnalisis}}"/> <br>
                        @error('nombreDelAnalisis')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlSelect1">Costo</label>
                        <input type="text" class="form-control" placeholder="Escriba el costo del análisis" name="costoDelAnalisis" value="{{$prueba->costoDelAnalisis}}"/> <br>
                        @error('costoDelAnalisis')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="exampleFormControlSelect1">Numero de máquina</label>
                        <input type="text" class="form-control" placeholder="Escriba el número de máquina" name="numeroDeMaquina" value="{{$prueba->numeroDeMaquina}}"/> <br>
                        @error('numeroDeMaquina')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <label for="exampleFormControlSelect1">Descripción</label>
                <textarea name="descripcionDelAnalisis" class="form-control" cols="30" rows="5" placeholder="Escriba la descripción del análisis">{{$prueba->descripcionDelAnalisis}}</textarea> <br>
                @error('descripcionDelAnalisis')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <div class="row">
                    <div class="col">
                        <center><button type="submit" class="btn btn-success">Actualizar datos</button></center> 
                    </div>
                    <div class="col">
                        <center><a href="/pruebas" class="btn btn-primary">Cancelar y Volver</a></center>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection