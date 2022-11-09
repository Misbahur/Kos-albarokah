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
                                        <h5 class="text-md font-semibold mt-1 mb-6 pb-1">Daftar Untuk Menyewa</h5>
                                    </div>

                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                        @csrf

                                        <!-- Name -->
                                        <div>
                                            <x-label for="name" :value="__('Name')" />

                                            <x-auth-form>
                                                <x-slot name="icon">
                                                    <svg class="h-5 w-5 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </x-slot>
                                                <x-slot name="input">
                                                    <input type="text" name="name" id="name"
                                                        class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full"
                                                        placeholder="Mr.xxxx">
                                                </x-slot>
                                            </x-auth-form>
                                        </div>

                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-label for="email" :value="__('Email')" />

                                            <x-auth-form>
                                                <x-slot name="icon">
                                                    <svg class="h-5 w-5 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
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
                                        <div class="mt-4">
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

                                        <!-- Confirm Password -->
                                        <div class="mt-4">
                                            <x-label for="password_confirmation" :value="__('Confirm Password')" />

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
                                                    <input type="password" name="password_confirmation"
                                                        id="password_confirmation"
                                                        class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full">
                                                </x-slot>
                                            </x-auth-form>
                                        </div>

                                        <!-- nohp -->
                                        <div class="mt-4">
                                            <x-label for="nohp" :value="__('No. Hp')" />

                                            <x-auth-form>
                                                <x-slot name="icon">
                                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
</svg>
                                                </x-slot>
                                                <x-slot name="input">
                                                    <input type="text" name="nohp" id="nohp"
                                                        class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full">
                                                </x-slot>
                                            </x-auth-form>
                                        </div>

                                        <div class="mt-4">
                                            <x-label class="mb-2" for="ktp" :value="__('KTP')" />

                                            <span class="sr-only">Choose File</span>
                                            <input type="file" name="ktp" id="ktp"
                                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                                        </div>

                                        <div class="flex items-center justify-start mt-4">
                                            <x-button-auth class="ml-4">
                                                {{ __('daftar') }}
                                            </x-button-auth>
                                            <div class="py-2 px-6">
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                href="{{ route('login') }}">
                                                {{ __('Sudah Terdaftar ? Login Aja sini') }}
                                            </a>
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
