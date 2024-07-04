<x-guest-layout>
    <div class="p-6 sm:p-5 lg:p-10 space-y-5">
        <h2 class="text-2xl lg:text-3xl text-center font-bold text-gray-900">
            Mot de passe oublié
        </h2>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Mot de passe oublié? Aucun problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation de mot de passe qui vous permettra d\'en choisir un nouveau..') }}
        </div>

         <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-secondary-button>
                    {{ __('Email Password Reset Link') }}
                </x-secondary-button>
            </div>
        </form>

    </div>
</x-guest-layout>
