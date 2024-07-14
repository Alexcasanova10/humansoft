@extends('template')

 <title>Empleados</title>
@section('contenido_gral')
@section('titulo')
        Empleados
	@endsection
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
							<form action="{{route('empleados')}}" method="GET" class="d-flex">
								<input type="text" class="form-control" name="nombre" placeholder="Nombre" aria-label="Ejemplo" aria-describedby="button-addon1">
								<button type="submit" class="btn btn-info">Buscar</button>
							</form>
						</div>
					</div>
				</div>


				<div class="col-4">
					<div class="input-group">
						<form action="{{ route('empleados.filtrar') }}" method="GET" class="form-group d-flex align-items-center" style="margin: 0;">
							@csrf
							<select name="estado" class="form-select me-2" id="estatuSelect">
								<option value="activo" {{ request('estado') == 'activo' ? 'selected' : '' }}>Activo</option>
								<option value="inactivo" {{ request('estado') == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
							</select>
							<button type="submit" class="btn btn-primary">Filtrar</button>
						</form>
					</div>
           		</div>			
 
		</div>

		<div class="row">
			<div class="col-12 col-xxl-9 d-flex">
				<div class="card flex-fill">

					<table class="table table-hover my-0">
						<thead>
							<tr>
								<th class="d-none d-md-table-cell">Id</th>
								<th class="d-none d-md-table-cell">Nombre</th>
								<th class="d-none d-md-table-cell">Apellidos</th>
								<th class="d-none d-md-table-cell">Teléfono</th>
								<th class="d-none d-md-table-cell">Puesto</th>
								<th class="d-none d-md-table-cell">Fecha de ingreso</th>
 								<th class="d-none d-md-table-cell">Estatus</th>
								<th class="d-none d-md-table-cell">Acción</th>
							</tr>
						</thead>
						<tbody>
						@foreach($empleados as $empleado)
							<tr >
								<td  class="c" @if($empleado->estado == 'Inactivo') style="text-decoration: line-through; " @endif> {{$empleado->id_empleado}}</td>
								<td class="d-none d-md-table-cell"  @if($empleado->estado == 'Inactivo') style="text-decoration: line-through; " @endif>{{$empleado->nombre}}</td>

								<td class="d-none d-md-table-cell"  @if($empleado->estado == 'Inactivo') style="text-decoration: line-through; " @endif>{{$empleado->apellido_pat." ".$empleado->apellido_mat}}</td>

								
								<td class="d-none d-md-table-cell"  @if($empleado->estado == 'Inactivo') style="text-decoration: line-through; " @endif>{{$empleado->telefono}}</td>


								<td class="d-none d-md-table-cell"  @if($empleado->estado == 'Inactivo') style="text-decoration: line-through; " @endif> {{$empleado->puesto}}</td>
								<td class="d-none d-md-table-cell"  @if($empleado->estado == 'Inactivo') style="text-decoration: line-through;" @endif> {{$empleado->fecha_ingreso}}</td>
 


								<td><span id="btnBadge"   @if($empleado->estado == 'Inactivo') style="text-decoration: line-through;" @endif>{{$empleado->estado}}</span></td>
								<td>

								<a href="{{ route('empleado.editar', $empleado->id_empleado) }}" class="btn btn-info"  @if($empleado->estado == 'Inactivo') style="display: none;" @endif>Editar</a>

								<form onsubmit="return confirm('¿Desea reactivar al empleado?')" action="{{ route('empleado.reactivarEmp', $empleado->id_empleado) }}" method="POST" style="display:inline;" @if($empleado->estado == 'Activo') style="display: none;" @endif>
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-info"@if($empleado->estado == 'Activo') style="display: none;" @endif    >Reactivar</button>
                                </form>
									 
								<form onsubmit ="return confirm('¿Desea eliminar al empleado?')" action="{{ route('empleado.actualizarEstado', $empleado->id_empleado) }}" method="POST" style="display:inline;">
									@csrf
									@method('PATCH')
									<button type="submit" class="btn btn-secondary" @if($empleado->estado == 'Inactivo') style="display: none;" @endif>Eliminar</button>
								</form>


									
									
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


 