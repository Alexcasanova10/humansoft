<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estado de Nómina</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 12px;
        }
        .container {
            padding: 20px;
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Estado de Nómina</h2>
        </div>
        <div class="content">
            <p><strong>ID Empleado:</strong> {{ $empleadoSeleccionado->id_empleado }}</p>
            <p><strong>Nombre:</strong> {{ $empleadoSeleccionado->nombre }} {{ $empleadoSeleccionado->apellido_pat }} {{ $empleadoSeleccionado->apellido_mat }}</p>
            <p><strong>Correo:</strong> {{ $empleadoSeleccionado->correo }}</p>
            <p><strong>Puesto:</strong> {{ $empleadoSeleccionado->puesto }}</p>
            <p><strong>Fecha de Pago:</strong> {{ $fecha_pago }}</p>
            <p><strong>Salario Bruto:</strong> {{ $sueldo_bruto }}</p>
            <p><strong>ISR:</strong> {{ $deduccion_isr }}</p>
            <p><strong>IMSS:</strong> {{ $deduccion_imss }}</p>
            <p><strong>Deducciones Adicionales:</strong> {{ $deducciones }}</p>
            <p><strong>Bonos:</strong> {{ $bonos }}</p>
            <p><strong>Salario Neto:</strong> {{ $sueldo_neto }}</p>
        </div>
        <div class="footer">
            <p>Generado por el sistema de nóminas</p>
        </div>
    </div>
</body>
</html>
