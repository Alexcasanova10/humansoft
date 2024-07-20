@extends('template')
<title>Justificar Asistencias</title>

@section('contenido_gral')
    @section('titulo')
        Justificar Asistencias
    @endsection
    <main class="content">
        <div class="container-fluid container bg-white">
            <form action="{{ route('guardar_justificacion') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="m-3 col">
                        <h2 class="text-center text-white bg-primary rounded p-2 mb-4">Información Personal</h2>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre del empleado</span>
                            <input type="text" class="form-control" id="nombre_empleado" name="nombre_empleado" value="{{ request()->input('nombre') }}" readonly>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Id de empleado</span>
                            <input type="text" class="form-control" id="id_empleado" name="id_empleado" value="{{ request()->input('id') }}" readonly>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Puesto</span>
                            <input type="text" class="form-control" id="puesto_empleado" name="puesto_empleado" value="{{ request()->input('puesto') }}" readonly>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Fecha</span>
                            <input type="date" class="form-control" id="fecha_empleado" name="fecha_empleado" value="{{ request()->input('fecha') }}" readonly>
                        </div>
                    </div>
                    <div class="m-3 col">
                        <h2 class="text-center text-white bg-primary rounded p-2 mb-4">Detalles de la Falta:</h2>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Tipo de falta</span>
                            <select class="form-control" name="tipo_falta" id="tipo_falta">
                                <option value="" selected disabled>--Selecciona--</option>
                                <option value="Médica">Médica</option>
                            </select>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Motivo de la Falta</span>
                            <textarea class="form-control" name="motivo_falta" id="motivo_falta"></textarea>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Documentación</span>
                            <input class="form-control" type="file" id="formFileMultiple" name="documentacion[]" accept=".pdf" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-11 m-auto">
                        <button class="btn form-control btn-primary" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection

