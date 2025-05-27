<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Coming Soon</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="relative flex h-screen items-center justify-center bg-gradient-to-br from-black via-gray-900 to-black">

    <!-- Ambient soft glow -->
    <div class="blur-circle"></div>

    <!-- Main Content -->
    <div class="z-10 space-y-6 px-6 text-center">
        <h1 class="soft-glow text-4xl font-semibold tracking-tight text-white md:text-6xl">
            Almost Ready
        </h1>
        <p class="mx-auto max-w-xl text-base leading-relaxed text-gray-400 md:text-lg">
            We're crafting something clean, fast, and powerful. Hold tight while the system finishes booting up.
        </p>

        <div>
            <p class="text-sm text-gray-500">
                Want to know who's behind the tech?
                <a href="https://mengwi-badung.desa.id" target="_blank"
                    class="text-mint-400 hover:text-mint-300 ml-1 transition duration-300 hover:underline">
                    Visit Pemerintah Desa Mengwi →
                </a>
            </p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="absolute bottom-6 z-10 w-full text-center text-xs text-gray-600">
        &copy; {{ date('Y') }} mengwidev, Part of <a href="https://mengwi-badung.desa.id" target="_blank"
            class="text-mint-400 hover:text-mint-300 ml-1 transition duration-300 hover:underline">
            Pemerintah Desa Mengwi
        </a>
    </footer>

</body>

</html>
