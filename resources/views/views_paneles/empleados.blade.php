@extends('template')

 <title>Empleados</title>
@section('contenido_gral')
 
<main class="content">
    <div class="container-fluid">
		<div class="mb-3 row">
				
				<div class="col-4 ">
					 <div class="form" id="form">
						 <div class="task-hold input-group" id="task-hold">
							 <a href="{{ route('agregar_emp') }}" class="btn btn-primary stretched-link">Agregar empleado
							 </a>			 
						 </div>
					 </div>
				</div>		
				
				<div class="col-4 d-flex justify-content-start"> 
					<div class="form" id="form">
						<div class="task-hold input-group" id="task-hold">
							<input type="text" class="form-control" placeholder="Nombre" aria-label="Example text with button addon" aria-describedby="button-addon1">
							<a href="#" class="btn btn-success stretched-link">Buscar
							</a>			 
						</div>
					</div>
				</div>
				
				<div class="col-4">
					<div class="input-group">
						<select class="form-select" id="inputSelectEstatus">
							<option selected disabled>Seleccionar estatus</option>
							<option value="activo">Activo</option>
							<option value="inactivo">Inactivo</option>
						</select>
						<a href="#" class="btn btn-primary stretched-link">Filtrar</a>	
					</div>
				</div>			

	 			

				
	
 
		</div>

		<div class="row">
			<div class="col-12 col-xxl-9 d-flex">
				<div class="card flex-fill">

					<table class="table table-hover my-0">
						<thead>
							<tr>
								<th class="d-none d-xl-table-cell">Id Empleado</th>
								<th class="d-none d-xl-table-cell">Nombre</th>
								<th class="d-none d-md-table-cell">Puesto</th>
								<th class="d-none d-md-table-cell">Fecha de ingreso</th>
								<th class="d-none d-md-table-cell">Estatus</th>
								<th class="d-none d-md-table-cell">Acción</th>
							</tr>
						</thead>
						<tbody>
						@foreach($empleados as $empleado)
							<tr >
								<td  class="d-none d-xl-table-cell" @if($empleado->estado == 'Inactivo') style="text-decoration: line-through; color: red" @endif> {{$empleado->id_empleado}}</td>
								<td class="d-none d-md-table-cell"  @if($empleado->estado == 'Inactivo') style="text-decoration: line-through; color: red" @endif>{{$empleado->nombre." ".$empleado->apellido_pat." ".$empleado->apellido_mat }}</td>
								<td class="d-none d-md-table-cell"  @if($empleado->estado == 'Inactivo') style="text-decoration: line-through; color: red" @endif> {{$empleado->puesto}}</td>
								<td class="d-none d-md-table-cell"  @if($empleado->estado == 'Inactivo') style="text-decoration: line-through; color: red" @endif> {{$empleado->fecha_ingreso}}</td>
								<td><span id="btnBadge" class="badge {{ $empleado->estado == 'Inactivo' ? 'bg-danger' : 'bg-success' }}"  @if($empleado->estado == 'Inactivo') style="text-decoration: line-through;" @endif>{{$empleado->estado}}</span></td>
								<td>

									<!-- <a href="{{ route('editar_emp') }}" class="btn btn-primary stretched-link">Editar empleado
									</a> -->

									<a href="#edit{{$empleado->id_empleado}}" data-bs-toggle="modal" class="btn btn-success">  Editar</a>  
									
									<form action="{{ route('empleado.actualizarEstado', $empleado->id_empleado) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-danger" @if($empleado->estado == 'Inactivo') style="display: none;" @endif>Eliminar</button>
                                    </form>
									
									<div class="modal fade" id="edit{{$empleado->id_empleado}}" tabindex="-1" aria-labelledby="editModalLabel{{$empleado->id_empleado}}" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<!-- <h5 class="modal-title" id="editModalLabel{{$empleado->id_empleado}}">Editar Empleado</h5> -->
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
													
					<div class="modal-body">
						{!! Form::model($empleados, [ 'method' => 'patch','route' => ['empleado.update', $empleado->id_empleado]]) !!}
							@csrf
							<div class="row">
								<h3 class="h3 text-primary mb-3">Editar Información de Empleado</h3>
							</div>
							<div class="row">
								<div class="col-md-12 mb-3">
									{!! Form::label('nombre', 'Nombre') !!}
										
									{!! Form::text('nombre',$empleado->nombre , ['class' => 'form-control'])!!}
								</div>

								<div class="col-md-12 mb-3">
									{!! Form::label('apellido_pat', 'Apellido Paterno') !!}
										
									{!! Form::text('apellido_pat',$empleado->apellido_pat , ['class' => 'form-control'])!!}
								</div>	

							</div>
							<div class="row">
								{{Form::button('Actualizar', ['class' => 'btn btn-success', 'type' => 'submit'])}}
							</div> 
						{!! Form::close() !!}
					</div>
        </div>
    </div>
</div>
									


									
								
								
								</td>
							</tr>
						@endforeach
 						</tbody>
					</table>
				</div>
			</div>		 
		</div>

    </div>


</main>
 
<script>
	let btnBadge = document.getElementById('btnBadge');

	if(btnBadge == 'Inactivo'){
		btnBadge.classList.toggle("bg-danger");
	}
	
</script>
 
@endsection


 