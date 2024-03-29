<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Akun Bank') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="font-bold text-2xl">
                Tambah Akun Bank
            </h3>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('akunbank.store') }}" class="w-96">
                @csrf
                <div class="mt-5">
                    <x-label for="bank" :value="__('Nama Bank')" />

                    <x-input-form>
                        <x-slot name="icon">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </x-slot>
                        <x-slot name="input">
                            <input type="text" name="bank" id="bank"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full"
                                placeholder="BCA, BRI, Etc">
                        </x-slot>
                    </x-input-form>
                </div>
                <div class="mt-5">
                    <x-label for="an" :value="__('Atas Nama')" />

                    <x-input-form>
                        <x-slot name="icon">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </x-slot>
                        <x-slot name="input">
                            <input type="text" name="an" id="an"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full"
                                placeholder="Mr.">
                        </x-slot>
                    </x-input-form>
                </div>
                <div class="mt-5">
                    <x-label for="norek" :value="__('Nomor Rekening')" />

                    <x-input-form>
                        <x-slot name="icon">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </x-slot>
                        <x-slot name="input">
                            <input type="number" name="norek" id="norek"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-full"
                                placeholder="xxxx-xxxxx-xxx">
                        </x-slot>
                    </x-input-form>
                </div>
                <div class="flex justify-between mt-5">
                    <a href="{{ route('transaksi.index') }}"
                        class="bg-gray-300 hover:bg-gray-600 text-black hover:text-blue-300 uppercase text-center font-bold py-3 px-3 rounded-md">Cencel</a>
                    <x-button-form class="ml-4">
                        {{ __('Submit') }}
                    </x-button-form>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
