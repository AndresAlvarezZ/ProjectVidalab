<!html Doctype>
<html>
  <head>
  </head>
  <body>
    @extends('layouts.appAdmin')
    @section('content')
    <div class="container">
    <div class="row justify-content-center">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ 'Enviar una notificacion' }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/notificacionEspecifica">
                        <strong>{{ __('Notificación específica') }}</strong>
                    </a>
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
