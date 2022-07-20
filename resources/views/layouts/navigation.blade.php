    <nav x-data="{ open: false }" class="bg-gray-100 border-b border-gray-200">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard.index') }}">
                            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                        </a>
                    </div>
                    <div class="flex items-center px-4 text-xl font-bold">
                        <a href="{{ route('dashboard.index') }}">
                            AL-Barokah
                        </a>
                    </div>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown-badge class="flex items-center" width="48">
                        <x-slot name="trigger" class="relative inline-block">
                            <svg class="w-6 h-6 text-sm font-medium text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span
                                class="absolute top-0 right-0 inline-flex items-center justify-center mr-6 px-2 py-1 text-xs font-semibold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-blue-600 rounded-full">69</span>
                        </x-slot>
                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown-badge>
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:flex max-w-7xl mx-auto px-6 sm:px-6 lg:px-8">
            <div class="justify-between h-16">
                <div class="flex">
                     <!-- Navigation Links Penyewa-->
                    @if (Auth::user()->hasRole('penyewa') )
                    <div class="py-3 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="w-6 h-7 text-gray-700" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <x-nav-link :href="route('dashboard.index')" :active="request()->routeIs('dashboard.*')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </div>
                    <div class="py-3 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="w-6 h-7 text-gray-700" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                            </svg>
                        </div>
                        <x-nav-link :href="route('kamar.index')" :active="request()->routeIs('kamar.*')">
                            {{ __('Kamar') }}
                        </x-nav-link>
                    </div>
                    <div class="py-3 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="w-6 h-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                        </div>
                        <x-nav-link :href="route('transaksi.index')" :active="request()->routeIs('transaksi.*')">
                            {{ __('Pembayaran') }}
                        </x-nav-link>
                    </div>
                    <div class="py-3 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="w-6 h-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <x-nav-link :href="route('kontak.index')" :active="request()->routeIs('kontak.*')">
                            {{ __('Kontak') }}
                        </x-nav-link>
                    </div>
                    @endif
                    <!-- End Navigation Links Penyewa-->


                    <!-- Navigation Links Pemilik-->
                    @if (Auth::user()->hasRole('pemilik') )
                    <div class="py-3 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="w-6 h-7 text-gray-700" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <x-nav-link :href="route('dashboardadmin.index')" :active="request()->routeIs('dashboardadmin.*')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </div>
                    <div class="py-3 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="w-6 h-7 text-gray-700" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                            </svg>
                        </div>
                        <x-nav-link :href="route('kamar.index')" :active="request()->routeIs('kamar.*')">
                            {{ __('Kamar') }}
                        </x-nav-link>
                    </div>
                    <div class="py-3 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="w-6 h-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                        </div>
                        <x-nav-link :href="route('transaksi.index')" :active="request()->routeIs('transaksi.*')">
                            {{ __('Pembayaran') }}
                        </x-nav-link>
                    </div>
                    <div class="py-3 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="w-6 h-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <x-nav-link :href="route('kontak.index')" :active="request()->routeIs('kontak.*')">
                            {{ __('Kontak') }}
                        </x-nav-link>
                    </div>
                    @endif
                    <!-- End Navigation Links Pemilik-->
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            {{-- Pemilik Menu Mobile --}}
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboardadmin.index')" :active="request()->routeIs('dashboard.*')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>
            <div class="relative inline-block pt-2 pb-3 space-y-1">
                <x-responsive-nav-link class="mr-2" :href="route('notifikasi.index')"
                    :active="request()->routeIs('notifikasi.*')">
                    {{ __('Notifikasi') }}
                </x-responsive-nav-link>
                <span
                    class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform bg-blue-600 rounded-full">99</span>
            </div>
            {{-- End Pemilik Menu Mobile --}}


            {{-- Penyewa menu Mobile --}}
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard.index')" :active="request()->routeIs('dashboard.*')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>
            <div class="relative inline-block pt-2 pb-3 space-y-1">
                <x-responsive-nav-link class="mr-2" :href="route('notifikasi.index')"
                    :active="request()->routeIs('notifikasi.*')">
                    {{ __('Notifikasi') }}
                </x-responsive-nav-link>
                <span
                    class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform bg-blue-600 rounded-full">99</span>
            </div>
            {{-- End Penyewa menu Mobile --}}
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </nav>
