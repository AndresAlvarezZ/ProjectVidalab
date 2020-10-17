
<br>
este es el dato {{$dato}}
<br>
mas {{$facturas}}

<?php foreach ($facturas as $factura): ?>
  <?php if ($factura->condicionDeCompra == 'Pendiente'): ?>
      <h1>esta factura esta pendiente {{$factura}}</h1>
  <?php endif; ?>
<?php endforeach; ?>
