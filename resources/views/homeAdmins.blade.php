@extends('layouts.appAdmin')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row justify-center">
      <div class="col-md-8">
        <div class="card">
          <h1>Si el plan no funciona...cambia el plan pero nunca cambies la meta 💙 <br> Soon=> ✨</h1>
        </div>
      </div>
    </div>
  </div>
</div>
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

                    <a href="nuevoAdministrador">Agregar un nuevo Administrador </a>
                    <br>
                    <a href="/administradores">Registro de Administradores </a>
                    <br>
                    <a href="/administradores/activos">Lista de administradores activos </a>
                    <br>
                    <a href="/administradores/inactivos">Lista de administradores inactivos</a>
                    <br>
                    <a href="/nuevaNotificacion">Enviar una nueva notificación </a>
                    <br>
                    <a href="/empresas">Registro empresas </a>
                    <br>
                    <a href="/citas">Registro completo de citas </a>
                    <br>
                    <a href="/pruebas">Registro de análisis </a>
                    <br>
                    <a href="/paquetes">Registro de paqutes de análisis </a>
                    <br>
                    <a href="/verCompras">Ver compras</a>
                    <br>
                    <a href="/solicitudes/enEspera">Solicitudes En Espera</a>
                    <br>
                    <a href="/solicitudes/confirmadas">Solicitudes Confirmadas</a>
                    <br>
                    <a href="/solicitudes/finalizadas">Solicitudes Finalizadas</a>
                    <br>
                    <a href="/solicitudes/canceladas">Solicitudes Canceladas</a>
                    <br>
                    <a href="/catalogos">Catálogos </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
