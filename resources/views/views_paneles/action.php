<!-- Esto debe ser el modal de edit, las variables de ben estar definidas para que fincione -->
<div class="modal fade" id="edit{{$empleado->id_empleado}}" tabindex="-1" aria-labelledby="editModalLabel{{$empleado->id_empleado}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="editModalLabel{{$empleado->id_empleado}}">Editar Empleado</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                                                
                <div class="modal-body">
                    {!! Form::model($empleados, [ 'method' => 'patch','route' => ['empleado.update', $empleado->id_empleado]]) !!}
                        @csrf
                        <div class="row">
                            <h3 class="h3 text-primary mb-3">Editar Información de Empleado</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                {!! Form::label('nombre', 'Nombre') !!}
                                    
                                {!! Form::text('nombre',$empleado->nombre , ['class' => 'form-control'])!!}
                            </div>

                            <div class="col-md-12 mb-3">
                                {!! Form::label('apellido_pat', 'Apellido Paterno') !!}
                                    
                                {!! Form::text('apellido_pat',$empleado->apellido_pat , ['class' => 'form-control'])!!}
                            </div>	

                        </div>
                        <div class="row">
                            {{Form::button('Actualizar', ['class' => 'btn btn-success', 'type' => 'submit'])}}
                        </div> 
                    {!! Form::close() !!}
                </div>
        </div>
    </div>
</div>
											