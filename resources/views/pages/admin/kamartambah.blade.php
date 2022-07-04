<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Kamar Kos') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="font-bold text-2xl">
                Tambah Kamar Kos
            </h3>
            <div
                class="items-center grid grid-cols-1 gap-8 md:grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
                <div>
                    <div class="sm:items-start sm:pt-5">
                        <label for="street-address" class="block text-md font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Nama Kamar </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" name="nama" id="nama" autocomplete="nama"
                                class="@error('nama')
                                    is-invalid
                                @enderror max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md" />
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                    <div class="sm:items-start sm:pt-5">
                        <label for="street-address" class="block text-md font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Tipe Kamar </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" name="tipe" id="tipe" autocomplete="tipe"
                                class="@error('tipe')
                                    is-invalid
                                @enderror max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md" />
                                @error('tipe')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                    <div class="sm:items-start sm:pt-5">
                        <label for="street-address" class="block text-md font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Nomer Kamar </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" name="nomer" id="nomer" autocomplete="nomer"
                                class="@error('nomer')
                                    is-invalid
                                @enderror max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md" />
                                @error('nomer')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                    <div class="sm:items-start sm:pt-5">
                        <label for="street-address" class="block text-md font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Kapasitas Kamar </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" name="kapasitas" id="kapasitas" autocomplete="kapasitas"
                                class="@error('kapasitas')
                                    is-invalid
                                @enderror max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md" />
                                @error('kapasitas')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                    <div class="sm:items-start sm:pt-5">
                        <label for="street-address" class="block text-md font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Harga Kamar </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" name="harga" id="harga" autocomplete="harga"
                                class="@error('harga')
                                    is-invalid
                                @enderror max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md" />
                                @error('harga')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <textarea class="description" name="deskripsi"></textarea>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
    <script>
    tinymce.init({
        selector:'textarea.description',
        width: 500,
        height: 400
    });
    </script>
</x-app-layout>
