@extends('template')

@section('contenido_gral')

	<main class="content">
		<div class="container-fluid p-0">
			<h1 class="h3 mb-3"><strong>Editar Información de Empleados</strong></h1>

			<div class="row">
				<div class="col-12 col-xxl-9 d-flex">

					<div class="card flex-fill">
														
						<div class="card-body">
								{!! Form::model($modelEmpleados, [ 'method' => 'patch','route' => ['empleado.update', $empleado->id_empleado]]) !!}
								@csrf
								<div class="row">
									<h3 class="h3 text-primary mb-3">Información Personal</h3>
								</div>
								<div class="row">
									<div class="col-md-12 mb-3">
										{!! Form::label('nombre', 'Nombre') !!}
											
										{!! Form::text('nombre',$empleado->nombre , ['class' => 'form-control'])!!}
									</div>
								</div>
								<div class="row">
									{{Form::button('<i class="fa fa-check-square-o"></i> Update', ['class' => 'btn btn-success', 'type' => 'submit'])}}
								</div> 
							{!! Form::close() !!}
						</div>

					</div>
				</div>
	
			</div>

		</div>
	</main>

@endsection