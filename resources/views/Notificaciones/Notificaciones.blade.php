<!html Doctype>
<html>
  <head>
  </head>
  <body>
    @extends('layouts.appAdmin')
    @section('content')
    <div class="container">
    <div class="row justify-content-center">
                <a id="navbarDropdown2" class="nav-link dropdown-toggle" href="#"role="button" data-toggle="dropdown3" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ 'Enviar una notificacion' }}
                </a>

                <div class="dropdown3-menu dropdown-menu-right" aria-labelledby="navbarDropdown2">
                    <a class="dropdown3-item" href="/notificacionEspecifica">
                        <strong>{{ __('Notificación específica') }}</strong>
                    </a>
                    <a class='dropdown3-item' href="notificacionMasiva">
                                      <strong>  {{'Notificación masiva'}}</strong>
                    </a>
                </div>

  </div>
  </div>
</div>
  @endsection
  </body>
</html>
