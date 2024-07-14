@extends('template')
<title>Configuración de Sitio</title>

@section('contenido_gral')
@section('titulo')
Configuración de Sitio
	@endsection

    <main class="content ">
        <div class="container-fluid d-flex flex-column">
            <div class="row">
                <div class="col-12">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="d-flex justify-content-between ">
                                <div class="col-12">
                                    <h2 class="text-center text-white bg-primary rounded p-2 mb-4">Ajustes generales</h2>
                                </div>
                            </div>
                            <div class="container p-3 rounded">
                                <form class="row text-center mt-5">
                                    <div class="col-md-6 d-flex flex-column align-items-center justify-content-center mb-3">
                                        <h6>Logo de la compañía</h6>
                                        <div class="text-center">
                                            <img src="icono.ico" class="rounded mb-2" alt="...">
                                            <div class="mb-3">
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex flex-column align-items-center justify-content-center mb-3">
                                        <div class="w-100">
                                            <label for="nombre" class="form-label">Nombre de Sitio Web</label>
                                            <input type="text" class="form-control" id="nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex flex-column align-items-center justify-content-center mb-3">
                                        <div class="mb-3 w-100">
                                            <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe el email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex flex-column align-items-center justify-content-center mb-3">
                                        <div class="mb-3 w-100">
                                            <button type="button" class="form-control mt-4 btn btn-primary btn-lg">Actualizar</button>
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