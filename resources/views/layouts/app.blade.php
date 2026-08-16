<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'EduSpace-lms Dasturi')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <header class="bg-white shadow-sm sticky top-0 z-50" x-data="{ open: false }">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="shrink-0">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">
                       EduSpace-lms
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('home') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:text-blue-600' }}">
                        Bosh sahifa
                    </a>
               <
               <a href="{{ route('about') }}" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('about') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:text-blue-600' }}">
                        Biz haqimizda
                    </a>
                   
                   
                    <a href="/contact" class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('contact') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:text-blue-600' }}">
                        Aloqa
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button @click="open = !open" class="text-gray-600 hover:text-blue-600 p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div x-show="open" class="md:hidden pb-3">
                <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'bg-blue-50 text-blue-600' : 'text-gray-600' }}">
                    Bosh sahifa
                </a>
                <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'bg-blue-50 text-blue-600' : 'text-gray-600' }}">
                    Biz haqimizda
                </a>
                <a href="/services" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('services') ? 'bg-blue-50 text-blue-600' : 'text-gray-600' }}">
                    Xizmatlar
                </a>
                <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('contact') ? 'bg-blue-50 text-blue-600' : 'text-gray-600' }}">
                    Aloqa
                </a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-auto">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-gray-400">&copy; {{ date('Y') }} LML. Barcha huquqlar himoyalangan.</p>
            </div>
        </div>
    </footer>
</body>
</html>