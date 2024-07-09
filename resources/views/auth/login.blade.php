<title>Login</title>

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

        
    <div class="p-4">

    <!-- 
    email
    contraseña
    remember me //forget password
    login 

    ¿No tienes cuenta? Regístrate
    -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <img class="img-fluid" src="{{ asset('multimedia/logoGral.jpg') }}" alt="logoGral" width="350px" height="60">   
            
      
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label class="input-group mb-2" for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-input-label class="input-group mb-2" for="password" :value="__('Contraseña')" />
    
                <x-text-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class=" mt-4 p-1">
                <button class="btn form-control btn-primary">{{ __('Iniciar Sesión') }}</button>
            </div>    
            
            <!-- Remember Me -->
            <div class="block mt-4 d-flex justify-content-between">

                <label for="remember_me" class="d-flex">
                    <input id="remember_me" type="checkbox" class="" name="remember">
                    <span class="ms-2">{{ __('Recordar Usuario') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="link-primary" role="button" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif


            </div>
    

            
            <div class="mt-4">
                    <p class="text-center fs-6">
                        Crear nueva cuenta: 
                        <a class="link-danger" href="{{ route('register') }}">
                                {{ __('Registrarse') }}
                        </a>
                    </p>
            </div>
        </form>
    </div>

</x-guest-layout>
