<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>

    <body>
        <div class="container-fluid">
            <p>
                <br></br>
                <a href="/homeAdmins" class="btn btn-info " data-toggle="tooltip" data-placement="right" title="Click para ir al menú principal"><span class="icon-home"> </span> Volver al Menú Principal</a>
            </p>
            
            <div id="container"></div>
        </div>
    </body>

    <script src="https://code.highcharts.com/highcharts.src.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script type="text/javascript">
        var clientes = <?php echo json_encode($datos)?>;
        var fecha = new Date();
        fecha = fecha.getFullYear();
        Highcharts.setOptions
        ({
            chart: 
            {
                style: 
                {
                    fontFamily: 'monospace',
                    color: "rgb(223, 89, 0)"
                }
            },
            title: 
            {
                style: 
                {
                    color: 'rgb(223, 89, 0)',
                    font: 'bold 20px "Trebuchet MS", Verdana, sans-serif'
                }
            },
            subtitle: 
            {
                style: 
                {
                    color: '#119281',
                    font: 'bold 14px "Trebuchet MS", Verdana, sans-serif'
                }
            },
            xAxis: 
            {
                lineColor: '#000',
                tickColor: '#000',
                labels: 
                {
                    style: 
                    {
                        color: 'rgb(223, 89, 0)',
                        font: '12px Trebuchet MS, Verdana, sans-serif'
                    }
                },
                title: 
                {
                    style: 
                    {
                        color: '#333',
                        fontWeight: 'bold',
                        fontSize: '12px',
                        fontFamily: 'Trebuchet MS, Verdana, sans-serif'
                    }            
                }
                },
            yAxis: 
            {
                minorTickInterval: 'auto',
                lineColor: '#000',
                lineWidth: 1,
                labels: 
                {
                    style: 
                    {
                        color: 'rgb(223, 89, 0)',
                        font: '12px Trebuchet MS, Verdana, sans-serif'
                    }
                },
                title: 
                {
                    style: 
                    {
                        color: '#333',
                        fontWeight: 'bold',
                        fontSize: '12px',
                        fontFamily: 'Trebuchet MS, Verdana, sans-serif'
                    }            
                }
            },
        });

        Highcharts.chart('container', 
        {
            lang: 
            {
                printChart: "Imprimir gráfico",
                downloadCSV:"Descargar como CSV",  
                downloadJPEG:"Descargar como JPEG",
                downloadPDF: "Descargar como PDF",
                downloadPNG: "Descargar como PNG",
                downloadSVG: "Descargar SVG imagen vector",
                downloadXLS: "Descargar como Excel",
                exitFullscreen:"Salir de pantalla completa",
                viewData: "Mostrar datos en tabla",
                hideData: "Ocultar datos de tabla",
                viewFullscreen:"Ver en pantalla completa",
            },
            title:
            {
                text: 'VIDAlab: Distribución de número de clientes registrados mensualmente en el sistema durante el año '.concat(fecha),
            },
            subtitle:
            {
                text: 'HUMAcheck',
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
</html>
