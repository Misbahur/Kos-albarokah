<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Kamar') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="font-bold text-2xl">
                Kamar Kos
            </h3>
            <div class="bg-white">
                <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:items-start">
                        <!-- Image gallery -->
                        <div x-data="photoGalleryApp" class="flex flex-col-reverse">
                            <!-- Image selector -->
                            <div class="hidden mt-6 w-full max-w-2xl mx-auto sm:block lg:max-w-none">
                                <div class="grid grid-cols-4 gap-6" aria-orientation="horizontal" role="tablist">
                                    @foreach($gambars as $key => $item)
                                        <button id="tabs-1-tab-1" x-on:click="pickPhoto({{ $key }})"
                                            class="relative h-24 bg-white rounded-md flex items-center justify-center text-sm font-medium uppercase text-gray-900 cursor-pointer hover:bg-gray-50 focus:outline-none focus:ring focus:ring-offset-4 focus:ring-opacity-50"
                                            aria-controls="tabs-1-panel-1" role="tab" type="button">
                                            <span class="sr-only"> {{ $item->kamar->kode }} </span>
                                            <span class="absolute inset-0 rounded-md overflow-hidden">
                                                <img src="{{ asset('storage/'.$item->gambar) }}"
                                                    alt="" class="w-full h-full object-center object-cover">
                                            </span>
                                            <!-- Selected: "ring-indigo-500", Not Selected: "ring-transparent" -->
                                            <span
                                                class="ring-transparent absolute inset-0 rounded-md ring-2 ring-offset-2 pointer-events-none"
                                                aria-hidden="true"></span>
                                        </button>
                                    @endforeach
                                </div>
                            </div>

                            <div class="w-full aspect-w-1 aspect-h-1">
                                <!-- Tab panel, show/hide based on tab state. -->
                                <div id="tabs-1-panel-1" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
                                    <img x-ref="mainImage" loading="lazy" src=""
                                        alt="Angled front view with bag zipped and handles upright."
                                        class="w-full h-full object-center object-cover sm:rounded-lg">
                                </div>

                                <!-- More images... -->
                            </div>
                        </div>

                        <!-- Product info -->
                        <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0">
                            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">
                                {{ $kamar->cabang->nama }} {{ $kamar->kode }}</h1>

                            <div class="mt-3">
                                <h2 class="sr-only">Kost Info</h2>
                                <p class="text-3xl text-gray-900">Rp. {{ number_format($kamar->harga) }}</p>
                            </div>

                            <div class="mt-6">
                                <h3 class="sr-only">Deskripsi Kos</h3>

                                <div class="text-base text-gray-700 space-y-6">
                                    {!! $kamar->deskripsi !!}
                                </div>
                            </div>

                            <form action="{{ route('transaksistorepenyewa') }}" method="POST" class="mt-6">
                                @csrf
                                <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="tanggal" value="{{ date('Y-m-d') }}">
                                <input type="hidden" name="status" value="{{ 'tidak' }}">
                                <input type="hidden" name="kamars_id" value="{{ $kamar->id }}">
                                <input type="hidden" name="harga" value="{{ $kamar->harga  }}">
                                 <div class="mt-10 flex justify-between justify-self-center">
                                    <div>
                                    <x-label for="tanggal_sewa" :value="__('Tanggal Sewa')" />

                                    <x-input-form>
                                        <x-slot name="icon">
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                            </svg>
                                        </x-slot>
                                        <x-slot name="input">
                                            <input type="date" name="tanggal_sewa" id="tanggal_sewa"
                                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full">
                                        </x-slot>
                                    </x-input-form>
                                    </div>
                                    <div>
                                        <x-label for="lama_sewa" :value="__('Lama Sewa')" />

                                        <x-input-form>
                                            <x-slot name="icon">
                                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </x-slot>
                                            <x-slot name="input">
                                                <input type="number" name="lama_sewa" id="lama_sewa"
                                                    class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full">
                                            </x-slot>
                                        </x-input-form>
                                    </div>
                                    <div>
                                        <x-label for="banks_id" :value="__('Pilih Bank')" />

                                        <x-input-form>
                                            <x-slot name="icon">
                                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </x-slot>
                                            <x-slot name="input">
                                                <select name="banks_id" id="banks_id"
                                                    class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full">
                                                    <option selected disabled>-- Pilih Bank --</option>
                                                    @forelse ($banks as $item)
                                                        <option value="{{ $item->id }}">{{ $item->bank }} - {{ $item->norek }}</option>
                                                    @empty
                                                        <option>Silahkan Hubungi Admin</option>
                                                    @endforelse
                                                </select>
                                            </x-slot>
                                        </x-input-form>
                                    </div>
                                </div>
                                <div class="mt-5 flex sm:flex-col1">
                                    <button type="submit"
                                        class="max-w-xs flex-1 bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500 sm:w-full">Ajukan
                                        Sewa</button>
                                </div>
                            </form>

                            <section aria-labelledby="details-heading" class="mt-12">
                                <h2 id="details-heading" class="sr-only">Informasi Tambahan</h2>

                                <div class="border-t divide-y divide-gray-200">
                                    <div x-data="{ expanded: false }">
                                        <h3>
                                            <!-- Expand/collapse question button -->
                                            <button @click="expanded = ! expanded" type="button"
                                                class="group relative w-full py-6 flex justify-between items-center text-left"
                                                aria-controls="disclosure-1" aria-expanded="false">
                                                <!-- Open: "text-indigo-600", Closed: "text-gray-900" -->
                                                <span
                                                    :class="expanded ? 'text-indigo-600  text-sm font-medium' : 'text-gray-900 text-sm font-medium'">
                                                    Informasi Tambahan </span>
                                                <span class="ml-6 flex items-center">
                                                    <!--
                      Heroicon name: outline/plus-sm

                      Open: "hidden", Closed: "block"
                    -->
                                                    <svg :class="expanded ? 'hidden' : 'block h-6 w-6 text-gray-400 group-hover:text-gray-500'"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                    </svg>
                                                    <!--
                      Heroicon name: outline/minus-sm

                      Open: "block", Closed: "hidden"
                    -->
                                                    <svg :class="expanded ? 'h-6 w-6 text-indigo-400 group-hover:text-indigo-500' : 'hidden'"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M18 12H6" />
                                                    </svg>
                                                </span>
                                            </button>
                                        </h3>
                                        <div x-show="expanded" x-collapse.duration.1000ms class="pb-6 prose prose-sm"
                                            id="disclosure-1">
                                            <ul role="list">
                                                <li>Kode Kamar : {{ $kamar->kode }}</li>

                                                <li>Kategori Kamar : {{ $kamar->cabang->kategori }}</li>

                                                <li>Panjang Kamar : {{ $kamar->panjang }} Meter</li>

                                                <li>Lebar Kamar : {{ $kamar->lebar }} Meter</li>

                                                <li>Status Kamar : {{ $kamar->status }} Sewa</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- More sections... -->
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
<script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('photoGalleryApp', () => ({
                currentPhoto: 0,
                photos: <?php
                echo json_encode($url_gambar); ?>,
                init() {
                    this.changePhoto();
                },
                changePhoto() {
                    this.$refs.mainImage.src = "/storage/" + this.photos[this.currentPhoto];
                },
                pickPhoto(index) {
                    this.currentPhoto = index;
                    this.changePhoto();
                },
            }))
        })
</script>
