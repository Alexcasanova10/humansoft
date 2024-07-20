@extends('template')
<title>Vacaciones</title>

@section('contenido_gral')
@section('titulo')
Vacaciones
@endsection
<main class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container ">
                            <div class="text-right mb-3 d-flex justify-content-end">
                                <form action="{{ route('agregar_vacaciones') }}" method="GET" class="d-flex align-items-center gap-3">
                                    <label for="" class="text-primary h4">Empleado</label>
                                    <select name="id_empleado" id="id_empleado" class="form-select">
                                        <option value="" selected disabled>--Seleccionar--</option>
                                        @foreach($empleados as $empleado)
                                            <option value="{{ $empleado->id_empleado }}">{{ $empleado->nombre }} {{ $empleado->apellido_pat }} {{ $empleado->apellido_mat }}</option>
                                        @endforeach
                                    </select>
                                    <div class="task-hold input-group">
                                        <button type="submit" class="btn btn-primary">Agregar Vacaciones</button>
                                    </div>
                                </form>
                            </div>
                            @if($vacaciones->isEmpty())
                                <h3 class="text-primary h3 text-center">No hay empleados con vacaciones activas en este momento.</h3>
                            @else
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Empleado</th>
                                            <th>Cargo</th>
                                            <th>Fecha de Inicio</th>
                                            <th>Fecha de Fin</th>
                                            <th>Comentarios</th>
                                             <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($vacaciones as $vacacion)
                                        <tr>
                                            <td>{{ $vacacion->empleado->nombre }} {{ $vacacion->empleado->apellido_pat }} {{ $vacacion->empleado->apellido_mat }}</td>
                                            <td>{{ $vacacion->empleado->puesto }}</td>
                                            <td>{{ $vacacion->fecha_inicio->format('Y-m-d') }}</td>
                                            <td>{{ $vacacion->fecha_fin->format('Y-m-d') }}</td>
                                            <td>{{ $vacacion->comentarios }}</td>
                                             <td class="d-flex justify-content-between">
                                                <div class="contenedor">
                                                    <a href="{{ route('editar_vac', $vacacion->id_vacaciones) }}" class="btn btn-info ">Editar</a>
                                                </div>

                                                <form onsubmit="return confirm('¿Desea eliminar el registro de vacaciones?')" action="{{ route('eliminar_vac', $vacacion->id_vacaciones) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-secondary">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
