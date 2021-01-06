@extends('layouts.appAdmin')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/perfilesDeClientes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <link href="{{ asset('icons/fuentes.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <link href="{{ asset('css/iconos.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
        <script src="http://momentjs.com/downloads/moment.min.js"></script>

        <link href="{{ asset('css/menuAdministrador.css') }}?v=<?php echo(rand()); ?>" rel="stylesheet">
    </head>

    <body>
        
        <div class="container"></div>

    </body>

    <script src="https://code.highcharts.com/highcharts.src.js"></script>

    <script type="text/javascript">
        var clientes = <?php echo json_encode($clientes)?>;
        Highcharts.chart('container', 
        {
            title:
            {
                text: 'Clientes registrados en el HUMAcheck',
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
                    'Dic',
                ],
            },
            yAxis:
            {
                title:
                {
                    text: 'Nuevos clientes',
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
                            maxWidh: 500,
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
</html>
@endsection
