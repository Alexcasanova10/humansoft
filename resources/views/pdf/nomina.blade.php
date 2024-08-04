<!DOCTYPE html>
<html>
<head>
    <title>Recibo de Nómina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .linea {
            width: 100%;
            height: 2px;
            background-color: black;
        }

        body {
            font-family: 'Arial', sans-serif;
            font-size: 14px;
        }

        h2 {
            font-size: 18px;
        }

        .container {
            max-width: 95%;
            margin: auto;
            padding: 20px;
        }
        body{
            border: 1px solid #000;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h2 {
            font-size: 20px;
        }

        .bg-dark-blue {
            background-color: #007bff;
            color: white;
        }

        .section-title {
            background-color: #D99748;
            color: white;
            padding: 5px;
            margin-bottom: 10px;
            text-align: center;
        }

        .fw-bold span {
            font-weight: normal;
        }

        .total {
            text-align: center;
        }

        .total p {
            margin: 0;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="header">
            <div class="section-title">
                <h2>MATERIALES EL INGE SA DE CV</h2>
            </div>

            <p>Av. Ramon Corona 708, 45645 Santa Anita, Jal.</p>
            <p>RFC:MAT230415AEV
            </p>
            <p>Regimen: General de Ley Personas Morales</p>
        </div>
 


        <div class="row d-flex">
            <div class="col-4">
                <p><strong>No. Trab.:</strong> <span>{{ $empleado->id_empleado }}</span></p>
                <p><strong>Nombre:</strong> <span>{{ $empleado->nombre }} {{ $empleado->apellido_pat }} {{ $empleado->apellido_mat }}</span></p>
            </div>
            <div class="col-4">
                <p><strong>CURP:</strong> <span>{{ $empleado->curp }}</span></p>
                 <p><strong>R. IMSS:</strong> <span>{{ $empleado->nss }}</span></p>
                <p><strong>Régimen Trabajador:</strong> <span>Sueldos</span></p>
            </div>
            <div class="col-4">
                 <p><strong>Puesto:</strong> <span>{{ $empleado->puesto }}</span></p>
                <p><strong>No. IMSS:</strong> <span>{{ $empleado->nss }}</span></p>
                <p><strong>Fecha:</strong> <span>{{ $nomina->fecha_pago }}</span></p>
            </div>
        </div>

        <hr class="linea">

        <div class="row">
            <div class="col-6">
                <div class="section-title">PERCEPCIONES</div>
                <p><strong>SUELDO: $</strong> <span>{{ $nomina->sueldo_bruto }}</span></p>
                <p><strong>BONOS: $</strong> <span>{{ $nomina->bonos}}</span></p>
            </div>
            <div class="col-6">
                <div class="section-title">DEDUCCIONES</div>
                <p><strong>ISR:$</strong> <span>{{ $nomina->deduccion_isr }}</span></p>
                <p><strong>IMSS:$</strong> <span>{{ $nomina->deduccion_imss }}</span></p>
                <p><strong>OTRAS DEDUCCIONES: {{ $nomina->concepto_deduccion}}</strong> <span>${{ $nomina->deducciones}}</span></p>
            </div>
        </div>

        <hr class="linea">

        <div class="row total">
            <div class="col-6">
                        <p><strong>Total Percepciones:</strong> 
                <span>${{ $nomina->sueldo_bruto + $nomina->bonos }}</span>
            </p>
            <p><strong>Total Deducciones:</strong> 
                <span>${{ $nomina->deduccion_isr + $nomina->deduccion_imss + $nomina->deducciones }}</span>
            </p>
            </div>
            <div class="col-6">
                <p><strong>Total Neto a Recibir:</strong> <span>${{ $nomina->sueldo_neto }}</span></p>
            </div>
        </div>
 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
