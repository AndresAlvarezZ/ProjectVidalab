@extends('layouts.appAdmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PROYECTO') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <h1>Lo has logrado superman ♥ </h1>
                <a href="nuevoAdministrador">Agregar un nuevo Administrador </a>
                <br>
                <a href="/nuevaNotificacion">Enviar una nueva notificación </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
