<!DOCTYPE html>
<html>
<head>
    <title>Nómina de Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
        .linea{
            width: 100%;
            height: 5px;
            background-color: red;
        }

        body, h2{
            font-family: 'Sans-serif';
            text-align:center;
        }
    </style>
   
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Materiales el Inge S.A de C.V</h2>
            </div>            
        </div>

        <div class="row">
            <div class="col-6">
                <p>Av. Ramon Corona 708, 45645 Santa Anita, Jal.</p>
                <p>C.P: 45600</p>
                <p>RFC: MIN230715ABC</p>
                <p>General Ley de Personas Morales</p>
            </div>
            <div class="col-6">
                <h2 class="text-center text-white bg-primary rounded p-2 mb-4">RECIBO DE NÓMINA</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <p class="fw-bold">ID: <span> {{ $empleado->id_empleado }}</span> </p>
                <p class="fw-bold">Nombre: <span>{{ $empleado->nombre }} {{ $empleado->apellido_pat }} {{ $empleado->apellido_mat }}</span> </p>
                <p class="fw-bold">CURP: <span>{{ $empleado->curp }}</span> </p>
                <p class="fw-bold">NSS: <span>{{ $empleado->nss}}</span></p>
                <p class="fw-bold">Regimen de Sueldos: <span>Sueldos</span> </p>
 
            </div>
            <div class="col-6">
                <p class="fw-bold">Puesto: <span>{{ $empleado->puesto }}</span> </p>
                <p class="fw-bold">Fecha: <span>{{ $nomina->fecha_pago }}</span></p>
                <p class="fw-bold">Días trabajados: <span>16</span> </p>
            </div>
        </div>


        <div class="row">
            
            <div class="col-6">
                <h2 class="text-center text-white bg-primary rounded p-2 mb-4">PERCEPCIONES</h2>
                <p class="fw-bold">SUELDO BRUTO: <span>{{ $nomina->sueldo_bruto }}</span> </p>
                <p class="fw-bold">BONOS: <span>{{ $nomina->bonos }}</span> </p>
            </div>

            <div class="col-6">
                <h2 class="text-center text-white bg-primary rounded p-2 mb-4">DEDUCCIONES</h2>
                <p class="fw-bold">ISR: <span>{{ $nomina->deduccion_isr }}</span> </p>
                <p class="fw-bold">IMSS: <span>{{ $nomina->deduccion_imss }}</span> </p>
                <p class="fw-bold">Otras deducciones: <span>{{ $nomina->deducciones }}</span> </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <hr class="linea">
            </div>

            <p class="fw-bold">Total Neto a Recibir: <span>{{ $nomina->sueldo_neto}}</span> </p>

        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
 

</body>
</html>
