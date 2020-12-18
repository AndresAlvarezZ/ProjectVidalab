$(document).ready(function() 
{

    $('#registrosEmpresasP thead tr').clone(true).appendTo( '#registrosEmpresasP thead' );
    $('#registrosEmpresasP thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Buscar"'+'/>' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );

    var table = $('#registrosEmpresasP').DataTable(
    {

        orderCellsTop: true,
        fixedHeader: true,
        scrollY:        "1100px",
        scrollX:        "300px",
        scrollCollapse: true,
        paging:         true,
        fixedColumns:   
        {
            leftColumns: 1,
        },

        "language": 
        {
            "lengthMenu": "Ver _MENU_ registros por página    ",
            "zeroRecords": "No se encuantran datos disponibles",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrando de _MAX_ registros totales)",
            "search": 'Buscar:',
            "paginate": 
            {
                "first": "Primero",
                "last":  "último",
                "next":  "Siguiente",
                "previous": "Anterior"
            }
        },

        dom: 'lBfrtip',
        stateSave: true,
        buttons: 
        [
            {
                text: 'Ver columnas',
                extend: 'colvis',
            },
            {
                extend: 'collection',
                text: 'Exportar como:',
                buttons: 
                [
                    {
                        text: '<i class="icon-file-excel"></i>',
                        extend:'excelHtml5',
                        titleAttr: 'Exportar a Excel',
                        messageTop: 'VIDAlab',
                        className: 'btn btn-success archivo',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        text: '<i class="icon-file-pdf"></i>',
                        extend: 'pdfHtml5',
                        titleAttr: 'Exportar como PDF',
                        messageTop: 'VIDAlab',
                        className: 'btn btn-danger archivo',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        text: '<i class="icon-printer"></i>',
                        extend: 'print',
                        titleAttr: 'Imprimir tabla',
                        messageTop: 'VIDAlab',
                        className: 'btn btn-info archivo',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        text: '<i class="icon-copy"></i>',
                        extend:'copyHtml5',
                        titleAttr: 'Copiar tabla',
                        messageTop: 'VIDAlab',
                        className: 'btn btn-success archivo',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        text: '<i class="icon-file-empty"></i>',
                        extend: 'csvHtml5',
                        titleAttr: 'Todos los archivos',
                        className: 'btn btn-secondary archivo',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                ]
            },              
        ],

        columnDefs: [ {
            targets: -1,
            visible: false
        } ]
    });
} );

