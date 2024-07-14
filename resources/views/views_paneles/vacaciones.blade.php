@extends('template')
<title>Vacaciones</title>

@section('contenido_gral')
@section('titulo')
Vacaciones
@endsection
<main class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="container ">
                                <div class="text-right mb-3 d-flex justify-content-end">
                                    <form action="" class="d-flex align-items-center gap-3">
                                        <label for="" class="text-primary h4">Empleado</label>
                                        <select name="" id="" class="form-select">
                                            <option value="" selected disabled>--Seleccionar--</option>
                                            <option value="">Opción</option>
                                            <option value="">Opción</option>
                                            <option value="">Opción</option>
                                            <option value="">Opción</option>
                    
                                        </select>
                                        <div class="task-hold input-group">
                                            <a href="{{ route('agregar_vacaciones') }}" class="btn btn-primary stretched-link">Agregar Vacaciones
                                            </a>
                                        </div>
                                    </form>
                                </div>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Empleado</th>
                                            <th>Cargo</th>
                                            <th>Fecha de Inicio</th>
                                            <th>Fecha de Fin</th>
                                            <th>Días Solicitados</th>
                                            <th>Días Disponibles</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>Nombre de empleado</td>
                                            <td>Gerente</td>
                                            <td>2024-07-01</td>
                                            <td>2024-07-15</td>
                                            <td>14</td>
                                            <td>10</td>
                                            <td class="d-flex ">
                                                <div class="task-hold input-group">
                                                    <a href="{{ route('editar_vac') }}" class="btn btn-info stretched-link">Editar
                                                    </a>
                                                </div>
                                                <button class="btn  btn-secondary">Eliminar</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </main>

@endsection