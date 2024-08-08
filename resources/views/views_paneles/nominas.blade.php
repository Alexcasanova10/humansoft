@extends('template')
<title>Nóminas</title>

@section('contenido_gral')
    @section('titulo')
        Nómina de Empleados
    @endsection
<main class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="GET" action="{{ route('nominas') }}" class="d-flex align-items-center justify-content-center gap-3">
                            <label for="id_empleado" class="text-primary h4">Nombre</label>
                            
                            <select name="id_empleado" id="id_empleado" class="form-select">
                                <option value="" selected disabled>--Seleccionar--</option>
                                @foreach($empleados as $empleado)
                                     <option value="{{ $empleado->id_empleado }}" {{ request('id_empleado') == $empleado->id_empleado ? 'selected' : '' }}>
                                        {{ $empleado->nombre }} {{ $empleado->apellido_pat }} {{ $empleado->apellido_mat }}
                                     </option>
                                @endforeach
                            </select>

                            <div class="task-hold input-group">
                                <button type="submit" class="btn btn-primary">Agregar Nómina</button>
                            </div>
                            <div class="input-group">
                                <a class="btn btn-danger"  href="{{ route('lista_nominas') }}">Ver listado de nóminas</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <form class="form" onsubmit="return confirm('¿Datos correctos?')" method="POST" action="{{ route('guardar_nomina') }}">
                            @csrf
                            <h2 class="text-center text-white bg-primary rounded p-2 mb-4">Completa los siguientes datos:</h2>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-4">
                                        <label for="id_empleado" class="form-label">Id Empleado</label>
                                        <input type="text" class="form-control" name="id_empleado" id="id_empleado" placeholder="ID" value="{{ $empleadoSeleccionado ? $empleadoSeleccionado->id_empleado : '' }}" readonly>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-4">
                                        <label for="nombre_empleado" class="form-label">Empleado</label>
                                        <input type="text" class="form-control" id="nombre_empleado" placeholder="Nombre" value="{{ $empleadoSeleccionado ? $empleadoSeleccionado->nombre . ' ' . $empleadoSeleccionado->apellido_pat . ' ' . $empleadoSeleccionado->apellido_mat : '' }}" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                 <div class="col-6">
                                    <div class="mb-4">
                                        <label for="correo" class="form-label">Correo</label>
                                        <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo electrónico" value="{{ $empleadoSeleccionado ? $empleadoSeleccionado->correo : '' }}" >
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="puesto" class="form-label">Puesto</label>
                                    <input type="text" class="form-control" id="puesto" placeholder="Puesto" value="{{ $empleadoSeleccionado ? $empleadoSeleccionado->puesto : '' }}" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-4">
                                        <label for="fecha_pago" class="form-label">Fecha de pago</label>
                                        <input type="date" class="form-control" name="fecha_pago" id="fecha_pago" value="{{ date('Y-m-d') }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="salarioBruto" class="form-label">Salario bruto</label>
                                    <input id="salarioBruto" class="form-control" name="sueldo_bruto" type="text" placeholder="0.00" value="{{ $empleadoSeleccionado ? $empleadoSeleccionado->salario : '' }}" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-4">
                                        <label for="isr" class="form-label">Deducciones por Ley ISR</label>
                                        <input type="number" class="form-control" name="deduccion_isr" id="isr" placeholder="ISR" readonly>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-4">
                                        <label for="imss" class="form-label">Deducción IMSS</label>
                                        <input type="number" class="form-control" name="deduccion_imss" id="imss" placeholder="IMSS" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <label for="deducciones-varias">Agregar deducciones </label>
                                    <input type="checkbox" id="checkbox_deduc" value="">
                                    <div class="row mt-3" id="deducciones-div" style="display:none">
                                        <div class="d-flex">
                                            <div class="col-6">
                                                <select name="concepto_deduccion" id="concepto_deduccion" class="form-select">
                                                    <option value="" selected disabled>Concepto de deducción</option>
                                                    <option value="Préstamo">Préstamo</option>
                                                    <option value="Falta">Falta</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <input type="number" name="deducciones" id="monto_deduccion" class="form-control" placeholder="Monto de deducción">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="bonos-varias">Agregar Bonos</label>
                                    <input type="checkbox" id="checkbox_bonos" value="">
                                    <div class="row mt-3" id="bonos-div" style="display:none">
                                        <div class="d-flex">
                                            <div class="col-6">
                                                <select name="concepto_bono" id="concepto_bono" class="form-select">
                                                    <option value="" selected disabled>Concepto de bono</option>
                                                    <option value="0.05">Productividad 5%</option>
                                                    <option value="0.10">Productividad 10%</option>
                                                    <option value="0.15">Productividad 15%</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <input type="number" name="bonos" id="monto_bono" class="form-control" placeholder="Monto de bono" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-3">
                                <div class="col-12 mb-4">
                                    <label for="montoNeto" class="form-label">Monto Neto</label> 
                                     <input id="montoNeto" class="form-control" name="sueldo_neto" type="text" placeholder="0.00" readonly>
                                </div>
                            </div>
                           

                            <div class="col-12">
                                <button type="submit"  class="btn form-control btn-primary btn-lg">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</main>

<script>
    function calcularDeducciones() {
        const salarioBruto = parseFloat(document.getElementById('salarioBruto').value) || 0;
        const tasaISR = 0.1;  // 10% ISR
        const tasaIMSS = 0.05; // 5% IMSS

        const isr = salarioBruto * tasaISR;
        const imss = salarioBruto * tasaIMSS;

        document.getElementById('isr').value = isr.toFixed(2);
        document.getElementById('imss').value = imss.toFixed(2);

        calcularMontoNeto();
    }

    function calcularMontoNeto() {
        const salarioBruto = parseFloat(document.getElementById('salarioBruto').value) || 0;
        const isr = parseFloat(document.getElementById('isr').value) || 0;
        const imss = parseFloat(document.getElementById('imss').value) || 0;
        const deduccionAdicional = parseFloat(document.getElementById('monto_deduccion').value) || 0;
        const montoBono = parseFloat(document.getElementById('monto_bono').value) || 0;

        const totalDeducciones = isr + imss + deduccionAdicional;
        const montoNeto = salarioBruto - totalDeducciones + montoBono;

        document.getElementById('montoNeto').value = montoNeto.toFixed(2);
    }

    document.getElementById('monto_deduccion').addEventListener('input', calcularMontoNeto);
    document.getElementById('concepto_bono').addEventListener('change', function() {
        const salarioBruto = parseFloat(document.getElementById('salarioBruto').value) || 0;
        const porcentajeBono = parseFloat(this.value) || 0;

        const montoBono = salarioBruto * porcentajeBono;
        document.getElementById('monto_bono').value = montoBono.toFixed(2);

        calcularMontoNeto();
    });

    document.getElementById('checkbox_deduc').addEventListener('change', function() {
        var deduccionesDiv = document.getElementById('deducciones-div');
        if (this.checked) {
            deduccionesDiv.style.display = 'block';
        } else {
            deduccionesDiv.style.display = 'none';
            document.getElementById('monto_deduccion').value = '';
            calcularMontoNeto();
        }
    });

    document.getElementById('checkbox_bonos').addEventListener('change', function() {
        var bonosDiv = document.getElementById('bonos-div');
        if (this.checked) {
            bonosDiv.style.display = 'block';
        } else {
            bonosDiv.style.display = 'none';
            document.getElementById('concepto_bono').value = '';
            document.getElementById('monto_bono').value = '';
            calcularMontoNeto();
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        calcularDeducciones();
    });
</script>
@endsection
