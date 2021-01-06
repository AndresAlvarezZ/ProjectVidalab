@extends('layouts.especial')
@section('content')

    <head>
        <link href="{{ asset('css/menuAdministrador.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    </head>
    
    <body>
        <div id="container"></div>
    </body>

    <script src="https://code.highcharts.com/highcharts.src.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script type="text/javascript">
        var clientes = <?php echo json_encode($datos)?>;
        Highcharts.chart('container', 
        {
            lang: 
            {
                printChart: "Imprimir gráfico",
                downloadCSV:"Descarga como CSV",  
                downloadJPEG:"Descarga como JPEG",
                downloadPDF: "Descarga como PDF",
                downloadPNG: "Descarga como PNG",
                downloadSVG: "Descarga SVG imagen vector",
                downloadXLS: "Descarga como Excel",
                exitFullscreen:"Salir de pantalla completa",
                viewData: "Mostrar datos en tabla",
                hideData: "Ocultar datos de tabla",
                viewFullscreen:"Ver en pantalla completa",
            },
            title:
            {
                text: 'Clientes registrados en HUMAcheck',
            },
            subtitle:
            {
                text: 'Comportamiento de registro de clientes de forma anual y mensual',
            },
            xAxis:
            {
                categories:
                [
                    'Ene', 
                    'Feb', 
                    'Mar', 
                    'Abr', 
                    'May', 
                    'Jun', 
                    'Jul', 
                    'Ago', 
                    'Sep', 
                    'Oct', 
                    'Nov', 
                    'Dic'
                ]
            },
            yAxis:
            {
                title:
                {
                    text: 'Total de clientes',
                }
            },
            legend:
            {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
            },
            plotOptions:
            {
                series:
                {
                    allowPointSelect: true,
                }
            },
            series:
            [
                {
                    name: 'Nuevos clientes',
                    data: clientes,
                }
            ],
            responsive:
            {
                rules: 
                [
                    {
                        condition:
                        {
                            maxWidh: 1000,
                        },
                        chartOptions:
                        {
                            legend: 
                            {
                                layout: 'horizontal',
                                align:'center',
                                verticalAlign: 'bottom',
                            },
                        },
                    },
                ],
            }
        });
    </script>
@endsection