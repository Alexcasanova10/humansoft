<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurar Contraseña</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/stylesHS/cssPropio.css') }}" rel="stylesheet">
	<link rel="shortcut icon" href="{{ asset('multimedia/logoIco.ico') }}" />

    <style>
        #bgBrick {
            background-image: url('{{ asset('multimedia/paredBricks.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
         }
        .row {
            margin: 0;
        }
    </style>
</head>
<body id="bgBrick" class="d-flex align-items-center justify-content-center vh-100">
    <div class="container">
        <div class="row text-center d-flex align-items-center justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf
                        <h1 class="h3 text-primary">Escribe tu nueva contraseña </h1>

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" class="input-group mb-2"  :value="__('Email')" />
                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" class="input-group mb-2" :value="__('Contraseña Nueva')" />
                            <x-text-input id="password" class="form-control"  type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label class="input-group mb-2" for="password_confirmation" :value="__('Confirmar Contraseña')" />

                            <x-text-input id="password_confirmation"  class="form-control" 
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                                <!-- <x-primary-button>
                                </x-primary-button> -->
                            <button class="btn form-control btn-primary mt-2">
                                {{ __('Reset Password') }}
                            </button>





                        </div>
                    </form>

                    </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
