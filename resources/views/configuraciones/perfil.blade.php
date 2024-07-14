@extends('template')
<title>Editar Perfil de Usuario</title>

@section('contenido_gral')
@section('titulo')
        Editar Perfil
@endsection
<main class="content">
<div class="container-fluid">
<div class="col-12">
<div class="card">
<div class="card-body">
<form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', auth()->user()->name) }}" required>
        </div>
        <div class="mb-3">
                <label for="email" class="form-label">Correo</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', auth()->user()->email) }}" required>
        </div>
        <div class="mb-3">
                <label for="password" class="form-label">Nueva Contraseña</label>
                <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmar Nueva Contraseña</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
</form>
</div>
</div>
</div>
</div>
</main>
@endsection
