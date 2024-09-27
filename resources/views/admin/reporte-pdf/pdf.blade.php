<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Serviapp</title>
    <style>
        @page {
            size: landscape;
            margin: 0;
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 8px;
            line-height: 1.5;
            margin: 0;
            padding: 30px;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: bold;
        }
        .container {
            max-width: 100%;
            margin: 0 auto;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th,
        .table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #000;
        }
        .table th {
            font-weight: bold;
            background-color: #2e472e;
            color: #fff;
        }
        .table td {
            background-color: #F5F5F5;
        }
    </style>
</head>
<body>
    <h1>Serviapp-Trujillo</h1>
    <div style="text-align: right; margin-bottom: 20px;">
        <span>Fecha y Hora del Reporte Creado: <?php echo date('d/m/Y H:i:s'); ?></span>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 10%; border-right: 1px solid #000;">Número</th>
                    <th style="width: 10%; border-right: 1px solid #000;">Cédula</th>
                    <th style="width: 10%; border-right: 1px solid #000;">Nombre del Usuario</th>
                    <th style="width: 15%; border-right: 1px solid #000;">Apellido del Usuario</th>
                    <th style="width: 15%; border-right: 1px solid #000;">Email</th>
                    <th style="width: 15%; border-right: 1px solid #000;">Categoría del Reporte</th>
                    <th style="width: 10%; border-right: 1px solid #000;">Tipo de Problema</th>
                    <th style="width: 15%; border-right: 1px solid #000;">Geocalizacion</th>
                    <th style="width: 15%; border-right: 1px solid #000;">Dirección Exacta</th>
                    <th style="width: 10%; border-right: 1px solid #000;">Estatus</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_pdf as $reporte)
                <tr>
                    <td style="border-right: 1px solid #000;">{{ $reporte->id }}</td>
                    <td style="border-right: 1px solid #000;">{{ $reporte->datos->cedula }}</td>
                    <td style="border-right: 1px solid #000;">{{ $user->name }}</td>
                    <td style="border-right: 1px solid #000;">{{ $user->apellido }}</td>
                    <td style="border-right: 1px solid #000;">{{ $user->email }}</td>                    
                    <td style="border-right: 1px solid #000;">{{ $reporte->category_id }}</td>
                    <td style="border-right: 1px solid #000;">{{ $reporte->tipo_id }}</td>
                    <td style="border-right: 1px solid #000;">{{ $reporte->latitude }} / {{ $reporte->longitude }}</td>
                    <td style="border-right: 1px solid #000;">{{ $reporte->direccion }}</td>
                    <td style="border-right: 1px solid #000;">{{ $reporte->estatus }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>