@extends('template')
<title>Listado de Nóminas</title>

@section('contenido_gral')
    @section('titulo')
            Listado de Nóminas
    @endsection 
    
<main class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container ">
                            <form method="GET" action="" class="d-flex align-items-center justify-content-center gap-3">
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
                                    <button type="submit" class="btn btn-primary">Ver listado de Nóminas</button>

                                </div>
                                <div class="input-group">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <h2 class="text-center text-white bg-primary rounded p-2 mb-4">Lista de Nóminas:</h2>

                            <!-- <table class="table text-center table-hover my-0">
                                <thead>
                                    <th class="d-none d-md-table-cell">Fecha</th>
                                    <th class="d-none d-md-table-cell">Descarga</th>
                                </thead>

                                <tbody>
                                   
                                </tbody>
                            </table> -->
                            @if($nominas && count($nominas) > 0)
                                <table class="table text-center table-hover my-0">
                                    <thead>
                                        <tr>
                                            <th class="d-none d-md-table-cell">Fecha</th>
                                            <th class="d-none d-md-table-cell">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nominas as $nomina)
                                            <tr>
                                                <td>{{ $nomina->fecha_pago }}</td>
                                                <td>
                                                    @if($nomina->archivo_pdf)
                                                    <a href="{{ asset('storage/' . $nomina->archivo_pdf) }}" download>Descargar PDF</a>
                                                    @else
                                                        No disponible
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>No hay nóminas disponibles para el empleado seleccionado.</p>
                            @endif


                        </div>
                </div>  
            </div>
        </div>
    </div>
</main>

@endsection
