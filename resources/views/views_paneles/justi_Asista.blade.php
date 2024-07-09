@extends('template')
<title>Asistencias </title>

@section('contenido_gral')
    @section('titulo')
        Asistencias
	@endsection
  <main class="content">
    <div class="container-fluid container bg-white">
      <form>
        <div class="row">
          <div class="m-3 col">
            <h3 class="h3 text-primary mb-3">Información Personal</h3>
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text" id="inputGroup-sizing-sm"
                >Nombre del empleado</span
              >
              <input
                type="text"
                class="form-control"
                aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-sm"
              />
            </div>
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text" id="inputGroup-sizing-sm"
                >Id de empleado</span
              >
              <input
                type="text"
                class="form-control"
                aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-sm"
              />
            </div>
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text" id="inputGroup-sizing-sm"
                >Puesto</span
              >
              <input
                type="text"
                class="form-control"
                aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-sm"
              />
            </div>
     
          </div>
          <div class="m-3 col">

            <h3 class="h3 text-primary mb-3">Detalles de la Falta:</h3>             
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"
                  >Fecha</span
                >
                <input
                  type="date"
                  class="form-control"
                  aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-sm"
                />
              </div>
              
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"
                  >Tipo de falta</span
                >
                <select
                  class="form-control"
                  aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-sm"
                  name=""
                  id=""
                >
                  <option value="" selected disabled>--Selecciona--</option>
                  <option value="">Médica</option>
                </select>
              </div>
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm"
                  >Motivo de la Falta</span
                >
                <textarea
                  class="form-control"
                  aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-sm"
                ></textarea>
              </div>
            </div>
         </div>
        <div class="row">
          <div class="m-3 col-6">
            <h3 class="h3 text-primary mb-3">Documentación</h3>
        </div>

        <div class="row">

          <div class="col-6">
            <div class=" mb-3"aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"name=""id="">
              <input class="form-control" type="file" id="formFileMultiple"multiple/>
            </div>
          </div>

          <div class="col-6">
              <button class="btn form-control btn-primary">Enviar</button>
          </div>
        </div>
 
        
    
        </div>
      </form>
    </div>
  
  </main>

@endsection