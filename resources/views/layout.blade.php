<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Portfolio' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=poppins:400,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body class="min-h-screen flex flex-col bg-home bg-cover bg-center">
    <!-- Header / Navbar -->
    <header>
        <x-navbar />
    </header>

    <!-- Hauptinhalt -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer wenn komplexer dann Component-->
    <footer class="bg-gray-800 p-4 text-center">
        <div class="flex flex-col sm:flex-row text-blue-500 max-w-xl mx-auto justify-stretch">
            <p class="text-white mx-4">&copy; 2025 Pumo Digital</p>
            <a href="{{ route('impressum') }}" class="mx-4">Impressum</a>
            <a href="{{ route('privacy') }}" class="mx-4">Datenschutzerklärung</a>
        </div> 
    </footer>
</body>
</html>