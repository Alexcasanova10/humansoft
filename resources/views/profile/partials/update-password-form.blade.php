<!-- <section> -->
    <h2 class="text-center text-white bg-primary rounded p-2 mb-4">Actualizar Contraseña</h2>

    <p class="h6">
    Asegúrate de que tu cuenta esté usando una contraseña larga y aleatoria para mantenerla segura.

</p>
 
    <form method="post" action="{{ route('password.update') }}" class=" ">
        @csrf
        @method('put')

        <div class="mb-3">
            <!-- <x-input-label for="current_password" :value="__('Current Password')" /> -->
            <label for="current_password" class="form-label" value="Current Password">Contraseña Actual</label>

            <!-- <x-text-input id="current_password" name="current_password" type="password" class="" autocomplete="current-password" /> -->

            <input type="password" class="form-control" id="current_password" name="current_password" autocomplete="current-password" required>
            <!-- <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" /> -->
        </div>

        <div class="mb-3">
            <!-- <x-input-label for="password" :value="__('New Password')" /> -->
            <label for="password" class="form-label" value="New Password">Nueva Contraseña</label>

            <input type="password" class="form-control" id="password" name="password" autocomplete="new-password" required>
            <!-- <x-text-input id="password" name="password" type="password"  autocomplete="new-password" /> -->
            
            <!-- <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" /> -->
        </div>

        <div class="mb-3">
            <!-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> -->
            <label for="password_confirmation" class="form-label" value="Confirm Password">Confirmar Contraseña</label>

            <!-- <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" /> -->

            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="new-password" required>
            <!-- <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" /> -->
        </div>

        <div class=" ">
            <!-- <x-primary-button>{{ __('Save') }}</x-primary-button> -->
            <button class="btn btn-primary mt-2">Guardar</button>


            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Guardado!') }}</p>
            @endif
        </div>
    </form>
</section>
