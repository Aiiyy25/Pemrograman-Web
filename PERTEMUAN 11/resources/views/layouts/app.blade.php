<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Siura Coffee & Eatery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="font-sans bg-gray-100">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full bg-blue-900/80 text-white px-6 py-4 flex justify-between items-center z-50">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="h-10 w-10 rounded-full shadow">
            <a href="{{ route('home') }}" class="font-bold text-lg">Siura Coffee</a>
        </div>
        <div class="space-x-6 hidden sm:flex">
            <a href="{{ route('profil') }}" class="hover:text-yellow-300 {{ request()->routeIs('profil') ? 'text-yellow-300' : '' }}">Profil</a>
            <a href="{{ route('menu') }}" class="hover:text-yellow-300 {{ request()->routeIs('menu') ? 'text-yellow-300' : '' }}">Menu</a>
            <a href="{{ route('keranjang') }}" class="hover:text-yellow-300 {{ request()->routeIs('keranjang') ? 'text-yellow-300' : '' }}">Keranjang 🛒</a>
        </div>
        
        <!-- Mobile Menu Button -->
        <div class="sm:hidden">
            <button id="mobileMenuButton" class="text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="sm:hidden fixed top-16 left-0 w-full bg-blue-900 text-white hidden z-40">
        <div class="flex flex-col p-4 space-y-4">
            <a href="{{ route('profil') }}" class="hover:text-yellow-300 {{ request()->routeIs('profil') ? 'text-yellow-300' : '' }}">Profil</a>
            <a href="{{ route('menu') }}" class="hover:text-yellow-300 {{ request()->routeIs('menu') ? 'text-yellow-300' : '' }}">Menu</a>
            <a href="{{ route('keranjang') }}" class="hover:text-yellow-300 {{ request()->routeIs('keranjang') ? 'text-yellow-300' : '' }}">Keranjang 🛒</a>
        </div>
    </div>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-8 mt-16">
        <div class="container mx-auto px-6 text-center">
            <div class="flex justify-center space-x-6 mb-4">
                <a href="https://instagram.com/siura.id" target="_blank" class="hover:text-yellow-300">
                    Instagram
                </a>
                <a href="https://maps.google.com/?q=Siura+Coffee+Eatery" target="_blank" class="hover:text-yellow-300">
                    Lokasi
                </a>
            </div>
            <p>&copy; {{ date('Y') }} Siura Coffee & Eatery. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        // Mobile Menu Toggle
        document.getElementById('mobileMenuButton').addEventListener('click', function() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('mobileMenu');
            const button = document.getElementById('mobileMenuButton');
            
            if (!menu.contains(event.target) && !button.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });
    </script>
    
    @yield('scripts')
</body>
</html>