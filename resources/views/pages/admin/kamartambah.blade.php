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
            @if ($message = Session::get('success'))

                <div class="mt-3 flex p-3 mb-2 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <svg aria-hidden="true" class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Success alert! </span>{{ $message }}
                    </div>
                </div>

                <div class="flex space-x-4 items-start ...">
                    @foreach(Session::get('images') as $images)
                        <div class="py-2">
                            <img src="image/{{ $images['image'] }}" width="100px">
                        </div>
                    @endforeach
                </div>

            @endif
        <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data" class="mt-5">
                @csrf
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
            <div class="sm:items-start sm:pt-5">
                <span class="sr-only">Choose File</span>
                <input type="file" name="images[]" id="images" multiple class="@error('images') is-invalid @enderror block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <hr class="my-4">
                <div class="mt-1 items-center grid grid-cols-4 gap-8 md:grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
                <div class="images-preview-div w-32 h-32 rounded-md"> </div>
                </div>  
            </div>
            <div class="block right-0">
                <div class="flex items-center justify-end">
                    <button type="submit" class="py-2 px-4 text-white right-2 bottom-1 bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl">Submit</button>
                </div>
            </div>
        </form>
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
