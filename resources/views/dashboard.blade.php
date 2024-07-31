@extends('template')
<!-- <title>Inicio Materiales El Inge</title> -->

<title>Materiales el Inge</title>
 
@section('contenido_gral')
<style>
    .check {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
        border: 2px solid #007bff;
        border-radius: 5px;
        background-color: #fff;
        cursor: pointer;
        position: relative;
    }

    .check:checked {
        background-color: #007bff;
        border: 2px solid #007bff;
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
        height: 200px;
    }

    .light {
        font-weight: bold;
    }

    .info-box {
        background-color: rgba(255, 255, 255, 0.2);
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        display: inline-flex;
        align-items: center;
        font-size: 14px;
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
            <form id="taskForm" onsubmit="return confirm('¿Desea agregar pendiente?')" action="{{ route('pendientes.store') }}" method="POST">
                @csrf
                <div class="task-hold input-group" id="task-hold">
                    <input type="text" name="texto" class="form-control input text" id="task" placeholder="Agregar item a lista">
                    <input type="submit" value="AÑADIR" class="btn btn-primary input submit">
                </div>
            </form>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col-xl-12 col-xxl-5 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-12">
                            <div class="scrollable-container">
                                <div class="row duties duties-hold" id="card-row">
                                    <!-- Aquí irán los bloques con cada pendiente -->
                                    @foreach($pendientes as $pendiente)
                                        <div class="col-auto mb-3" id="col-card-{{ $pendiente->id }}">
                                            <div class="card">
                                                <div class="card-body d-flex justify-content-around align-items-center">
                                                    <div class="col-auto p-1">
                                                        <input type="checkbox" class="check" onclick="markCompleted({{ $pendiente->id }})">
                                                    </div>
                                                    <div class="col-auto p-1">
                                                        <h5 class="h5 mb-0">{{ $pendiente->texto }}</h5>
                                                    </div>
                                                    <div class="col-auto p-1 d-flex btn-group">
                                                        <button class="btn btn-danger" onclick="deleteTask({{ $pendiente->id }})">Eliminar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 d-flex">
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
                                    <h1 class="light text-white">Total de Empleados: <span class="number">{{ $conteoEmpleadosActivos }}</span></h1>
                                    <div class="info-box d-flex align-items-center justify-content-center mt-2">
                                        <a class="btn light text-white" href="{{ route('empleados') }}">
                                            Más información <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center bg-danger position-relative">
                                <div class="text-center">
                                    <h1 class="light text-white">Asistencia de Hoy: <span class="number">{{$asistenciaHoy}}</span></h1>
                                    <div class="info-box d-flex align-items-center justify-content-center mt-2">
                                        <a class="btn light text-white" href="{{ route('asistencias') }}">
                                            Más información <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center bg-warning position-relative">
                                <div class="text-center">
                                    <h1 class="light text-white">Vacaciones <span class="number">0</span></h1>
                                    <div class="info-box d-flex align-items-center justify-content-center mt-2">
                                        <a class="btn light text-white" href="{{ route('vacaciones') }}">
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
</main>

<script>
document.getElementById('taskForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let taskText = document.getElementById('task').value;

    fetch('{{ route('pendientes.store') }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ texto: taskText })
    })
    .then(response => response.json())
    .then(data => {
        let cardRow = document.getElementById('card-row');

        let newTask = document.createElement('div');
        newTask.classList.add('col-auto', 'mb-3');
        newTask.id = `col-card-${data.id}`;

        newTask.innerHTML = `
            <div class="card">
                <div class="card-body d-flex justify-content-around align-items-center">
                    <div class="col-auto p-1">
                        <input type="checkbox" class="check" onclick="markCompleted(${data.id})">
                    </div>
                    <div class="col-auto p-1">
                        <h5 class="h5 mb-0">${data.texto}</h5>
                    </div>
                    <div class="col-auto p-1 d-flex btn-group">
                        <button class="btn btn-danger" onclick="deleteTask(${data.id})">Eliminar</button>
                    </div>
                </div>
            </div>
        `;

        cardRow.appendChild(newTask);

        document.getElementById('task').value = '';
    })
    .catch(error => console.error('Error:', error));
});

function markCompleted(id) {
    if (confirm('¿Desea marcar el pendiente como terminado?')) {
        fetch(`/pendientes/${id}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            let taskCard = document.getElementById(`col-card-${id}`);
            taskCard.remove();
        })
        .catch(error => console.error('Error:', error));
    }
}

function deleteTask(id) {
    fetch(`/pendientes/${id}`, {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => response.json())
    .then(data => {
        let taskCard = document.getElementById(`col-card-${id}`);
        taskCard.remove();
    })
    .catch(error => console.error('Error:', error));
}
</script>

@endsection
