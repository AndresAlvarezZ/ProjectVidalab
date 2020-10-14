<!html Doctype>
<html>
  <head>
  </head>
  <body>
    @extends('layouts.appAdmin')
    @section('content')
    <div class="container">
    <div class="row justify-content-center">
                <button id="navbarDropdown" class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ 'Enviar una notificacion' }}
                </button>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <li role="presentation"><a class="dropdown-item" href="/notificacionEspecifica">
                      <strong>{{ __('Notificación específica') }}</strong>
                  </a></li>
                  <li role="presentation" class="divider"></li>
                    <a class='dropdown-item' href="notificacionMasiva">
                                      <strong>  {{'Notificación masiva'}}</strong>
                    </a>
                </div>

  </div>
  </div>
</div>
  @endsection
  </body>
</html>
