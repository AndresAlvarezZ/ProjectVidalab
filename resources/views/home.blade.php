@extends('layouts.app')

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


                  <a href="" target="_blank">Prueba de nuevo proyecto</a>
                  <br>
                  <a href="/catalogos">Catálogos </a>
                  <br>
                  <a href="/facturas">Mi expediente </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
