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
 												{!! Form::label('apellido_pat', 'Apellido Paterno') !!}
 												{!! Form::text('apellido_pat', '', ['class' => 'form-control', 'placeholder' => 'Apellido Paterno', 'required']) !!}
											</div>
											
											<div class="col-md-6 mb-3">
 												{!! Form::label('apellido_mat', 'Apellido Materno') !!}
                        						{!! Form::text('apellido_mat', '', ['class' => 'form-control', 'placeholder' => 'Apellido Materno', 'required']) !!}		
											</div>

										</div>


										<div class="row">
											<div class="col-md-6 mb-3">
												{!! Form::label('telefono', 'Telefono') !!}
												{!! Form::tel('telefono', '', ['class' => 'form-control', 'placeholder' => 'Telefono', 'required', 'pattern' => '[0-9]{10}', 'maxlength' => '10', 'title' => 'El teléfono debe contener exactamente 10 dígitos']) !!}
											</div>
											<div class="col-md-6 mb-3">							
 												{!! Form::label('genero', 'Genero') !!}
												{!! Form::select('genero', ['' => 'Seleccionar', 'Masculino' => 'Masculino', 'Femenino' => 'Femenino', 'Otro' => 'Otro'], null, ['class' => 'form-control', 'required']) !!}
											</div>
										</div>
										<div class="row">
											<div class="col-md-6 mb-3">
												{!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento') !!}
												{!! Form::date('fecha_nacimiento', '', ['class' => 'form-control', 'required', 'max' => \Carbon\Carbon::now()->subYears(18)->format('Y-m-d')]) !!}
											</div>
											
											<div class="col-md-6 mb-3">
												{!! Form::label('estado_civil', 'Estado Civil') !!}
												{!! Form::select('estado_civil', ['' => 'Seleccionar', 'soltero' => 'Soltero', 'casado' => 'Casado','divorciado' => 'Divorciado','viudo' => 'Viudo'], null, ['class' => 'form-control', 'required']) !!}
											</div>


										</div>

										<div class="row">
											<div class="col-md-6 mb-3">
											{!! Form::label('curp', 'CURP') !!}
											{!! Form::text('curp', '', ['class' => 'form-control', 'placeholder' => 'CURP', 'required']) !!}
											</div>
											<div class="col-md-6 mb-3">
												{!! Form::label('nss', 'Número Seguro Social') !!}
												{!! Form::text('nss', '', ['class' => 'form-control', 'placeholder' => 'NSS', 'required']) !!}
											</div>
										</div>
										
										<div class="row">
											<h3 class="h3 text-primary mb-3">Domicilio</h3>
										</div>

										<div class="row">
											<div class="col-md-4 mb-3">
												{!! Form::label('calle', 'Calle') !!}
											{!! Form::text('calle', '', ['class' => 'form-control', 'placeholder' => 'Calle', 'required']) !!}
											</div>
											<div class="col-md-4 mb-3">
												{!! Form::label('num_exterior', 'Número Exterior') !!}
											{!! Form::text('num_exterior', '', ['class' => 'form-control', 'placeholder' => 'Número Exterior', 'required']) !!}
											</div>
											<div class="col-md-4 mb-3">
												{!! Form::label('num_interior', 'Número Interior') !!}
												{!! Form::text('num_interior', '', ['class' => 'form-control', 'placeholder' => 'Número Interior',]) !!}
											</div>
										</div>

										<div class="row">
											<div class="col-md-4 mb-3">
												{!! Form::label('colonia', 'Colonia') !!}
												{!! Form::text('colonia', '', ['class' => 'form-control', 'placeholder' => 'Colonia',]) !!}
											</div>
											<div class="col-md-4 mb-3">
												{!! Form::label('codigo_postal', 'CP') !!}
												{!! Form::text('codigo_postal', '', ['class' => 'form-control', 'placeholder' => 'Código Postal',]) !!}
											</div>
											<div class="col-md-4 mb-3">
												{!! Form::label('ciudad', 'Ciudad') !!}
												{!! Form::text('ciudad', '', ['class' => 'form-control', 'placeholder' => 'Ciudad',]) !!}
											</div>
										</div>

										<div class="row">
											<h3 class="h3 text-primary mb-3">Información Laboral</h3>
										</div>

										<div class="row">
											<div class="col-md-12 mb-3">
												{!! Form::label('fecha_ingreso', 'Fecha de Ingreso') !!}
												{!! Form::date('fecha_ingreso', '', ['class' => 'form-control', 'required', 'min' => \Carbon\Carbon::now()->format('Y-m-d')]) !!}
											</div>
										</div>

										<div class="row">
									 		<div class="col-md-6 mb-3">
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

								</div>

								

							</div>
						</div>
		 
					</div>

				</div>
			</main>

@endsection