<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl flex justify-between mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-5 gap-4">
                <div class="col-span-3">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="bg-white border-b border-gray-200">
                            <canvas id="myChart" width="600" height="400"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <ul class="list-none">
                        <li class="py-2">
                            <div class="flex justify-between p-3 pt-4 bg-blue-500 shadow-sm">
                                <div>
                                    <div class="text-xl font-bold text-white">Rp. 9.850.000,-</div>
                                    <div class="pt-6 px-2 text-sm font-semibold text-gray-200">Pemasukan Hari ini</div>
                                </div>


                                <div class="flex items-center pt-4">
                                    <span class="flex items-start py-0.5 text-sm text-blue-200">
                                        <svg class="w-16 h-16" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <a href="">
                                <div
                                    class="py-2 px-6 bg-blue-600 shadow-sm justify-center flex items-center text-gray-200 hover:text-blue-900">
                                    <div class="text-base text-center">
                                        More Info
                                    </div>
                                    <span class="flex items-center px-2 py-0.5 text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="py-2">
                            <div class="flex justify-between p-3 pt-4 bg-blue-500 shadow-sm">
                                <div>
                                    <div class="text-xl font-bold text-white">Rp. 9.850.000,-</div>
                                    <div class="pt-6 px-2 text-sm font-semibold text-gray-200">Pemasukan Bulan ini</div>
                                </div>


                                <div class="flex items-center pt-4">
                                    <span class="flex items-start py-0.5 text-sm text-blue-200">
                                        <svg class="w-16 h-16" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <a href="">
                                <div
                                    class="py-2 px-6 bg-blue-600 shadow-sm justify-center flex items-center text-gray-200 hover:text-blue-900">
                                    <div class="text-base text-center">
                                        More Info
                                    </div>
                                    <span class="flex items-center px-2 py-0.5 text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="py-2">
                            <div class="flex justify-between p-3 pt-4 bg-blue-500 shadow-sm">
                                <div>
                                    <div class="text-xl font-bold text-white">Rp. 9.850.000,-</div>
                                    <div class="pt-6 px-2 text-sm font-semibold text-gray-200">Pemasukan Tahun ini</div>
                                </div>


                                <div class="flex items-center pt-4">
                                    <span class="flex items-start py-0.5 text-sm text-blue-200">
                                        <svg class="w-16 h-16" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <a href="">
                                <div
                                    class="py-2 px-6 bg-blue-600 shadow-sm justify-center flex items-center text-gray-200 hover:text-blue-900">
                                    <div class="text-base text-center">
                                        More Info
                                    </div>
                                    <span class="flex items-center px-2 py-0.5 text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="col-span-1">
                    <div class="w-full overflow-hidden shadow-sm sm:rounded-lg">
                        <h3 class="font-semibold text-xl">
                            Transaksi Terakhir
                        </h3>
                        <div class="p-4 bg-gray-200">

                            <div class="py-2 px-1">
                                <!-- This example requires Tailwind CSS v2.0+ -->
                                <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-1 lg:grid-cols-1">
                                    <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                                        <div class="w-full flex items-center justify-between p-2 space-x-6">
                                            <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                                alt="">
                                            <div class="flex-1 truncate">
                                                <div class="flex items-center space-x-3">
                                                    <h3 class="text-gray-900 text-sm font-medium truncate">Kos Albarokah
                                                        1
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
                                                        class="relative w-0 flex-1 inline-flex items-center justify-center py-1 text-sm text-green-700 font-medium border border-transparent rounded-br-lg hover:text-green-500 bg-green-200">
                                                        <!-- Heroicon name: solid/phone -->
                                                        <svg class="w-5 h-5 text-green-400"
                                                            xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                            stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                                        </svg>
                                                        <span class="ml-3">Cowok</span>
                                                    </a>
                                                </div>
                                                <div class="-ml-px w-0 flex-1 flex">
                                                    <a href="#"
                                                        class="relative w-0 flex-1 inline-flex items-center justify-center py-1 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                                        <!-- Heroicon name: solid/phone -->
                                                        <span class="ml-3">Rp. 400.000,-</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                                        <div class="w-full flex items-center justify-between p-2 space-x-6">
                                            <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                                alt="">
                                            <div class="flex-1 truncate">
                                                <div class="flex items-center space-x-3">
                                                    <h3 class="text-gray-900 text-sm font-medium truncate">Kos Albarokah
                                                        2
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
                                                        class="relative w-0 flex-1 inline-flex items-center justify-center py-1 text-sm text-blue-700 font-medium border border-transparent rounded-br-lg hover:text-blue-500 bg-blue-200">
                                                        <!-- Heroicon name: solid/phone -->
                                                        <svg class="w-5 h-5 text-blue-400"
                                                            xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                            stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                                        </svg>
                                                        <span class="ml-3">Cewek</span>
                                                    </a>
                                                </div>
                                                <div class="-ml-px w-0 flex-1 flex">
                                                    <a href="#"
                                                        class="relative w-0 flex-1 inline-flex items-center justify-center py-1 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
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
                <div class="col-span-5">
                    <div class="py-10 px-4 sm:px-6 lg:px-8">
                                <div class="sm:flex sm:items-center">
                                    <div class="sm:flex-auto">
                                        <h1 class="text-xl font-semibold text-gray-900">Data Penghuni Kos</h1>
                                        <p class="mt-2 text-sm text-gray-700">Berikut ini Adalah Data Kamar yang telah dihuni beserta identitas penghuni Kos Al-Barokah.</p>
                                    </div>
                                    {{-- <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                                        <button type="button"
                                            class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Update
                                            credit card</button>
                                    </div> --}}
                                </div>
                                <div class="-mx-4 mt-10 ring-1 ring-gray-300 sm:-mx-6 md:mx-0 md:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                                    Nama</th>
                                                <th scope="col"
                                                    class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                                    Tipe Kamar Kos</th>
                                                <th scope="col"
                                                    class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                                    Jenis Kos</th>
                                                <th scope="col"
                                                    class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                                    Tagihan Bulan Ini</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Status Pembayaran</th>
                                                <th scope="col" class="relative py-3.5 text-center text-sm font-semibold text-gray-900">
                                                    Select
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="relative py-4 pl-4 sm:pl-6 pr-3 text-sm">
                                                    <div class="font-medium text-gray-900">Roby</div>
                                                    <div class="mt-1 flex flex-col text-gray-500 sm:block lg:hidden">
                                                        <span>Reguler</span>
                                                        <span class="hidden sm:inline"> · </span>
                                                        <span>Bulan</span>
                                                    </div>
                                                </td>
                                                <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">Albarokah 1 p3</td>
                                                <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">Bulan</td>
                                                <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">Rp. 400.000</td>
                                                <td class="px-3 py-3.5 text-sm text-gray-500">
                                                    <div class="sm:hidden">Lunas</div>
                                                    <div class="hidden sm:block">Lunas</div>
                                                </td>
                                                <td
                                                    class="relative py-3.5 pl-3 pr-4 sm:pr-6 text-right text-sm font-medium">
                                                    <button type="button"
                                                        class="inline-flex items-center rounded-md border border-gray-300 bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">Select<span
                                                            class="sr-only">, Roby</span></button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="relative py-4 pl-4 sm:pl-6 pr-3 text-sm">
                                                    <div class="font-medium text-gray-900">Hany</div>
                                                    <div class="mt-1 flex flex-col text-gray-500 sm:block lg:hidden">
                                                        <span>Reguler</span>
                                                        <span class="hidden sm:inline"> · </span>
                                                        <span>Bulan</span>
                                                    </div>
                                                </td>
                                                <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">Albarokah 3 D12</td>
                                                <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">Bulan</td>
                                                <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">Rp. 450.000</td>
                                                <td class="px-3 py-3.5 text-sm text-gray-500">
                                                    <div class="sm:hidden">Lunas</div>
                                                    <div class="hidden sm:block">Lunas</div>
                                                </td>
                                                <td
                                                    class="relative py-3.5 pl-3 pr-4 sm:pr-6 text-right text-sm font-medium">
                                                    <button type="button"
                                                        class="inline-flex items-center rounded-md border border-gray-300 bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">Select<span
                                                            class="sr-only">, Hanyx</span></button>
                                                </td>
                                            </tr>

                                            <!-- More plans... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    </script>
</x-app-layout>
