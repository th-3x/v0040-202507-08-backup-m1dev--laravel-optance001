<!DOCTYPE html>
<html lang="en" class="h-screen">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullscreen Red Div</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="m-0 p-0 overflow-hidden h-screen bg-gray-100">

    <x-nav.nav />

    <nav class="bg-gray-100 px-6 py-2">
        
        <a href="/" class="{{ request()->is('/') ? 'bg-red-200' : '' }} mr-4 text-blue-700 hover:underline">Home</a>
        <a href="/about" class="{{ request()->is('about') ? 'bg-red-200' : '' }} mr-4 text-blue-700 hover:underline">About</a>
        {{-- <a href="/contact" class="text-blue-700 hover:underline">Contact</a> --}}
    </nav>

    <header>{{ $heading }}</header>

    <main>
        {{ $slot }}
    </main>
    </div>
</body>

</html>
