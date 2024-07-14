@extends('template')
<title>Nóminas</title>

@section('contenido_gral')
    @section('titulo')
        Nómina de Empleados
	@endsection
<main class="content   ">
        <div class="container-fluid">
 

            <div class="row">
                <div class="col-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <form class="form ">
                                <h2 class="text-center text-white bg-primary rounded p-2 mb-4">Completa los siguientes datos:</h2>
                                <div class="mb-4">
                                    <label for="formGroupExampleInput" class="form-label">Nómina</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ID de la nómina">
                                </div>
                                <div class="mb-4">
                                    <label for="formGroupExampleInput2" class="form-label">Empleado</label>
                                    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="ID del empleado">
                                </div>
                                <div class="mb-4">
                                    <label for="formGroupExampleInput2" class="form-label">Correo</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Correo electrónico">
                                </div>
                                <div class="mb-4">
                                    <label for="formGroupExampleInput2" class="form-label">Fecha de pago</label>
                                    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="ID del empleado">
                                </div>
                                <div class="input-group mb-4">
                                    <label for="formGroupExampleInput2" class="form-label">Monto bruto</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                    <span class="input-group-text">0.00</span>
                                </div>
                                <div class="mb-4">
                                    <label for="formGroupExampleInput2" class="form-label">Deducciones</label>
                                    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Deducciones ">
                                </div>
                                <div class="input-group mb-4">
                                    <label for="formGroupExampleInput2" class="form-label">Monto neto</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                    <span class="input-group-text">0.00</span>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn form-control btn-primary btn-lg">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>  
                </div>
                
            </div>
        
        </div>
    </main>


@endsection