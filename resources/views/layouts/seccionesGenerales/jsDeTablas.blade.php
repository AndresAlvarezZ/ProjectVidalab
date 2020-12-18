<!--JS DATATEBLES BUSCADOR, EXPORTAR, COLUMNA FIJA-->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <!--<script src="https://cdn.datatables.net/colreorder/1.5.3/js/dataTables.colReorder.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<!---->


<!--ALERTAS-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<!---->


<!--JS COMPLEMENTO DE DATATABLES-->
    <script src="{{ asset('js/validadoresDeTexto/caracteresPermitidos.js') }}?v=<?php echo(rand()); ?>"defer></script>
    <script src="{{ asset('js/buscador/buscadorDeRegistros.js') }}?v=<?php echo(rand()); ?>"defer></script>
    <script src="{{ asset('js/buscador/clientesP.js') }}?v=<?php echo(rand()); ?>"defer></script>
    <script src="{{ asset('js/buscador/clientesM.js') }}?v=<?php echo(rand()); ?>"defer></script>
    <script src="{{ asset('js/buscador/empresasP.js') }}?v=<?php echo(rand()); ?>"defer></script>
    <script src="{{ asset('js/buscador/empresasM.js') }}?v=<?php echo(rand()); ?>"defer></script>
<!----> 