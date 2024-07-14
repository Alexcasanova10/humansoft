@extends('template')
<title>Editar vacaciones</title>

@section('contenido_gral')
    @section('titulo')
    Editar periodo Vacacional
    @endsection
    <main class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="mb-3 p-3 rounded" id="formu">
                                <div class="row mt-4">
                                    <div class="mb-3 col text-center">
                                        <label for="" class="text-center form-control text-white bg-primary rounded p-2 mb-4">ID del Empleado</label>
                                        <input type="text" readonly class="form-control" id="" value="23463636">
                                    </div>
                                    <div class="mb-3 col text-center">
                                        <label for="" class="text-center form-control text-white bg-primary rounded p-2 mb-4">Nombre del Empleado</label>
                                        <input type="text" readonly class="form-control" id="" value="Juán Pérez">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="mb-3 col text-center">
                                        <label for="" class="text-center form-control text-white bg-primary rounded p-2 mb-4">Inicio de Periodo</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="mb-3 col text-center">
                                        <label for="" class="text-center form-control text-white bg-primary rounded p-2 mb-4">Fin de Periodo</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-12 text-center">
                                        <button type="submit" class="form-control btn bg-primary text-white">Actualizar</button>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
                    

@endsection