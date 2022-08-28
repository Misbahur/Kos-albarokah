<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Invoice Kos Albarokah</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-7xl flex justify-between mx-auto sm:px-6 lg:px-8">
            <div class="w-6/8 pr-2">
                <h3 class="text-md text-gray-600 bg-yellow-400">
                    Selesaikan Pembayaran Anda!
                </h3>
                <h3 class="text-md text-gray-600 bg-green-400">
                    Pembayaran Telah Disetujui
                </h3>
                <div class="bg-white shadow-md pt-10 flex items-center justify-between">
                    <div class="text-xl px-12 font-bold">
                        <h1 class="text-3xl text-blue-800">
                            INVOICE
                        </h1>
                        <h3 class="text-xl text-blue-800">
                            {{ $noinvoice }}
                        </h3>
                    </div>
                    <div class="text-md px-12 font-bold">
                        <h4 class="text-md text-gray-400">
                            Tanggal Transaksi : {{ $tanggaltransaksi }}
                        </h4>
                        <h4 class="text-md text-gray-400">
                            Tenggat Sewa : {{ $tanggalsewa }}
                        </h4>
                    </div>
                </div>
                <div class="bg-white shadow-md pt-10 flex items-center justify-between">
                    <div class="text-xl px-12 font-bold">
                        <h2 class="text-xl text-gray-500">
                            Dari
                        </h2>
                        <h1 class="pt-4 text-3xl text-black">
                            {{ $namapenyewa }}
                        </h1>
                        <h4 class="pt-6 text-md text-gray-400">
                            {{ $jkpenyewa }}
                        </h4>
                        <h4 class="ext-md text-gray-400">
                            {{ $alamatpenyewa }}
                        </h4>
                    </div>
                    <div class="text-xl px-12 font-bold">
                         <h2 class="text-xl text-gray-500">
                            Kepada
                        </h2>
                        <h1 class="pt-4 text-3xl text-black">
                            Kos Al-Barokah
                        </h1>
                        <h4 class="pt-6 text-md text-gray-400">
                            Kost
                        </h4>
                        <h4 class="ext-md text-gray-400">
                            Karangbendo, Kec. Rogojampi
                        </h4>
                    </div>
                </div>

                <div class="bg-white shadow-md pt-16 px-12 grid grid-cols-3 justify-center gap-6">
                    <div class="text-2xl font-semibold text-blue-800">
                        JUMLAH
                    </div>
                    <div class="text-2xl font-semibold text-blue-800">
                        NAMA KOST
                    </div>
                    <div class="text-2xl font-semibold text-blue-800 justify-self-end">
                        BIAYA
                    </div>
                    <div class="text-2xl font-semibold text-gray-800">
                        1
                    </div>
                    <div class="text-2xl font-semibold text-gray-800">
                        Kamar Kost B.2
                    </div>
                    <div class="text-2xl font-semibold text-gray-800 justify-self-end">
                        Rp. 500.000
                    </div>
                </div>

                <div class="pt-32 bg-white shadow-md border-b-2">

                </div>
                <div class="flex items-center px-12 py-6 justify-between bg-white shadow-md font-bold">
                    <h3 class="text-2xl text-blue-800">
                            Total
                        </h3>
                        <h3 class="text-2xl text-blue-800">
                            Rp. 500.000
                        </h3>
                </div>
                <div class="flex items-center px-12 py-10 justify-center bg-white shadow-md font-bold">
                    <a class="py-2 px-8 bg-blue-100 text-blue-800 rounded-md" href="">PRINT</a>
                    <div class="px-4"></div>
                    <a class="py-2 px-8 bg-blue-100 text-blue-800 rounded-md" href="">BAYAR</a>
                </div>
        </div>
</body>
</html>