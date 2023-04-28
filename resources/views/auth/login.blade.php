<x-guest-layout>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" > 
    <x-auth-card>
        <x-slot name="logo">
           <!-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>-->

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
      
        <form method="POST" action="{{ route('login') }}">
            @csrf
         
            <!-- Email Address -->
            <div>
                <x-label class="fs-4"  for="email" :value=" __ ('Votre mail')" />

                <x-input id="email" class="block mt-1 w-full " type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <style>
              
            </style>

            <!-- Password -->
            <div class="mt-4 ">
                <x-label class="fs-4" for="password" :value="__('Mot de passe')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600 fs-5">{{ __('Se souvenir de moi') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 fs-5" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif

                <x-button class=" m-2 px-6 py-2 bg-sky-600 hover:bg-sky-700 rounded-lg">
                    {{ __('Connexion') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
