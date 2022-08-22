<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kontak Person') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl flex justify-between mx-auto sm:px-6 lg:px-8">
            <div>
                    <div>
                        <img class="object-cover h-96 w-44" src="https://education.ec.europa.eu/sites/default/files/styles/eac_ratio_16_9_xl/public/2021-12/Planning%20your%20studies.jpg?h=140710cd&itok=EDqz50YE" alt="">
                    </div>
            </div>
            <div class="px-2">
                <h1 class="text-2xl text-black font-bold">
                    Lokasi
                </h1>
                <h4 class="text-md text-gray-600">
                    Jl. H. Muso, Bades, Karangbendo, Kec. Rogojampi, Kabupaten Banyuwangi, Jawa Timur 68462
                </h4>
                <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="260" id="gmap_canvas" src="https://maps.google.com/maps?q=Rumah%20Kos%20Putra%20Putri%20Al%20Barokah&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><style>.gmap_canvas {overflow:hidden;background:none!important;height:260px;width:600px;}</style></div></div>
            </div>
            <div>
                <div class="bg-gray-200">
                    <div class="w-full h-96 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-gray-200">
                            <h4 class="font-semibold text-sm text-gray-600">
                                Kontak
                            </h4>
                            <div class="py-4 px-1">
                                <!-- This example requires Tailwind CSS v2.0+ -->
                                <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-1 lg:grid-cols-1">
                                    <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                                        <div class="w-full flex items-center justify-between p-2 space-x-6">
                                            <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                                src="{{ asset('social/wa.png') }}"
                                                alt="">
                                            <div class="flex-1 truncate">
                                                <div class="flex items-center space-x-3">
                                                    <h3 class="text-gray-900 text-sm font-medium truncate">Whatsapp
                                                    </h3>
                                                </div>
                                                <p class="mt-1 text-gray-500 text-sm truncate">+62 812 8844 8564
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                                        <div class="w-full flex items-center justify-between p-2 space-x-6">
                                            <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                                src="{{ asset('social/gmail.png') }}"
                                                alt="">
                                            <div class="flex-1 truncate">
                                                <div class="flex items-center space-x-3">
                                                    <h3 class="text-gray-900 text-sm font-medium truncate">GMAIL
                                                    </h3>
                                                </div>
                                                <p class="mt-1 text-gray-500 text-sm truncate">albarokah@gmail.com
                                                </p>
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
