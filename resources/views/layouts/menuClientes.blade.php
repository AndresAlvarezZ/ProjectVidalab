<head>
    <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>



<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link btnMenu" href="/homeAdmins" role="button" v-pre><span class="icon-home"></span>HUMAcheck</a>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link btnMenu" href="/verPerfil" role="button" v-pre><span class="icon-user"></span>MI PERFIL</a>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link btnMenu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="icon-folder-plus"></span>MI EXPEDIENTE</a>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link btnMenu" href="/catalogos" role="button" v-pre><span class="icon-price-tags"></span><span class="icon-lab"></span>CATALOGO</a>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link btnMenu" href="/especialistas/perfiles" role="button" v-pre><span class="icon-users"></span>PERFILES PROFESIONALES</a>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link btnMenu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="icon-office"></span>VIDAlab</a>
</li>










@guest
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest