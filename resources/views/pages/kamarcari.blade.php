<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kamar') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="font-bold text-2xl">
                Kamar Kos
            </h3>
             <form action="{{ route('kamarpenyewa.cari') }}" method="GET" class="py-4 px-1 md:w-full lg:w-6/12 xl:w-6/12">
                @csrf
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="flex items-center">
                    <input type="text" id="kode" name="kode"
                        class="block p-3 pl-10 w-full text-md text-gray-900 bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Cari Kode Kamar">
                    <select id="kategori" name="kategori" autocomplete="kategori"
                        class="block p-3 focus:ring-blue-500 focus:border-blue-500 shadow-sm border-gray-300 pr-10">
                        <option selected disabled>Kategori</option>
                        <option value="cowok">Cowok</option>
                        <option value="cewek">Cewek</option>
                    </select>
                    <select id="cabang" name="cabang" autocomplete="cabang"
                        class="block p-3 focus:ring-blue-500 focus:border-blue-500 shadow-sm border-gray-300 pr-10">
                        <option selected disabled>Cabang</option>
                        @forelse ($cabangs as $item)
                            <option value="{{ $item->id }}"> {{ $item->nama }} </option>
                        @empty
                            <option>Tidak Ada data</option>
                        @endforelse
                    </select>
                    <button
                        class="px-2.5 py-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300"
                        type="submit">
                        <svg class="w-8 h-8 text-white hover:text-gray-100" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </form>
            <div class="w-full flex">
                <div class="grid grid-cols-2 gap-12 md:grid-cols-1 lg:grid-cols-2 sm:grid-cols-1">
                    @forelse ($kamars as $item)
                      <div class="flex items-center shadow-md">
                        <div class="w-2/5">
                            <img class="rounded-tl-lg rounded-bl-lg"
                                src="{{ asset('bank/lihat.jpg') }}"
                                alt="">
                        </div>
                        <div class="w-3/5">
                            @if ($item->cabang->kategori === 'cowok')
                            <div class="flex items-start justify-between text-sm py-3 px-2 text-green-600">
                                <h6 class="bg-green-300 inline-flex">
                                    <svg class="w-5 h-5 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    Cowok
                                </h6>
                                <h6>
                                    {{ $item->status }} Sewa
                                </h6>
                            </div>
                                @else
                                <div class="flex items-start justify-between text-sm py-3 px-2 text-blue-600">
                                    <h6 class="bg-blue-300 inline-flex">
                                    <svg class="w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    Cewek
                                </h6>
                                <h6>
                                    {{ $item->status }} Sewa
                                </h6>
                            </div>
                                @endif
                            <h1 class="text-2xl text-left px-2 py-2 font-bold">
                                {{ $item->cabang->nama }} {{ $item->kode }}
                            </h1>
                            <h6 class="text-sm text-left px-2 py-2 font-bold">
                                Rp. {{ number_format($item->harga) }}
                            </h6>
                            <p class="text-xm text-left px-2">
                                {!! $item->deskripsi !!}
                            </p>
                            <div class="flex items-start justify-between text-sm pt-8 px-2 text-blue-600">
                                <h6 class="inline-flex">
                                    <svg class="w-5 h-5 pr-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                    </svg>
                                    {{ $item->cabang->nama }}
                                </h6>
                                <a href="{{ route('kamarshow.penyewa', $item->id) }}" class="inline-flex">
                                    Detail
                                    <svg class="w-5 h-5 pl-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>  
                    @empty
                        <div class="whitespace-nowrap border-b uppercase border-red-200 py-4 pl-4 pr-3 text-sm font-medium text-red-900 sm:pl-6 lg:pl-8 w-full">Tidak ada data</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
