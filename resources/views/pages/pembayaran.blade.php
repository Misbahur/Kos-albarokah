<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pembayaran Kamar') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-xl font-semibold text-gray-900">Pembayaran</h1>
                        <p class="mt-2 text-sm text-gray-700">Pembayaran atau Tagihan Anda Akan Di tampilkan Di bawah
                            ini.</p>
                    </div>
                    {{-- <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                        <button type="button"
                            class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Export</button>
                    </div> --}}
                </div>
                <div class="mt-8 flex flex-col">
                    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="whitespace-nowrap py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                                Nomer Invoice</th>
                                            <th scope="col"
                                                class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Tanggal Transaksi</th>
                                            <th scope="col"
                                                class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Tanggal Sewa</th>
                                            <th scope="col"
                                                class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Kamar</th>
                                            <th scope="col"
                                                class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Harga</th>
                                            <th scope="col"
                                                class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Lama Sewa</th>
                                            <th scope="col"
                                                class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Bank Tujuan</th>
                                            <th scope="col"
                                                class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Status Transaksi</th>
                                            <th scope="col" class="relative whitespace-nowrap py-3.5 pl-3 pr-4 sm:pr-6">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                        @forelse($pembayarans as $item)
                                            <tr>
                                                <td
                                                    class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-gray-500 sm:pl-6">
                                                    {{ $item->noinvoice }}</td>
                                                <td
                                                    class="whitespace-nowrap px-2 py-2 text-sm font-medium text-gray-900">
                                                    {{ $item->tanggal }}</td>
                                                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-900">
                                                    {{ $item->tanggal_sewa }}</td>
                                                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                                    {{ $item->kamar->kode }}</td>
                                                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                                    {{ number_format($item->harga) }}</td>
                                                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                                    {{ $item->lama_sewa }} Bulan</td>
                                                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                                    {{ $item->bank->bank }} - {{ $item->bank->norek }}</td>
                                                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                                    {{ $item->status }}</td>
                                                <td
                                                    class="relative whitespace-nowrap py-2 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                    <div class="flex justify-between">
                                                        <a class="text-blue-600 hover:text-blue-900"
                                                            href="{{ route('transaksipenyewa.invoice', $item->id) }}" target="_blank">
                                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                                                            </svg>

                                                        </a>
                                                        <a href="{{ route('kamar.edit', $item->id) }}" 
                                                            class="text-yellow-600 hover:text-yellow-900">
                                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                                            </svg>
                                                            Upload Bukti Bayar
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="9"
                                                    class="whitespace-nowrap border-b uppercase border-red-200 py-4 pl-4 pr-3 text-sm font-medium text-red-900 sm:pl-6 lg:pl-8">
                                                    Tidak ada Tagihan Atau Pembayaran Silahkan Lakukan Sewa Kamar
                                                    Terlebih Dahulu</td>
                                            </tr>
                                        @endforelse
                                        <!-- More transactions... -->
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
