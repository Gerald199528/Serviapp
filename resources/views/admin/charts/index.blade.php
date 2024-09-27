
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <div id="container"></div>

    <script type="text/javascript">
        // Obtener los datos de la base de datos en formato JSON
        var datos = <?php echo json_encode($charts); ?>;

        // Convertir los datos en el formato requerido por Highcharts
        var seriesData = Object.entries(datos).map(([key, value]) => [getMonthName(key), value]);

        // Función para obtener el nombre del mes
        function getMonthName(month) {
            var monthNames = [
                "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
            ];
            return monthNames[month - 1];
        }

        // Crear la gráfica
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Relación de Requerimientos Realizados.'
            },
            xAxis: {
                categories: seriesData.map(([key, value]) => key),
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Número de Reportes'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} reportes</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Reportes Generados',
                data: seriesData.map(([key, value]) => value)

            }]
        });
    </script>

