<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Kamar Kos') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="font-bold text-2xl">
                Update Kamar Kos
            </h3>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            @if($message = Session::get('success'))

                <div class="mt-3 flex p-3 mb-2 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                    role="alert">
                    <svg aria-hidden="true" class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Success alert! </span>{{ $message }}
                    </div>
                </div>

                <div class="flex space-x-4 items-start ...">
                    @foreach(Session::get('gambars') as $gambars)
                        <div class="py-2">
                            <img src="gambar/{{ $gambars['gambar'] }}" width="100px">
                        </div>
                    @endforeach
                </div>

            @endif
            <form action="{{ route('kamar.update', $kamar->id) }}" method="POST" enctype="multipart/form-data"
                class="mt-5">
                @csrf
                @method('PUT')
                <div
                    class="items-center grid grid-cols-1 gap-8 md:grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
                    <div>
                        <div class="sm:items-start sm:pt-5">
                            <x-label for="cabang" :value="__('Cabang')" />
                            <x-input-form>
                                <x-slot name="icon">
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </x-slot>
                                <x-slot name="input">
                                    <select name="cabang" id="cabang"
                                        class="max-w-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full">
                                        <option selected value="{{ $kamar->cabang->id }}">{{ $kamar->cabang->nama }}</option>
                                        @forelse ($cabangs as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @empty
                                            <option value="">Harap Tambah Cabang Terlebih Dahulu</option>
                                        @endforelse
                                    </select>
                                </x-slot>
                            </x-input-form>
                        </div>
                        <div class="sm:items-start sm:pt-5">
                            <x-label for="kode" :value="__('Kode Kamar')" />
                            <x-input-form>
                                <x-slot name="icon">
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                                    </svg>
                                </x-slot>
                                <x-slot name="input">
                                    <input type="text" name="kode" id="kode" autocomplete="kode" value="{{ $kamar->kode }}"
                                        class="max-w-lg w-full shadow-sm focus:ring-indigo-500 pl-10 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-full" />
                                </x-slot>
                            </x-input-form>
                        </div>

                        <div class="sm:items-start sm:pt-5">
                            <x-label for="panjang" :value="__('Panjang Kamar')" />
                            <x-input-form>
                                <x-slot name="icon">
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                                    </svg>
                                </x-slot>
                                <x-slot name="input">
                                    <input type="number" name="panjang" id="panjang" autocomplete="panjang" value="{{ $kamar->panjang }}"
                                        placeholder="Satuan Meter"
                                        class="max-w-lg w-full shadow-sm focus:ring-indigo-500 pl-10 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-full" />
                                </x-slot>
                            </x-input-form>
                        </div>
                        <div class="sm:items-start sm:pt-5">
                            <x-label for="lebar" :value="__('Lebar Kamar')" />
                            <x-input-form>
                                <x-slot name="icon">
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                                    </svg>
                                </x-slot>
                                <x-slot name="input">
                                    <input type="number" name="lebar" id="lebar" autocomplete="lebar" value="{{ $kamar->lebar }}"
                                        placeholder="Satua Meter"
                                        class="max-w-lg w-full shadow-sm focus:ring-indigo-500 pl-10 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-full" />
                                </x-slot>
                            </x-input-form>
                        </div>
                        <div class="sm:items-start sm:pt-5">
                            <x-label for="harga" :value="__('Harga Kamar')" />
                            <x-input-form>
                                <x-slot name="icon">
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </x-slot>
                                <x-slot name="input">
                                    <input type="number" name="harga" id="harga" autocomplete="harga"  value="{{ $kamar->harga }}"
                                        class="max-w-lg w-full shadow-sm focus:ring-indigo-500 pl-10 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-full" />
                                </x-slot>
                            </x-input-form>
                        </div>
                    </div>
                    <div>
                        <x-label for="deskripsi" :value="__('Deskripsi Kamar')" />
                        <x-input-form>
                            <x-slot name="icon">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 4h13M3 8h9m-9 4h9m5-4v12m0 0l-4-4m4 4l4-4" />
                                </svg>
                            </x-slot>
                            <x-slot name="input">
                                <textarea class="description" name="deskripsi">{{ $kamar->deskripsi }}</textarea>
                            </x-slot>
                        </x-input-form>

                    </div>
                </div>
                <div class="sm:items-start sm:pt-5">
                    <x-label for="deskripsi" :value="__('Foto Kamar (min 4 max 6)')" />
                    <span class="sr-only">Upload File</span>
                    <x-input-form>
                        <x-slot name="icon">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                            </svg>
                        </x-slot>
                        <x-slot name="input">
                            <input type="file" name="gambar[]" id="gambar" multiple
                                class="block w-full text-sm text-gray-500 pl-10 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                        </x-slot>
                    </x-input-form>
                </div>
                <div class="block right-0">
                    <div class="flex justify-center mt-5">
                        <a href="{{ route('cabang.index') }}"
                            class="bg-gray-300 hover:bg-gray-600 text-black hover:text-blue-300 uppercase text-center font-bold py-3 px-3 rounded-md">Cencel</a>
                        <x-button-form class="ml-4">
                            {{ __('Submit') }}
                        </x-button-form>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
    <script>
        tinymce.init({
            selector: 'textarea.description',
            width: 500,
            height: 400
        });

    </script>
</x-app-layout>
