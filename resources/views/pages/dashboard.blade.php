<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl flex justify-between mx-auto sm:px-6 lg:px-8">
            <div class="w-6/8 pr-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="font-semibold text-xl">
                            Terima Kos Cowok Cewek
                        </h3>
                    </div>
                    <div class="py-4 pr-10">
                        <img class="inline rounded-md" src="https://bisniz.id/wp-content/uploads/2022/04/Bisnis-Kos-kosan.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="w-2/8 bg-gray-200">
                <div class="w-full overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-gray-200">
                        <h4 class="font-semibold text-sm text-gray-600">
                            Kamar
                        </h4>
                        <form action="" class="py-4 px-1">
                            <label for="default-search"
                                class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <input type="search" id="default-search"
                                    class="block p-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Cari Kos, Cowok Cewek..." required>
                                <button type="submit"
                                    class="text-white absolute right-2 bottom-1 bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1">Search</button>
                            </div>
                        </form>

                        <div class="py-4 px-1">
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-1 lg:grid-cols-1">
                                @forelse ($kamars as $item)
                                    <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                                    <div class="w-full flex items-center justify-between p-6 space-x-6">
                                        <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                            src="https://d3p0bla3numw14.cloudfront.net/news-content/img/2021/09/21234309/desain-kamar-tidur-pinterest-3.jpg"
                                            alt="">
                                        <div class="flex-1 truncate">
                                            <div class="flex items-center space-x-3">
                                                <h3 class="text-gray-900 text-sm font-medium truncate">{{ $item->cabang->nama }}
                                                </h3>
                                            </div>
                                            <p class="mt-1 text-gray-500 text-sm truncate">Kamar {{ $item->kode }}
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="-mt-px flex">
                                            @if ($item->cabang->kategori === 'cowok')
                                                <div class="flex-1 w-0 flex">
                                                <a href="#"
                                                    class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-green-700 font-medium border border-transparent rounded-br-lg hover:text-green-500 bg-green-200">
                                                    <!-- Heroicon name: solid/phone -->
                                                    <svg class="w-5 h-5 text-green-400"
                                                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                                    </svg>
                                                    <span class="ml-3">Cowok</span>
                                                </a>
                                            </div>
                                            @else
                                                <div class="flex-1 w-0 flex">
                                                <a href="#"
                                                    class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-blue-700 font-medium border border-transparent rounded-br-lg hover:text-blue-500 bg-blue-200">
                                                    <!-- Heroicon name: solid/phone -->
                                                   <svg class="w-5 h-5 text-blue-400"
                                                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                                    </svg>
                                                    <span class="ml-3">Cewek</span>
                                                </a>
                                            </div>
                                            @endif
                                            
                                            <div class="-ml-px w-0 flex-1 flex">
                                                <a href="#"
                                                    class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                                    <!-- Heroicon name: solid/phone -->
                                                    <span class="ml-3">Rp. {{ number_format($item->harga) }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @empty
                                    <li class="col-span-1 bg-red-500 rounded-lg shadow divide-y divide-gray-200">
                                    Data Kamar tidak ditemukan / Data Kamar Kosong
                                </li>
                                @endforelse
                                <!-- More people... -->
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
