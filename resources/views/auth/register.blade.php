<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Usuario</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container mt-5">
        <div class="row text-center d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="mt-2">
                            <x-input-label class="input-group mb-2" for="name" :value="__('Nombre')" />
                            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('Nombre')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-2">
                            <x-input-label for="email" class="input-group mb-2" :value="__('Correo')" />
                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-2">
                            <x-input-label for="password" class="input-group mb-2" :value="__('Contraseña')" />
                            <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-2">
                            <x-input-label for="password_confirmation" class="input-group mb-2" :value="__('Confirma tu contraseña')" />
                            <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <button class="btn form-control btn-primary mt-2">
                                    {{ __('Registrarse') }}
                            </button>
                        </div>
                        <div class="mt-4">
                            <span>
                                ¿Ya estás registrado?
                                <a class="link-danger" href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a> 
                            </span>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
    
    
