@extends('template')
<title>Nóminas</title>

@section('contenido_gral')
<main class="content   ">
        <div class="container-fluid">
            <div class="row mb-5">
                <h1 class="h3"><strong>Nómina de empleados</strong></h1>
            </div>

            <div class="row">
                <div class="col-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <form class="form ">
                                <h2 class="text-primary mb-5 text-center text-uppercase">Completa los siguientes datos:</h2>
                                <div class="mb-4">
                                    <label for="formGroupExampleInput" class="form-label">Nómina</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ID de la nómina">
                                </div>
                                <div class="mb-4">
                                    <label for="formGroupExampleInput2" class="form-label">Empleado</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="ID del empleado">
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
                                    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="ID del empleado">
                                </div>
                                <div class="input-group mb-4">
                                    <label for="formGroupExampleInput2" class="form-label">Monto neto</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                    <span class="input-group-text">0.00</span>
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-outline-primary btn-lg">Guardar</button>
                                </center>
                            </form>
                        </div>
                    </div>  
                </div>
                
            </div>
        
        </div>
    </main>


@endsection