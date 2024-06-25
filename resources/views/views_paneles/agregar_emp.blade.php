@extends('template')
<title>Añadir Empleados</title>

@section('contenido_gral')

            <main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Agregar Empleados</strong></h1>

					<div class="row">
						<div class="col-12 col-xxl-9 d-flex">

							<div class="card flex-fill">
								
								
								<div class="card-body">
									<!-- <form> -->
									{!! Form::open(['url' => 'save']) !!}
									@csrf
										<div class="row">
											<h3 class="h3 text-primary mb-3">Información Personal</h3>
										</div>
										<div class="row">
											<div class="col-md-12 mb-3">											 
												{!! Form::label('nombre', 'Nombre') !!}

												{!! Form::text('nombre', '', ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
											</div>
										</div>
										
										<div class="row">
											
											<div class="col-md-6 mb-3">
												<!-- <label for="apellido" class="form-label">Apellido Paterno</label> -->
												{!! Form::label('apellido_pat', 'Apellido Paterno') !!}
												<!-- <input type="text" required class="form-control" id="apellido_pat" placeholder="Apellido"> -->
												{!! Form::text('apellido_pat', '', ['class' => 'form-control', 'placeholder' => 'Apellido Paterno', 'required']) !!}
											</div>
											
											<div class="col-md-6 mb-3">
												<!-- <label for="apellido" class="form-label">Apellido Materno</label>
												<input type="text" class="form-control" required id="apellido_mat" placeholder="Apellido"> -->
												{!! Form::label('apellido_mat', 'Apellido Materno') !!}
                        						{!! Form::text('apellido_mat', '', ['class' => 'form-control', 'placeholder' => 'Apellido Materno', 'required']) !!}		
											
											</div>

										</div>


										<div class="row">
											<div class="col-md-6 mb-3">
												<!-- <label for="telefono" class="form-label">Teléfono</label>
												<input type="tel" class="form-control" required  id="telefono" placeholder="Teléfono"> -->
												{!! Form::label('telefono', 'Telefono') !!}
												{!! Form::tel('telefono', '', ['class' => 'form-control', 'placeholder' => 'Telefono', 'required', 'pattern' => '[0-9]{10}', 'maxlength' => '10', 'title' => 'El teléfono debe contener exactamente 10 dígitos']) !!}
											</div>
											<div class="col-md-6 mb-3">
											
 												{!! Form::label('genero', 'Genero') !!}
												{!! Form::select('genero', ['' => 'Seleccionar', 'Masculino' => 'Masculino', 'Femenino' => 'Femenino', 'Otro' => 'Otro'], null, ['class' => 'form-control', 'required']) !!}
											
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 mb-3">
												<!-- <label for="direccion" class="form-label">Fecha de Nacimiento</label> -->
												{!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento') !!}
												{!! Form::date('fecha_nacimiento', '', ['class' => 'form-control', 'required', 'max' => \Carbon\Carbon::now()->subYears(18)->format('Y-m-d')]) !!}
												<!-- <input type="date" class="form-control" required id="fecha_nacimiento"> -->

											</div>
										</div>

										<div class="row">
											<h3 class="h3 text-primary mb-3">Información Laboral</h3>
										</div>

										<div class="row">
											<div class="col-md-12 mb-3">
												<!-- <label for="direccion" class="form-label">Fecha de de Ingreso a la Empresa</label> -->
												<!-- <input type="date" class="form-control" required id="fecha_ingreso"> -->
												{!! Form::label('fecha_ingreso', 'Fecha de Ingreso') !!}
												{!! Form::date('fecha_ingreso', '', ['class' => 'form-control', 'required', 'min' => \Carbon\Carbon::now()->format('Y-m-d')]) !!}
											</div>
										</div>

										<div class="row">
									 		<div class="col-md-6 mb-3">
											 	<!-- <label for="puesto" class="form-label">Puesto</label>
												<input class="form-control" required id="puesto" placeholder="Puesto" type="text"> -->
												{!! Form::label('puesto', 'Puesto') !!}
                        						{!! Form::text('puesto', '', ['class' => 'form-control', 'placeholder' => 'Puesto', 'required']) !!}		
											</div>
											
											    <div class="col-md-6 mb-3">
												{!! Form::label('salario', 'Salario') !!}
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">$</span>
														</div>
														{!! Form::number('salario', '', ['class' => 'form-control', 'placeholder' => 'Salario', 'required', 'min' => '0', 'step' => '0.01']) !!}
													</div>
												</div>
											
										</div>

										<div class="row">
 											<button type="submit" class="btn col-12 btn-primary">Enviar</button>

										</div>

										 {!! Form::close() !!}

									<!-- </form> -->
								</div>

								

							</div>
						</div>
		 
					</div>

				</div>
			</main>

@endsection