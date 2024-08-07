@extends('template')
<title>Asistencias</title>

@section('contenido_gral')
    @section('titulo')
        Asistencias
    @endsection
    <main class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-xxl-9 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <form action="{{ route('asistencias') }}" method="GET" class="form-group row d-flex justify-content-center">
                                        <div class="col-auto">
                                            <label for="fecha" class="col-form-label">Seleccionar Fecha</label>
                                        </div>
                                        <div class="col-auto">
                                            <input id="fecha" name="fecha" class="form-control" type="date" max="{{ \Carbon\Carbon::now()->toDateString() }}" value="{{ $fecha ?? \Carbon\Carbon::now()->toDateString() }}">
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-primary" type="submit">Buscar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12">
                                    <h2 class="text-center text-white bg-primary rounded p-2 mb-4">Asistencia al día: {{ \Carbon\Carbon::parse($fecha)->format('d/m/Y') }}</h2>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 col-xxl-9 d-flex">
                                    <div class="card flex-fill">
                                        <form action="{{ route('store_asistencias') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="fecha" value="{{ $fecha }}">
                                            <table class="table table-hover my-0">
                                                <thead>
                                                    <tr>
                                                        <th class="d-none d-md-table-cell">Id</th>
                                                        <th class="d-none d-md-table-cell">Nombre</th>
                                                        <th class="d-none d-md-table-cell">Puesto</th>
                                                        <th class="d-none d-md-table-cell">Asistencia</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                @foreach($empleados as $empleado)
                                                    @php
                                                        $asistencia = $asistencias[$empleado->id_empleado]->estado_asistencia ?? '';
                                                        $highlight = $asistencia == 'Justificación' ? 'bg-warning' : '';
                                                        $estado_asistencia = $asistencia == 'Justificación' ? 'Pendiente Justificante' : $asistencia;

                                                        $enVacaciones = $vacaciones->has($empleado->id_empleado);

                                                    @endphp
                                                    <tr class="{{ $highlight }}">
                                                        <td>{{ $empleado->id_empleado }}</td>
                                                        <td>
                                                            {{ $empleado->nombre . ' ' . $empleado->apellido_pat }}
                                                            @if($enVacaciones)
                                                                <span class="badge bg-danger text-white">En periodo vacacional</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $empleado->puesto }}</td>
                                                        <td>
                                                            <select name="asistencia[{{ $empleado->id_empleado }}]" class="form-select" onchange="handleJustification(this, '{{ $empleado->id_empleado }}')">
                                                                <option value="Asistencia" {{ $estado_asistencia == 'Asistencia' ? 'selected' : '' }}>Asistencia</option>
                                                                <option value="Falta" {{ $estado_asistencia == 'Falta' ? 'selected' : '' }}>Falta</option>
                                                                <option value="Justificación" {{ $estado_asistencia == 'Justificación' ? 'selected' : '' }}>Justificación</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            
                                            <button class="mt-5 btn btn-primary form-control" type="submit">Guardar</button>
                                        </form>
                                    </div>
                                </div>		 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
    function handleJustification(select, idEmpleado) {
        if (select.value === 'Justificación') {
            select.closest('tr').classList.add('bg-warning');
            select.options[select.selectedIndex].text = 'Pendiente Justificante';
            // Obtener los datos del empleado
            let id = select.closest('tr').querySelector('td:nth-child(1)').textContent.trim();
            let nombre = select.closest('tr').querySelector('td:nth-child(2)').textContent.trim();
            let puesto = select.closest('tr').querySelector('td:nth-child(3)').textContent.trim();
            let fecha = document.getElementById('fecha').value;

             window.location.href = `/justi_Asista?id=${id}&nombre=${nombre}&puesto=${puesto}&fecha=${fecha}`;
        } else {
            select.closest('tr').classList.remove('bg-warning');
        }
    }
</script>

@endsection
		