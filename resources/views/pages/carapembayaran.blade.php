<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Metode Pembayaran Kamar') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl flex justify-between mx-auto sm:px-6 lg:px-8">
            <div class="w-6/8 pr-2">
                <h3 class="text-md text-gray-600 bg-yellow-400">
                    Pilih Metode Pembayaran Anda
                </h3>
                <div class="bg-white shadow-md pt-10 flex items-center justify-between">
                    <div class="text-xl px-12 font-bold">
                        <h1 class="text-3xl text-blue-800">
                            INVOICE
                        </h1>
                        <h3 class="text-xl text-blue-800">
                            #258942
                        </h3>
                    </div>
                    <div class="text-md px-12 font-bold">
                        <h4 class="text-md text-gray-400">
                            Tanggal : 23-12-2022
                        </h4>
                        <h4 class="text-md text-gray-400">
                            Tenggat Waktu : 23-01-2023
                        </h4>
                    </div>
                </div>
                <div class="bg-white shadow-md pt-10 flex items-center justify-between">
                    <div class="text-xl px-12 font-bold">
                        <img src="" alt="Logo Bank">
                    </div>
                    <div class="text-xl px-12 font-bold">
                         <h3 class="text-gray-700">
                            Nomor Rekening
                         </h3>
                         <h1 class="text-3xl">
                            180979909
                         </h1>
                    </div>
                </div>
                <div class="bg-white shadow-md pt-10 flex items-center justify-between">
                    <div class="text-xl px-12 font-bold">
                         <h3 class="text-gray-700">
                            ATM BACA
                         </h3>
                         <ul class="list-decimal pt6 text-sm text-gray-600">
                            <li>Masukan Kartu ATM BCA ke Mesin ATM</li>
                            <li>Masukan PIN ATM</li>
                            <li>Pilih Menu Transfer Lainnya</li>
                            <li>Pilih Menu 'Transfer' dan 'ke REK BCA'</li>
                            <li>Masukan No Rekening BCA yang dituju</li>
                            <li>Masukan Nominal yang akan di Transfer</li>
                            <li>Struk Akan Keluar dan transaksi selesai</li>
                         </ul>
                    </div>
                    <div class="text-xl px-12 font-bold">
                         <h3 class="text-gray-700">
                            BCA Mobile(M-BCA)
                         </h3>
                         <ul class="list-decimal pt6 text-sm text-gray-600">
                            <li>Masukan ke Menu M-Transfer</li>
                            <li>Masuklah ke Menu antar Rekening</li>
                            <li>Masukan Rekening Tujuan </li>
                            <li>Pilih Menu 'Transfer' dan 'ke REK BCA'</li>
                            <li>Masukan No Rekening BCA yang dituju</li>
                            <li>Masukan Nominal yang akan di Transfer</li>
                            <li>Masukan PIN BCA dan transaksi selesai</li>
                         </ul>
                    </div>
                </div>
                <div class="flex items-center py-6 px-8 bg-white shadow-md pt-16 justify-end">
                    <a class="py-2 px-8 bg-blue-100 text-blue-800 rounded-md" href="">UNGGAH</a>
                </div>

                
        </div>
        <div class="w-2/8">
            <div class="w-2/8 bg-gray-200">
                <div class="w-full overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-gray-200">
                        <h4 class="font-semibold text-sm text-gray-600">
                            Riwayat
                        </h4>
                        <form class="py-4 px-1">
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
                                <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                                    <div class="w-full flex items-center justify-between p-6 space-x-6">
                                        <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                            alt="">
                                        <div class="flex-1 truncate">
                                            <div class="flex items-center space-x-3">
                                                <h3 class="text-gray-900 text-sm font-medium truncate">Kos Albarokah 1
                                                </h3>
                                            </div>
                                            <p class="mt-1 text-gray-500 text-sm truncate">Kamar D6
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="-mt-px flex">
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
                                            <div class="-ml-px w-0 flex-1 flex">
                                                <a href="#"
                                                    class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                                    <!-- Heroicon name: solid/phone -->
                                                    <span class="ml-3">Rp. 400.000,-</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                                    <div class="w-full flex items-center justify-between p-6 space-x-6">
                                        <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                            alt="">
                                        <div class="flex-1 truncate">
                                            <div class="flex items-center space-x-3">
                                                <h3 class="text-gray-900 text-sm font-medium truncate">Kos Albarokah 2
                                                </h3>
                                            </div>
                                            <p class="mt-1 text-gray-500 text-sm truncate">Kamar B3
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="-mt-px flex">
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
                                            <div class="-ml-px w-0 flex-1 flex">
                                                <a href="#"
                                                    class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                                    <!-- Heroicon name: solid/phone -->
                                                    <span class="ml-3">Rp. 400.000,-</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- More people... -->
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
        
    </div>
</x-app-layout>
