<x-guest-layout>
    <section class="h-ful bg-gray-200 md:h-screen">
        <div class="container py-6 px-6 h-full">
            <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
                <div class="xl:w-10/12">
                    <div class="block bg-white shadow-lg rounded-lg">
                        <div class="lg:flex lg:flex-wrap g-0">
                            <div
                                class="lg:w-6/12 lg:flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none sm:hidden md:hidden">
                                <img class="h-full rounded-lg"
                                    src="{{ asset('barokah.png') }}"
                                    alt="">
                            </div>
                            <div class="lg:w-6/12 mt-6 px-6 py-4 md:px-0">
                                <div class="md:p-12 md:mx-6">
                                    <div class="text-left">
                                        <h3 class="text-xl font-bold mt-1">Hallo.....</h3>
                                        <h5 class="text-md font-semibold mt-1 mb-6 pb-1">Selamat Datang</h5>
                                    </div>
                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <!-- Email Address -->
                                        <div class="lg:w-6/12">
                                            <x-label for="email" :value="__('Email')" />

                                            <x-auth-form>
                                                <x-slot name="icon">
                                                    <svg class="h-5 w-5 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                        <path
                                                            d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                    </svg>
                                                </x-slot>
                                                <x-slot name="input">
                                                    <input type="email" name="email" id="email"
                                                        class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full"
                                                        placeholder="you@example.com">
                                                </x-slot>
                                            </x-auth-form>
                                        </div>

                                        <!-- Password -->
                                        <div class="lg:w-6/12 mt-4">
                                            <x-label for="password" :value="__('Password')" />

                                            <x-auth-form>
                                                <x-slot name="icon">
                                                    <svg class="h-5 w-5 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                                    </svg>
                                                </x-slot>
                                                <x-slot name="input">
                                                    <input type="password" name="password" id="password"
                                                        class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full">
                                                </x-slot>
                                            </x-auth-form>
                                        </div>

                                        <!-- Remember Me -->
                                        <div class="block mt-4">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox"
                                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    name="remember">
                                                <span
                                                    class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>

                                        <div class="justify-center mt-4">
                                            <x-button-auth class="">
                                                {{ __('Masuk') }}
                                            </x-button-auth>
                                            <div class="mt-4 px-24">
                                            @if(Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Lupa Password') }}
                                                </a>
                                            @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
