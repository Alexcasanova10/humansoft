@extends('template')
<title>Inicio HumanSoft</title>
@section('contenido_gral')
    <!-- poner el to do list, recordatorios del día, y grid de 3 cuadros en row que tiene total de empleados,   -->
	<style>
		.check {
			-webkit-appearance: none; /* Quitar el estilo por defecto */
			-moz-appearance: none;    /* Quitar el estilo por defecto */
			appearance: none;         /* Quitar el estilo por defecto */
			width: 25px;
			height: 25px;
			border: 2px solid #007bff; /* Color del borde */
			border-radius: 5px;        /* Bordes redondeados */
			background-color: #fff;    /* Color de fondo */
			cursor: pointer;
			position: relative;
		}

		.check:checked {
			background-color: #007bff; /* Color de fondo al estar seleccionado */
			border: 2px solid #007bff; /* Color del borde al estar seleccionado */
		}

		.check:checked::after {
			content: '✓';
			color: #fff;
			font-size: 18px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		.bg-primary, .bg-danger, .bg-warning {
			color: white;
			height: 200px; /* Ajusta la altura según tus necesidades */
		}

		.light {
			font-weight: bold;
		}

		.info-box {
			background-color: rgba(255, 255, 255, 0.2); /* Fondo semi-transparente */
			color: white;
			padding: 5px 10px;
			border-radius: 5px;
			display: inline-flex;
			align-items: center;
			font-size: 14px; /* Tamaño de la fuente para el rectángulo */
		}

		.info-box i {
			margin-left: 5px;
		}
	</style>
	@section('titulo')
		Bienvenido!!
	@endsection
	<main class="content">
		<div class="container-fluid p-0">

			<div class="d-flex align-items-center mb-3 justify-content-between">
				<!-- <button class="btn-primary btn" id="btnAgregar" onclick="agregarCard()" >Agregar Pendiente</button> -->
				
				<div class="form" id="form">
					<div class="task-hold input-group" id="task-hold">
						<input type="text" class="form-control input text" id="task" placeholder="Agregar item a lista">
						<button class="btn btn-primary input submit" onclick="agregar()" id="submit" value="AÑADIR">AÑADIR</button>
					</div>
				</div>
			
			
			</div>


			<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
 				<div class="col-xl-12 col-xxl-5 d-flex">
					<div class="w-100">
						<div class="row ">
							<div class="col-12">
								<div class="scrollable-container">
									<div class="row duties duties-hold" id="card-row">
																				
 									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-8 d-flex ">
								<div class="card flex-fill">
									<div class="card-header">

										<h5 class="card-title mb-0">Recordatorios del día</h5>
									</div>
									<div class="card-body d-flex">
										<div class="align-self-center w-100">
											<div class="chart">
												<div id="datetimepicker-dashboard"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-4">
									<div class="col d-flex justify-content-center align-items-center bg-primary position-relative">
										<div class="text-center">
											<h1 class="light text-white">Empleados <span class="number">10</span></h1>
											<div class="info-box d-flex align-items-center justify-content-center mt-2">
												<a class="btn light text-white"  href="{{ route('empleados') }}">
													Más información <i class="fas fa-arrow-right ml-2"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="col d-flex justify-content-center align-items-center bg-danger position-relative">
										<div class="text-center">
											<h1 class="light text-white">Asistencia <span class="number">10</span></h1>
											<div class="info-box d-flex align-items-center justify-content-center mt-2">
												<a class="btn light text-white"  href="{{ route('asistencias') }}">
													Más información <i class="fas fa-arrow-right ml-2"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="col d-flex justify-content-center align-items-center bg-warning position-relative">
										<div class="text-center">
											<h1 class="light text-white">Vacaciones <span class="number">0</span></h1>
											<div class="info-box d-flex align-items-center justify-content-center mt-2">
												<a class="btn light text-white"  href="{{ route('vacaciones') }}">
													Más información <i class="fas fa-arrow-right ml-2"></i>
												</a>											
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						</div>
					</div>
				</div>
			</div>

		</div>
	</main>

	<script>	
  		function agregar(){
			let inputTxt = document.getElementById('task').value;

			let cardRow = document.getElementById('card-row');

			
			let li = document.createElement('div');
			let btn_holder = document.createElement('div');
			let checkbox = document.createElement('input');

			let i1 = document.createElement('i');

			


			if(inputTxt == ""){
				alert('Favor de agregar una tarea a realizar');
			}else {
				// Crear los elementos necesarios
				let colDiv = document.createElement('div');
				colDiv.className = 'col-auto mb-3';
				colDiv.id = 'col-card';

				let cardDiv = document.createElement('div');
				cardDiv.className = 'card';

				let cardBodyDiv = document.createElement('div');
				cardBodyDiv.className = 'card-body d-flex justify-content-around align-items-center';

				let checkboxDiv = document.createElement('div');
				checkboxDiv.className = 'col-auto p-1';

				let checkbox = document.createElement('input');
				checkbox.type = 'checkbox';
				checkbox.className = 'check';

				let textDiv = document.createElement('div');
				textDiv.className = 'col-auto p-1';

				let h5 = document.createElement('h5');
				h5.className = 'h5 mb-0';
				h5.textContent = inputTxt;  // Usar el texto ingresado

				let buttonGroupDiv = document.createElement('div');
				buttonGroupDiv.className = 'col-auto p-1 d-flex btn-group';

				// let editButton = document.createElement('button');
				// editButton.className = 'btn btn-primary';
				// editButton.textContent = 'Editar';

				let deleteButton = document.createElement('button');
				deleteButton.className = 'btn btn-danger';
				deleteButton.textContent = 'Eliminar';


			  
				// Armar la estructura
				checkboxDiv.appendChild(checkbox);
				textDiv.appendChild(h5);
				// buttonGroupDiv.appendChild(editButton);
				buttonGroupDiv.appendChild(deleteButton);

				cardBodyDiv.appendChild(checkboxDiv);
				cardBodyDiv.appendChild(textDiv);
				cardBodyDiv.appendChild(buttonGroupDiv);

				cardDiv.appendChild(cardBodyDiv);
				colDiv.appendChild(cardDiv);

				// Agregar el card al row
				cardRow.appendChild(colDiv);
				
				deleteButton.addEventListener('click', function() {
					if(confirm('¿Deseas eliminar el pendiente?')){
						cardRow.removeChild(colDiv);
					}
				});

				checkbox.addEventListener('change', function() {
					if (checkbox.checked) {
						h5.style.textDecoration = 'line-through';
					} else {
						h5.style.textDecoration = 'none';
					}
				});


				// Limpiar el input después de agregar la tarea
				document.getElementById('task').value = '';
			}
		} 		 
	</script>

@endsection