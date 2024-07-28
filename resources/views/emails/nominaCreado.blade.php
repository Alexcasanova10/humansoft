<!DOCTYPE html>
<html>
<head>
    <title>Nueva Nómina Creada</title>
</head>
<body>
    <h1>Nueva Nómina Creada</h1>
    <p>Se ha creado una nueva nómina para {{ $nomina->correo }}.</p>
    <p><strong>Fecha de pago:</strong> {{ $nomina->fecha_pago }}</p>
    <p><strong>Sueldo Bruto:</strong> {{ $nomina->sueldo_bruto }}</p>
    <p><strong>Sueldo Neto:</strong> {{ $nomina->sueldo_neto }}</p>
    <p><strong>Deducción ISR:</strong> {{ $nomina->deduccion_isr }}</p>
    <p><strong>Deducción IMSS:</strong> {{ $nomina->deduccion_imss }}</p>
    <p><strong>Deducción:</strong> {{ $nomina->deducciones }}</p>
    <p><strong>Bono:</strong> {{ $nomina->bonos }}</p>
</body>
</html>
