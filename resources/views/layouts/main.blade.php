<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="efaitech_logo.svg" />
    <title>@yield('title', 'EFAITECH SOLUTIONS')</title>
    @vite(['resources/css/app.css'])

    <!-- Alpine.js (CDN) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <header>
        <nav class="bg-gray-900" x-data="{ open: false }">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <!-- Mobile menu button -->
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <button @click="open = !open" type="button"
                            class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white">
                            <span class="sr-only">Open main menu</span>
                            <svg x-show="!open" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg x-show="open" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Logo and Desktop Menu -->
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex shrink-0 items-center">
                            <a href="/">
                                <img class="h-20 w-auto" src="{{ asset('navbar-logo.png') }}" alt="EFAITECH SOLUTIONS">
                            </a>
                        </div>
                        <div class="hidden sm:ml-6 m-5 sm:block">
                            <div class="flex space-x-4">
                                <a href="{{ route(name: 'about') }}"
                                    class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">About</a>
                                <a href="{{ route('services') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Services</a>
                                <a href="{{ route('work') }}"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Work</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="sm:hidden" x-show="open" x-cloak x-transition>
                <div class="space-y-1 px-2 pt-2 pb-3">
                    <a href="{{ route('about') }}"
                        class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">About</a>
                    <a href="{{ route('services') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Services</a>
                    <a href="{{ route('work') }}"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Work</a>
                </div>
            </div>
        </nav>

    </header>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-gray-300 py-6">
        <div class="container mx-auto flex flex-col items-center justify-between px-6 md:flex-row">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <a href="\">
                    <img src="{{ asset('navbar-logo.png') }}" alt="EFAITECH SOLUTIONS" class="h-20 w-auto">
                </a>
            </div>

            <!-- Footer Navigation -->
            <nav class="mt-4 md:mt-0">
                <ul class="flex flex-wrap justify-center gap-6 text-sm">
                    <li><a href="/" class="hover:text-white transition">About</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-white transition">Services</a></li>
                    <li><a href="{{ route('work') }}" class="hover:text-white transition">Work</a></li>
                </ul>
            </nav>

            <!-- Contact Information -->
            <div class="mt-6 text-center md:mt-0 md:text-right">
                <p class="text-lg font-semibold text-white">Contact Us</p>
                <p>
                    <a href="mailto:efrain@efaitechsolutions.com"
                        class="text-text-sky-500 hover:text-sky-300 transition">
                        efrain@efaitechsolutions.com
                    </a>
                </p>
                <p>
                    <a href="tel:+19545463869" class="text-sky-500 hover:text-sky-300 transition">
                        +1 (954) 546-3869
                    </a>
                </p>
                <p>
                    <a href="https://www.google.com/maps/place/7901+4th+St+N+STE:+300,+St.+Petersburg,+FL+33702"
                        target="_blank" class="text-sky-500 hover:text-sky-300 transition">
                        <div>EFAITECH SOLUTIONS</div>
                        <div>7901 4th St N STE 300
                            St. Petersburg, FL 33702</div>
                    </a>
                </p>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center text-gray-500 text-sm mt-4">
            &copy; {{ date('Y') }} EFAITECH SOLUTIONS. All rights reserved.
        </div>
    </footer>

</body>

</html>