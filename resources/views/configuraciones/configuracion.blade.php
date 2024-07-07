@extends('template')
<title>Configuración de Sitio</title>

@section('contenido_gral')
@section('titulo')
        Configuración
	@endsection

    <main class="content ">
        <div class="container-fluid d-flex flex-column">
            <div class="row">
                <div class="col-12">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="d-flex justify-content-between ">
                                <h1>Ajustes generales</h1>
                            </div>
                            <div class="p-3 rounded d-flex justify-content-between ">
                                <form class="container text-center mt-5">
                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex gap-5">
                                                <h6>Logo de la compañía</h6>
                                                <div class="text-center">
                                                    <img src="icono.ico" class="rounded mb-2" alt="...">
                                                    <div class="mb-3">
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Nombre</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe el email">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Monto</label>
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Hora 1</label>
                                                <input type="time" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Hora 2</label>
                                                <input type="time" class="form-control">
                                            </div>
                                        </div>
                                        <div class="d-flex row-1">
                                            <button type="button" class="btn btn-primary btn-lg">Actualizar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>





@endsection