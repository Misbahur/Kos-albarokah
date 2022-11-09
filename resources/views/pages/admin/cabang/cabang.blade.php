<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blok Kos') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-xl font-semibold text-gray-900">Blok KOS</h1>
                        <p class="mt-2 text-sm text-gray-700">Daftar semua Blok KOS.</p>
                    </div>
                    <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                        <a href="{{ route('cabang.create') }}" type="button"
                            class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Tambah
                            Blok</a>
                    </div>
                </div>
                <div class="mt-8 flex flex-col">
                    <div class="-my-2 -mx-4 sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle">
                            <div class="shadow-sm ring-1 ring-black ring-opacity-5">
                                <table class="min-w-full border-separate" style="border-spacing: 0">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                                Nama</th>
                                            <th scope="col"
                                                class="sticky top-0 z-10 hidden border-b border-gray-300 bg-gray-50 bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">
                                                Kategori</th>
                                            <th scope="col"
                                                class="sticky top-0 z-10 hidden border-b border-gray-300 bg-gray-50 bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:table-cell">
                                                Latitude</th>
                                            <th scope="col"
                                                class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter">
                                                Longitude</th>
                                            <th scope="col" width="10"
                                                class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 py-3.5 pr-4 pl-3 backdrop-blur backdrop-filter sm:pr-6 lg:pr-8">
                                                <span class="sr-only">Action</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white"> 
                                        @forelse($cabangs as $item)
                                            <tr>
                                                <td
                                                    class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                    {{ $item->nama }}</td>
                                                <td
                                                    class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                                                    {{ $item->kategori }}</td>
                                                <td
                                                    class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">
                                                    {{ $item->latitude }}</td>
                                                <td
                                                    class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">
                                                    {{ $item->longitude }}</td>
                                                <td width="10%"
                                                    class="relative whitespace-nowrap border-b border-gray-200 py-4 text-center text-sm font-medium sm:pr-6 lg:pr-8">
                                                    <form class="flex justify-between"
                                                        onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus cabang ini \nAkun ini akan dihapus Permanen ?');"
                                                        action="{{ route('cabang.destroy', $item->id) }}"
                                                        {{-- "{{ route('cabang.destroy',$cabang->id) }}"
                                                        --}} method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        {{-- <a class="text-blue-600 hover:text-blue-900" href="#">
                                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                                                class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </a> --}}
                                                        <a href="{{ route('cabang.edit', $item->id) }}" class="text-yellow-600 hover:text-yellow-900"><svg
                                                                class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                                stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                            </svg></a>
                                                        <a class="text-red-600 hover:text-red-900"><button
                                                                type="submit">
                                                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </button></a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5"
                                                    class="whitespace-nowrap border-b uppercase border-red-200 py-4 pl-4 pr-3 text-sm font-medium text-red-900 sm:pl-6 lg:pl-8">
                                                    Tidak ada data</td>
                                            </tr>
                                        @endforelse

                                        <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
