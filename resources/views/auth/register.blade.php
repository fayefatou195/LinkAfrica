<x-guest-layout>
    <x-auth-card>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" > 

      <x-slot name="logo">
           <!--   <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>-->
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div >
                <x-label class="fs-5" for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4 ">
                <x-label  class="fs-5" for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label class="fs-5" for="password" :value="__('Mot de passe')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label class="fs-5" for="password_confirmation" :value="__('Confirmer mot de passe')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4 ">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 fs-5" href="{{ route('login') }}">
                    {{ __('Déja enregistré?') }}
                </a>

                <x-button class="ml-4 m-2 px-6 py-2 bg-sky-600 hover:bg-sky-700 rounded-lg">
                    {{ __('Enregistrer') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
