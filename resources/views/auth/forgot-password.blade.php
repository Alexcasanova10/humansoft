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
                <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST"  action="{{ route('password.email') }}">
                        @csrf
                        <h1 class="h3 text-primary">Restarua tu Contraseña </h1>
                        <!-- Name -->
                        <div class="mt-4 mb-4">
                        <p>¿Olvidaste tu contraseña? No hay problema. Escribe tu dirección de correo electrónico y te enviaremos un enlace para restablecer tu contraseña.</p>
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4 mb-4">
                            <x-input-label for="email" class="input-group mb-2" :value="__('Email')" />
                            
 
 

                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        </div>

                        <div class="mt-4">
                            <button class="btn form-control btn-primary mt-2">
                                {{ __('Enviar Link') }}
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


