
<!-- MODAL LEER MÁS EN ANALISIS-->
@foreach($pruebas as $prueba)
<div class="modal fade" id="{{$prueba->codigoDelAnalisis}}" tabindex="-1" aria-labelledby="{{$prueba->codigoDelAnalisis}}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LeerMasDelAnalisisLabel"><strong>Información del Análisis</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table>
          <tr>
            <td><strong>Nombre del análisis:</strong></td>
            <td id="mod">{{$prueba->nombreDelAnalisis}}</td>
          </tr>
          <tr>
            <td><strong>Costo del anális:</strong></td>
            <td id="mod">{{$prueba->costoDelAnalisis}}</td>
          </tr>
          <tr>
            <td><strong>Descripción del análisis:</strong></td>
            <td id="mod">{{$prueba->descripcionDelAnalisis}}</td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endforeach



<!-- MODAL LEER MÁS EN PAQUETES-->
@foreach($paquetes as $paquete)
<div class="modal fade" id="{{$paquete->codigoDelPaquete}}" tabindex="-1" aria-labelledby="{{$paquete->codigoDelPaquete}}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LeerMasDelPaqueteLabel"><strong>Informacion del paquete</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table>
          <tr>
            <td><strong>Nombre del paquete:</strong></td>
            <td id="mod">{{$paquete->nombreDelPaquete}}</td>
          </tr>
          <tr>
            <td><strong>Costo del paquete:</strong></td>
            <td id="mod">{{$paquete->costoDelPaquete}}</td>
          </tr>
          <tr>
            <td><strong>Descripción del paquete:</strong></td>
            <td id="mod">{{$paquete->descripcionDelPaquete}}</td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach
