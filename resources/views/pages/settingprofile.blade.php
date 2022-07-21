<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Setting Profile') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form class="space-y-8 divide-y divide-gray-200">
                <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                    <div>
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Profile</h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">Harap Isi Informasi ini dengan Benar.</p>
                        </div>

                        <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                            <div x-data="showImage()"
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="foto" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Foto (jpg,png)
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <label
                                        class="flex flex-col w-32 h-32 rounded-full hover:bg-gray-100 hover:border-gray-300">
                                        <div class="relative flex flex-col items-center justify-center pt-7">
                                            <img id="preview" class="absolute inset-0 rounded-full w-32 h-32">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                Pilih Foto</p>
                                        </div>
                                        <input type="file" name="foto" class="opacity-0" accept="image/*" @change="showPreview(event)" />
                                    </label>
                                </div>
                            </div>
                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Nama
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="name" id="name" value="{{ $user->name }}"
                                        class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Email
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="email" id="email" disabled value="{{ $user->email }}"
                                        class="max-w-lg block w-full shadow-sm bg-gray-200 focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="nohp" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Nomer Hp
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="nohp" id="nohp" value="{{ $user->nohp }}"
                                        class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="jenis_kelamin"
                                    class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Jenis Klamin </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <select id="jenis_kelamin" name="jenis_kelamin"
                                        class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                        @if ($user->jenis_kelamin == 'L')
                                            <option value="L" selected>Laki - Laki</option>
                                            <option value="P">Perempuan</option>
                                        @elseif ($user->jenis_kelamin == 'P')
                                            <option value="P" selected>Perempuan</option>
                                            <option value="L">Laki - Laki</option>
                                        @else
                                            <option selected disabled>-- Pilih Jenis Klamin --</option>
                                            <option value="L">Laki - Laki</option>
                                            <option value="P">Perempuan</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="alamat" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Alamat </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <textarea id="alamat" name="alamat" rows="3"
                                        class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                                    <p class="mt-2 text-sm text-gray-500">Tulis Alamat Lengkap diri Anda.</p>
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="cover-photo"
                                    class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> KTP
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-gray-200 sm:pt-5">
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <img src="{{ url('/storage/ktp', $user->ktp) }}" alt="KTP">
                                            <p class="mt-2 text-sm text-gray-500 bg-red-300">Tidak Dapan Merubah KTP Silahkan
                                                Hubungi Admin.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-5">
                    <div class="flex justify-end">
                        <button type="button"
                            class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                        <button type="submit"
                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
     <script>
            function showImage() {
                return {
                    showPreview(event) {
                        if (event.target.files.length > 0) {
                            var src = URL.createObjectURL(event.target.files[0]);
                            var preview = document.getElementById("preview");
                            preview.src = src;
                            preview.style.display = "block";
                        }
                    }
                }
            }
        </script>
</x-app-layout>
