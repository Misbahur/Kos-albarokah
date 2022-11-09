<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Blok Kos') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="font-bold text-2xl">
                Tambah Blok Kos
            </h3>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('cabang.store') }}" enctype="multipart/form-data"
                class="w-96">
                @csrf
                <div class="mt-5">
                    <x-label for="nama" :value="__('Nama')" />

                    <x-input-form>
                        <x-slot name="icon">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </x-slot>
                        <x-slot name="input">
                            <input type="text" name="nama" id="nama"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full"
                                placeholder="Al Barokah 1">
                        </x-slot>
                    </x-input-form>
                </div>
                <div class="mt-5">
                    <x-label for="kategori" :value="__('Kategori')" />

                    <x-input-form>
                        <x-slot name="icon">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </x-slot>
                        <x-slot name="input">
                            <select name="kategori" id="kategori"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full">
                                <option selected disabled>-- Pilih Kategori --</option>
                                <option value="cowok">Laki - laki</option>
                                <option value="cewek">Perempuan</option>
                            </select>
                        </x-slot>
                    </x-input-form>
                </div>
                <div class="mt-5">
                    <x-label for="latitude" :value="__('Latitude')" />

                    <x-input-form>
                        <x-slot name="icon">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </x-slot>
                        <x-slot name="input">
                            <input type="text" name="latitude" id="latitude"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full"
                                placeholder="-8.299268">
                        </x-slot>
                    </x-input-form>
                </div>
                <div class="mt-5">
                    <x-label for="longitude" :value="__('Longitude')" />

                    <x-input-form>
                        <x-slot name="icon">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </x-slot>
                        <x-slot name="input">
                            <input type="text" name="longitude" id="longitude"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full"
                                placeholder="114.315250">
                        </x-slot>
                    </x-input-form>
                </div>
                <div class="flex justify-between mt-5">
                    <a href="{{ route('cabang.index') }}" class="bg-gray-300 hover:bg-gray-600 text-black hover:text-blue-300 uppercase text-center font-bold py-3 px-3 rounded-md">Cencel</a>
                    <x-button-form class="ml-4">
                        {{ __('Submit') }}
                    </x-button-form>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
