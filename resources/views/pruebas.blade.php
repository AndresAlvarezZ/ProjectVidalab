 <script src="{{ asset('js/finalizarCompra.js') }}?v=<?php echo(rand()); ?>"defer></script>
se esta haciendo pruebas {{$probar}}
<form class="" id="tabla" action="/compras/validarCompra" method="get">
    @csrf
</form>
