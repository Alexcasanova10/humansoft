@extends('template')
<title>Agregar periodo vacacional</title>

 
@section('contenido_gral')
@section('titulo')
        Agregar Vacaciones
	@endsection
    <main class="content">
      <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-xxl-9 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <h2 class="text-center text-white bg-primary rounded p-2 mb-4">
                          SOLICITUD DE VACACIONES
                        </h2>
                        <form>
                            <div class="row">
                              <div class="border p-3 mb-4 rounded col-6">
                                <h3 class="text-center bg-primary text-white p-2 rounded">
                                  Información del Empleado
                                </h3>
                                <div class="form-group">
                                  <label for="">Nombre Completo</label>
                                  <input type="text" class="form-control" id="" required />
                                </div>
                                <div class="form-group">
                                  <label for="">ID </label>
                                  <input type="text" class="form-control" id="" required />
                                </div>
                                <div class="form-group">
                                  <label for="">Puesto</label>
                                  <input type="text" class="form-control" id="" required />
                                </div>
                              </div>
                              <div class="border p-3 mb-4 rounded col-6">
                                <h3 class="text-center bg-primary text-white p-2 rounded">
                                  Periodo Vacacional
                                </h3>
                                <div class="form-group">
                                  <label for="">Fecha de Inicio</label>
                                  <input type="date" class="form-control" id="" required />
                                </div>
                                <div class="form-group">
                                  <label for="">Fecha de Fin</label>
                                  <input type="date" class="form-control" id="" required />
                                </div>
                                <div class="form-group">
                                  <label for="">Número de Días Solicitados</label>
                                  <input
                                    type="number"
                                    class="form-control"
                                    id=""
                                    required
                                    min="1"
                                    max="15"
                                  />
                                </div>
                              </div>
                            </div>
                            <div class="row">
                            <div class="border p-3 mb-4 rounded col-6 mr-4">
                              <h3 class="text-center bg-primary text-white p-2 rounded">
                                Comentarios
                              </h3>
                              <div class="form-group">
                                <textarea class="form-control" id="" rows="3"></textarea>
                              </div>
                            </div>

                            <div class="border p-3 mb-4 rounded col-6">
                              <h3 class="text-center bg-primary text-white p-2 rounded">
                                Aprobación
                              </h3>
                              <div class="form-group"> 
                                <label for="">Fecha de Aprobación</label>
                                <input type="date" class="form-control" id="" required />
                              </div>
                              <div class="form-group">
                                <button type="submit" class="mt-4 btn btn-primary col-12">
                                    Enviar Solicitud
                                </button>

                              </div>
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