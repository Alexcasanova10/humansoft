@extends('template')
<title>Justificar Asistencias </title>

@section('contenido_gral')
    @section('titulo')
    Justificar Asistencias
	@endsection
  <main class="content">
    <div class="container-fluid container bg-white">
      <form>
        <div class="row">
          <div class="m-3 col">
            <h2 class="text-center text-white bg-primary rounded p-2 mb-4">Información Personal</h2>
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

            <h2 class="text-center text-white bg-primary rounded p-2 mb-4">Detalles de la Falta:</h2>             
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
          <div class="col-11 m-auto ">
            <h2 class="text-center text-white bg-primary rounded p-2 mb-4">Documentación</h2>
        </div>

        <div class="row">

          <div class="col-12">
            <div class=" mb-3"aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"name=""id="">
              <input class="form-control" type="file" id="formFileMultiple"multiple/>
            </div>
          </div>

        </div>
        <div class="row">

          <div class="col-12 mb-3">
              <button class="btn form-control btn-primary">Enviar</button>
          </div>
        </div>
 
        
    
        </div>
      </form>
    </div>
  
  </main>

@endsection