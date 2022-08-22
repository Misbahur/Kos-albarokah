<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Kontak') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="font-bold text-2xl">
                Edit Kontak
            </h3>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('kontak.update', $kontak->id) }}"
                class="w-96">
                @csrf
                @method('PUT')
                <div class="mt-5">
                    <x-label for="email" :value="__('Email')" />

                    <x-input-form>
                        <x-slot name="icon">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </x-slot>
                        <x-slot name="input">
                            <input type="email" name="email" id="email" value="{{ $kontak->email }}"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full"
                                placeholder="email">
                        </x-slot>
                    </x-input-form>
                </div>
                <div class="mt-5">
                    <x-label for="nohp" :value="__('Nomer Hp/Wa')" />

                    <x-input-form>
                        <x-slot name="icon">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                            </svg>
                        </x-slot>
                        <x-slot name="input">
                            <input type="text" name="nohp" id="nohp" value="{{ $kontak->nohp }}"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full"
                                placeholder="08xxxxx">
                        </x-slot>
                    </x-input-form>
                </div>
                <div class="mt-5">
                    <x-label for="linkmaps" :value="__('Link Google Maps')" />

                    <x-input-form>
                        <x-slot name="icon">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                        </x-slot>
                        <x-slot name="input">
                            <input type="text" name="linkmaps" id="linkmaps"  value="{{ $kontak->linkmaps }}"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full"
                                placeholder="link maps">
                        </x-slot>
                    </x-input-form>
                </div>
                <div class="flex justify-between mt-5">
                    <a href="{{ route('kontak.index') }}"
                        class="bg-gray-300 hover:bg-gray-600 text-black hover:text-blue-300 uppercase text-center font-bold py-3 px-3 rounded-md">Cencel</a>
                    <x-button-form class="ml-4">
                        {{ __('Submit') }}
                    </x-button-form>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
