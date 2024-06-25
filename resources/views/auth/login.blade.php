<title>Login</title>

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    
    
    <div class="card shadow p-4">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <img class="mb-4 img-fluid" src="{{ asset('multimedia/logoGral.jpg') }}" alt="logoGral" width="350px" height="60">
            
   
    
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
    
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="d-flex">
                    <input id="remember_me" type="checkbox" class="" name="remember">
                    <span class="ms-2">{{ __('Recordar Usuario') }}</span>
                </label>
            </div>
    
            <div class="container mt-2  p-1">
                <div class="d-flex justify-content-between ">
                    <button class="btn btn-sm btn-primary">{{ __('Iniciar Sesión') }}</button>
                    @if (Route::has('password.request'))
                        <a class="btn ms-2  btn-sm btn-dark" role="button" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                        @endif
                </div>
            </div>
            
            <div class="mt-4">
                    <a class="link-danger" href="{{ route('register') }}">
                            {{ __('Registrarse') }}
                    </a>
            </div>
        </form>
    </div>  

</x-guest-layout>
