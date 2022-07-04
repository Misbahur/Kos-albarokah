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
            <form class="py-4 px-1 md:w-full lg:w-6/12 xl:w-6/12">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="flex items-center">
                    <input type="search" id="default-search"
                        class="block p-3 pl-10 w-full text-md text-gray-900 bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Cari Kos, Cowok Cewek..." required>
                    <select id="country" name="country" autocomplete="country-name"
                        class="block p-3 focus:ring-blue-500 focus:border-blue-500 shadow-sm border-gray-300">
                        <option selected disabled>Kategori</option>
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Mexico</option>
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
                    <div class="flex items-center shadow-md">
                        <div class="w-2/5">
                            <img class="rounded-tl-lg rounded-bl-lg"
                                src="https://d3p0bla3numw14.cloudfront.net/news-content/img/2021/09/21234309/desain-kamar-tidur-pinterest-3.jpg"
                                alt="">
                        </div>
                        <div class="w-3/5">
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
                                    Tersedia
                                </h6>
                            </div>
                            <h1 class="text-2xl text-left px-2 py-2 font-bold">
                                Kamar Kost Tipe D
                            </h1>
                            <h6 class="text-sm text-left px-2 py-2 font-bold">
                                Rp. 400.000
                            </h6>
                            <p class="text-xm text-left px-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste adipisci, rerum
                                consectetur
                            </p>
                            <div class="flex items-start justify-between text-sm pt-8 px-2 text-blue-600">
                                <h6 class="inline-flex">
                                    <svg class="w-5 h-5 pr-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                    </svg>
                                    Al- Barokah
                                </h6>
                                <h6 class="inline-flex">
                                    Tersedia
                                    <svg class="w-5 h-5 pl-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center shadow-md">
                        <div class="w-2/5">
                            <img class="rounded-tl-lg rounded-bl-lg"
                                src="https://d3p0bla3numw14.cloudfront.net/news-content/img/2021/09/21234309/desain-kamar-tidur-pinterest-3.jpg"
                                alt="">
                        </div>
                        <div class="w-3/5">
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
                                    Tersedia
                                </h6>
                            </div>
                            <h1 class="text-2xl text-left px-2 py-2 font-bold">
                                Kamar Kost Tipe D
                            </h1>
                            <h6 class="text-sm text-left px-2 py-2 font-bold">
                                Rp. 400.000
                            </h6>
                            <p class="text-xm text-left px-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste adipisci, rerum
                                consectetur
                            </p>
                            <div class="flex items-start justify-between text-sm pt-8 px-2 text-blue-600">
                                <h6 class="inline-flex">
                                    <svg class="w-5 h-5 pr-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                    </svg>
                                    Al- Barokah
                                </h6>
                                <h6 class="inline-flex">
                                    Tersedia
                                    <svg class="w-5 h-5 pl-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </h6>
                            </div>
                        </div>
                    </div><div class="flex items-center shadow-md">
                        <div class="w-2/5">
                            <img class="rounded-tl-lg rounded-bl-lg"
                                src="https://d3p0bla3numw14.cloudfront.net/news-content/img/2021/09/21234309/desain-kamar-tidur-pinterest-3.jpg"
                                alt="">
                        </div>
                        <div class="w-3/5">
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
                                    Tersedia
                                </h6>
                            </div>
                            <h1 class="text-2xl text-left px-2 py-2 font-bold">
                                Kamar Kost Tipe D
                            </h1>
                            <h6 class="text-sm text-left px-2 py-2 font-bold">
                                Rp. 400.000
                            </h6>
                            <p class="text-xm text-left px-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste adipisci, rerum
                                consectetur
                            </p>
                            <div class="flex items-start justify-between text-sm pt-8 px-2 text-blue-600">
                                <h6 class="inline-flex">
                                    <svg class="w-5 h-5 pr-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                    </svg>
                                    Al- Barokah
                                </h6>
                                <h6 class="inline-flex">
                                    Tersedia
                                    <svg class="w-5 h-5 pl-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </h6>
                            </div>
                        </div>
                    </div><div class="flex items-center shadow-md">
                        <div class="w-2/5">
                            <img class="rounded-tl-lg rounded-bl-lg"
                                src="https://d3p0bla3numw14.cloudfront.net/news-content/img/2021/09/21234309/desain-kamar-tidur-pinterest-3.jpg"
                                alt="">
                        </div>
                        <div class="w-3/5">
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
                                    Tersedia
                                </h6>
                            </div>
                            <h1 class="text-2xl text-left px-2 py-2 font-bold">
                                Kamar Kost Tipe D
                            </h1>
                            <h6 class="text-sm text-left px-2 py-2 font-bold">
                                Rp. 400.000
                            </h6>
                            <p class="text-xm text-left px-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste adipisci, rerum
                                consectetur
                            </p>
                            <div class="flex items-start justify-between text-sm pt-8 px-2 text-blue-600">
                                <h6 class="inline-flex">
                                    <svg class="w-5 h-5 pr-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                    </svg>
                                    Al- Barokah
                                </h6>
                                <h6 class="inline-flex">
                                    Tersedia
                                    <svg class="w-5 h-5 pl-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </h6>
                            </div>
                        </div>
                    </div><div class="flex items-center shadow-md">
                        <div class="w-2/5">
                            <img class="rounded-tl-lg rounded-bl-lg"
                                src="https://d3p0bla3numw14.cloudfront.net/news-content/img/2021/09/21234309/desain-kamar-tidur-pinterest-3.jpg"
                                alt="">
                        </div>
                        <div class="w-3/5">
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
                                    Tersedia
                                </h6>
                            </div>
                            <h1 class="text-2xl text-left px-2 py-2 font-bold">
                                Kamar Kost Tipe D
                            </h1>
                            <h6 class="text-sm text-left px-2 py-2 font-bold">
                                Rp. 400.000
                            </h6>
                            <p class="text-xm text-left px-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste adipisci, rerum
                                consectetur
                            </p>
                            <div class="flex items-start justify-between text-sm pt-8 px-2 text-blue-600">
                                <h6 class="inline-flex">
                                    <svg class="w-5 h-5 pr-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                    </svg>
                                    Al- Barokah
                                </h6>
                                <h6 class="inline-flex">
                                    Tersedia
                                    <svg class="w-5 h-5 pl-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </h6>
                            </div>
                        </div>
                    </div><div class="flex items-center shadow-md">
                        <div class="w-2/5">
                            <img class="rounded-tl-lg rounded-bl-lg"
                                src="https://d3p0bla3numw14.cloudfront.net/news-content/img/2021/09/21234309/desain-kamar-tidur-pinterest-3.jpg"
                                alt="">
                        </div>
                        <div class="w-3/5">
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
                                    Tersedia
                                </h6>
                            </div>
                            <h1 class="text-2xl text-left px-2 py-2 font-bold">
                                Kamar Kost Tipe D
                            </h1>
                            <h6 class="text-sm text-left px-2 py-2 font-bold">
                                Rp. 400.000
                            </h6>
                            <p class="text-xm text-left px-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste adipisci, rerum
                                consectetur
                            </p>
                            <div class="flex items-start justify-between text-sm pt-8 px-2 text-blue-600">
                                <h6 class="inline-flex">
                                    <svg class="w-5 h-5 pr-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                    </svg>
                                    Al- Barokah
                                </h6>
                                <h6 class="inline-flex">
                                    Tersedia
                                    <svg class="w-5 h-5 pl-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </h6>
                            </div>
                        </div>
                    </div><div class="flex items-center shadow-md">
                        <div class="w-2/5">
                            <img class="rounded-tl-lg rounded-bl-lg"
                                src="https://d3p0bla3numw14.cloudfront.net/news-content/img/2021/09/21234309/desain-kamar-tidur-pinterest-3.jpg"
                                alt="">
                        </div>
                        <div class="w-3/5">
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
                                    Tersedia
                                </h6>
                            </div>
                            <h1 class="text-2xl text-left px-2 py-2 font-bold">
                                Kamar Kost Tipe D
                            </h1>
                            <h6 class="text-sm text-left px-2 py-2 font-bold">
                                Rp. 400.000
                            </h6>
                            <p class="text-xm text-left px-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste adipisci, rerum
                                consectetur
                            </p>
                            <div class="flex items-start justify-between text-sm pt-8 px-2 text-blue-600">
                                <h6 class="inline-flex">
                                    <svg class="w-5 h-5 pr-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                    </svg>
                                    Al- Barokah
                                </h6>
                                <h6 class="inline-flex">
                                    Tersedia
                                    <svg class="w-5 h-5 pl-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </h6>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
