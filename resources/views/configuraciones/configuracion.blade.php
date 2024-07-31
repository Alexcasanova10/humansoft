@extends('template')
<title>Configuración de Sitio</title>

@section('contenido_gral')
@section('titulo')
Configuración de Sitio
@endsection

<main class="content">
    <div class="container-fluid d-flex flex-column">
        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="col-12">
                                <h2 class="text-center text-white bg-primary rounded p-2 mb-4">Ajustes generales del sitio web</h2>
                            </div>
                        </div>
                        <div class="container p-3 rounded">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="row text-center">
                                <div class="col-6">
                                    <form class=" text-center mt-5" action="{{ route('configuracion.actualizar') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class=" flex-column align-items-center justify-content-center mb-3">
                                            <h6>Logo de la compañía</h6>
                                            <div class="text-center">
                                                <img id="logoImage" src="{{ asset('storage/multimedia/logoGral.jpg') }}" class="rounded mb-2" alt="logoGral" width="350px" height="60">
                                                <div class="mb-3">
                                                    <input class="form-control" type="file" id="formFile" name="logo" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 w-100">
                                                <button type="submit" class="form-control mt-4 btn btn-primary btn-lg">Actualizar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <!-- <form class="  text-center mt-5" action="{{ route('configuracion.actualizarNombre') }}" method="POST">
                                        @csrf
                                        <div class="  d-flex flex-column align-items-center justify-content-center mb-3">
                                            <div class="w-100">
                                                <label for="nombre" class="form-label">Nombre de Sitio Web</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $configuracion->value ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 w-100">
                                            <button type="submit" class="form-control mt-4 btn btn-primary btn-lg">Actualizar</button>
                                        </div>
                                    </form> -->
                                </div>
                            </div>
                           


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('form');
        const logoImage = document.getElementById('logoImage');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(form);
            fetch("{{ route('configuracion.actualizar') }}", {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const newLogoSrc = '{{ asset('storage/multimedia/logoGral.jpg') }}' + '?' + new Date().getTime();
                    logoImage.src = newLogoSrc;
                } else {
                    alert('Error al actualizar la configuración');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error al actualizar la configuración');
            });
        });
    });
</script>

@endsection
