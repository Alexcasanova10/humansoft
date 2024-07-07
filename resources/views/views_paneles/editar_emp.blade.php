@extends('template')
<title>Editar Empleados</title>

@section('contenido_gral')
@section('titulo')
        Editar Empleados
	@endsection
<main class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
 					
					<form action="{{ route('empleado.update', $empleado->id_empleado) }}" method="POST">
						@csrf
						@method('PATCH')
						
						<div class="row">
							<div class="col-12 mb-3">
								<label for="nombre" class="form-label">Nombre</label>
								<input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $empleado->nombre) }}" required>
							</div>
						</div> 

						<div class="row">
							<div class="col-6 mb-3">
								<label for="apellido_pat" class="form-label">Apellido Paterno</label>
								<input type="text" class="form-control" id="apellido_pat" name="apellido_pat" value="{{ old('apellido_pat', $empleado->apellido_pat) }}" required>
							</div>
							<div class="col-6 mb-3">
								<label for="apellido_mat" class="form-label">Apellido Materno</label>
								<input type="text" class="form-control" id="apellido_mat" name="apellido_mat" value="{{ old('apellido_mat', $empleado->apellido_mat) }}" required>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="telefono" class="form-label">Telefono</label>
								<input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $empleado->telefono) }}" required>
							</div>
							<div class="col-md-6 mb-3">
							<label for="estado_civil" class="form-label">Estado Civil</label>

								<select class="form-control" id="estado_civil" name="estado_civil" required>
									<option value="" disabled {{ old('estado_civil', $empleado->estado_civil) == '' ? 'selected' : '' }}>Seleccionar</option>
									<option value="soltero" {{ old('estado_civil', $empleado->estado_civil) == 'soltero' ? 'selected' : '' }}>Soltero</option>
									<option value="casado" {{ old('estado_civil', $empleado->estado_civil) == 'casado' ? 'selected' : '' }}>Casado</option>
									<option value="divorciado" {{ old('estado_civil', $empleado->estado_civil) == 'divorciado' ? 'selected' : '' }}>Divorciado</option>
									<option value="viudo" {{ old('estado_civil', $empleado->estado_civil) == 'viudo' ? 'selected' : '' }}>Viudo</option>
								</select>


							</div>
						</div>
						 

						<div class="row">
							<div class="col-6 mb-3">
								<label for="puesto" class="form-label">Puesto</label>
								<input type="text" class="form-control" id="puesto" name="puesto" value="{{ old('puesto', $empleado->puesto) }}" required>
							</div>
							<div class="col-6 mb-3">
								<label for="salario" class="form-label">Salario</label>
								<input type="number" class="form-control" id="salario" name="salario" value="{{ old('salario', $empleado->salario) }}" required>
							</div>
						</div>

						<button type="submit" class="btn btn-primary">Guardar Cambios</button>
					 
					
					</form>



				</div>
			</div>
		</div>
	</main>

@endsection
