@extends('template')
<title>Editar Vacaciones</title>

@section('contenido_gral')
@section('titulo')
    Editar periodo Vacacional
@endsection
<main class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('actualizar_vac', $vacacion->id_vacaciones) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mt-4">
                                <div class="mb-3 col text-center">
                                    <label for="" class="text-center form-control text-white bg-primary rounded p-2 mb-4">ID del Empleado</label>
                                    <input type="text" readonly class="form-control" value="{{ $empleado->id_empleado }}">
                                </div>
                                <div class="mb-3 col text-center">
                                    <label for="" class="text-center form-control text-white bg-primary rounded p-2 mb-4">Nombre del Empleado</label>
                                    <input type="text" readonly class="form-control" value="{{ $empleado->nombre }} {{ $empleado->apellido_pat }} {{ $empleado->apellido_mat }}">
                                </div>

                                <div class="mb-3 col text-center">
                                    <label for="" class="text-center form-control text-white bg-primary rounded p-2 mb-4">Comentarios</label>
                                    
                                    <textarea class="form-control" class="form-control" value="{{ $empleado->comentarios }}" name="comentarios" id="" rows="3"></textarea>








                                </div>






                            </div>
                            <div class="row mt-4">
                                <div class="mb-3 col text-center">
                                    <label for="" class="text-center form-control text-white bg-primary rounded p-2 mb-4">Inicio de Periodo</label>
                                    <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="{{ $vacacion->fecha_inicio->format('Y-m-d') }}" required>
                                </div>
                                <div class="mb-3 col text-center">
                                    <label for="" class="text-center form-control text-white bg-primary rounded p-2 mb-4">Fin de Periodo</label>
                                    <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="{{ $vacacion->fecha_fin->format('Y-m-d') }}" required>
                                </div>
                            </div>
                            <div class="row mt-4 " style="display: none">
                                <div class="mb-3 col text-center">
                                    <label for="" class="text-center form-control text-white bg-primary rounded p-2 mb-4">Número de Días Solicitados</label>
                                    <input type="number" class="form-control" name="dias_solicitados" id="dias_solicitados" value="{{ $vacacion->dias_solicitados }}" readonly>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 text-center">
                                    <button type="submit" class="form-control btn bg-primary text-white">Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fechaInicioInput = document.getElementById('fecha_inicio');
        const fechaFinInput = document.getElementById('fecha_fin');
        const diasSolicitadosInput = document.getElementById('dias_solicitados');

        function calcularDias() {
            const fechaInicio = new Date(fechaInicioInput.value);
            const fechaFin = new Date(fechaFinInput.value);
            const diferenciaEnTiempo = fechaFin - fechaInicio;
            const diferenciaEnDias = Math.ceil(diferenciaEnTiempo / (1000 * 3600 * 24)) + 1; // +1 para incluir el último día
            diasSolicitadosInput.value = diferenciaEnDias;
        }

        fechaInicioInput.addEventListener('change', calcularDias);
        fechaFinInput.addEventListener('change', calcularDias);

        // Inicializar el valor de días solicitados al cargar la página
        calcularDias();
    });
</script>
@endsection
@endsection
