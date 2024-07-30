<section>
 
    <h2 class="text-center text-white bg-primary rounded p-2 mb-4">Actualizar Información de Perfil</h2>
        <p class="h6">
        Actualiza la información del perfil y la dirección de correo electrónico de tu cuenta.
        </p>
 

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class=" ">
        @csrf
        @method('patch')

        <div>
            <!-- <x-input-label for="name" :value="__('Name')" /> -->
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', auth()->user()->name) }}" required>

            </div>

            <!-- <x-text-input id="name" name="name" type="text" class=" " :value="old('name', $user->name)" required autofocus autocomplete="name" />  -->
            

            <!-- <x-input-error class=" " :messages="$errors->get('name')" /> -->



        </div>

        <div>
            <!-- <x-input-label for="email" :value="__('Email')" /> -->
             <div class="mb-3">
                 <label for="email" class="form-label">Correo</label>
                 <input type="email" class="form-control" id="email" name="email" value="{{ old('email', auth()->user()->email) }}" required>
             </div>

            <!-- <x-text-input id="email" name="email" type="email" class=" " :value="old('email', $user->email)" required autocomplete="username" /> -->
            <!-- <x-input-error class=" " :messages="$errors->get('email')" /> -->

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class=" ">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" >
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class=" ">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class=" ">
             <button class="btn btn-primary">Guardar</button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class=" "
                >{{ __('Guardado!') }}</p>
            @endif
        </div>
    </form>
</section>
