<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="/img/logo3.png">
        <title>{{ config('SublimeFire', 'SublimeFire') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100" x-data="{cart:false}">
            @livewire('nav')



            <!-- Page Content -->
            <main class="bg-gradient-to-b from-gray-800 to-white">
                @livewire('carrito-index')
                {{ $slot }}
            </main>
        </div>
        @livewire('footer')

        @stack('modals')

        @livewireScripts

    </body>
</html>
