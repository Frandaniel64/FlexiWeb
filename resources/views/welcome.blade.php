<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Laravel App</title>

    <!-- Fonts & Styles -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            
            <!-- Logo -->
            <div class="flex lg:flex-1">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Logo">
                </a>
            </div>

            <!-- Menu -->
            <div class="hidden lg:flex lg:gap-x-12">
                {{-- <livewire:product-menu /> --}}
                <a href="#" class="text-sm font-semibold text-gray-900">Features</a>
                <a href="#" class="text-sm font-semibold text-gray-900">Marketplace</a>
                <a href="#" class="text-sm font-semibold text-gray-900">Company</a>
            </div>

            <!-- User Authentication Status -->
            <div class="lg:flex lg:flex-1 lg:justify-end">
                @auth
                    <div class="flex items-center space-x-4">
                        @if(Auth::user()->avatar) <!-- Si el usuario tiene una imagen de avatar -->
                            <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="w-8 h-8 rounded-full">
                        @endif
                        <span class="text-sm font-semibold text-gray-900">{{ Auth::user()->name }}</span>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
                @endauth
            </div>
        </nav>
    </header>

    <main>
        <!-- Contenido principal de la página -->
    </main>

    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        <!-- Footer content -->
    </footer>

    @livewireScripts
</body>
</html>
