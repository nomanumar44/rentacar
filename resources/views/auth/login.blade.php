<x-guest-layout>
    {{-- <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>



        <x-auth-session-status class="mb-4" :status="session('status')" />


        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>


            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>


            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">


                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card> --}}
    <div class="grid grid-cols-12 h-screen relative">
        <div class="col-span-12 hidden md:flex justify-center items-center flex-1 bg-indigo-600 bg-no-repeat w-full bg-cover h-screen" style="background-image: url('/asset/images/bgcar1.jpg');">
            {{-- <img class="object-cover w-full"     src="/assets/images/xelent-pharmacy.jpg" class="h-full" alt="Your Image" /> --}}
            <div class="absolute bg-black bg-opacity-40 left-0 right-0 top-0 h-screen w-full"></div>
            <div class="p-6 flex justify-center items-center relative z-10">
                <div class="">
                    <x-auth-card>
                        <x-slot name="logo">
                        </x-slot>
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="flex justify-center items-center">
                                <img src="/asset/images/logocar.png" width="120px" height="120px"/>
                            </div>
                            <h1 class="text-center text-white font-bold text-lg">Rent A Boomb</h1>
                            <div class="mt-8">
                                <x-label for="email" class="text-white mb-1" :value="__('Email')" />
                                <x-input id="email" class="block  w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>
                            <div class="mt-4">
                                <x-label for="password" class="text-white mb-1" :value="__('Password')" />
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex text-white mb-1 items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm  text-white">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-3">{{ __('Log in') }}</x-button>
                            </div>
                        </form>
                    </x-auth-card>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
