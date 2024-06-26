@extends('template')

@section('contenido_gral')

<main class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h2>Editar Empleado</h2>
					
					<form action="{{ route('empleado.update', $empleado->id_empleado) }}" method="POST">
						@csrf
						@method('PATCH')
						
						<div class="mb-3">
							<label for="nombre" class="form-label">Nombre</label>
							<input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $empleado->nombre) }}" required>
						</div>
						
						<div class="mb-3">
							<label for="apellido_pat" class="form-label">Apellido Paterno</label>
							<input type="text" class="form-control" id="apellido_pat" name="apellido_pat" value="{{ old('apellido_pat', $empleado->apellido_pat) }}" required>
						</div>

						<button type="submit" class="btn btn-primary">Guardar Cambios</button>
					</form>



				</div>
			</div>
		</div>
	</main>

@endsection
