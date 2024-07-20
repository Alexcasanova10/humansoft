@extends('template')
<title>Agregar periodo vacacional</title>

@section('contenido_gral')
@section('titulo')
    Agregar Vacaciones
@endsection
<main class="content">
  <div class="container-fluid p-0">
    <div class="row">
        <div class="col-12 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <h2 class="text-center text-white bg-primary rounded p-2 mb-4">
                      SOLICITUD DE VACACIONES
                    </h2>
                    <form action="{{ route('store_vacaciones') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id_empleado" value="{{ $empleado->id_empleado }}" />
                        <div class="row">
                          <div class="border p-3 mb-4 rounded col-6">
                            <h3 class="text-center bg-primary text-white p-2 rounded">
                              Información del Empleado
                            </h3>
                            <div class="form-group">
                              <label for="">Nombre Completo</label>
                              <input type="text" class="form-control" value="{{ $empleado->nombre }} {{ $empleado->apellido_pat }} {{ $empleado->apellido_mat }}" readonly />
                            </div>
                            <div class="form-group">
                              <label for="">ID</label>
                              <input type="text" class="form-control" value="{{ $empleado->id_empleado }}" readonly />
                            </div>
                            <div class="form-group">
                              <label for="">Puesto</label>
                              <input type="text" class="form-control" value="{{ $empleado->puesto }}" readonly />
                            </div>
                          </div>
                          <div class="border p-3 mb-4 rounded col-6">
                            <h3 class="text-center bg-primary text-white p-2 rounded">
                              Periodo Vacacional
                            </h3>
                            <div class="form-group">
                              <label for="">Fecha de Inicio</label>
                              <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required />
                            </div>
                            <div class="form-group">
                              <label for="">Fecha de Fin</label>
                              <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required />
                            </div>
                            <div class="form-group">
                              <label for="">Número de Días Solicitados</label>
                              <input
                                type="number"
                                class="form-control"
                                id="dias_solicitados"
                                name="dias_solicitados"
                                readonly
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="border p-3 mb-4 rounded col-6 mr-4">
                            <h3 class="text-center bg-primary text-white p-2 rounded">
                              Comentarios
                            </h3>
                            <div class="form-group">
                              <textarea class="form-control" name="comentarios" id="" rows="3"></textarea>
                            </div>
                          </div>
                          <div class="border p-3 mb-4 rounded col-6">
                            <h3 class="text-center bg-primary text-white p-2 rounded">
                              Aprobación
                            </h3>
                            <div class="form-group"> 
                              <label for="">Fecha de Aprobación</label>
                              <input type="date" class="form-control" name="fecha_Aprobacion" id="" readonly value="{{ $fechaHoy }}" required />
                            </div>
                            <div class="form-group">
                              <button type="submit" class="mt-4 btn btn-primary col-12">
                                  Enviar Solicitud
                              </button>
                            </div>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
  </div>
</main>        
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fechaInicio = document.getElementById('fecha_inicio');
        const fechaFin = document.getElementById('fecha_fin');
        const diasSolicitados = document.getElementById('dias_solicitados');

        function calcularDias() {
            if (fechaInicio.value && fechaFin.value) {
                const inicio = new Date(fechaInicio.value);
                const fin = new Date(fechaFin.value);
                const diferencia = Math.ceil((fin - inicio) / (1000 * 60 * 60 * 24)) + 1; // +1 para incluir ambos días
                diasSolicitados.value = diferencia;
            }
        }

        fechaInicio.addEventListener('change', calcularDias);
        fechaFin.addEventListener('change', calcularDias);
    });
</script>
@endsection
