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
        {{-- <a href="/" class="{{ request()->is('/') ? 'bg-red-200' : '' }} mr-4 text-blue-700 hover:underline">Home</a> --}}
        {{-- <a href="/about" class="{{ request()->is('about') ? 'bg-red-200' : '' }} mr-4 text-blue-700 hover:underline">About</a> --}}
        {{-- <x-nav.nav-link href="/" :active="true">Home</x-nav.nav-link> --}}
        {{-- <x-nav.nav-link href="/" :active="false">Home</x-nav.nav-link> --}}

        <x-nav.nav-link href="/" :active="request()->is('/')">Home</x-nav.nav-link>
        <x-nav.nav-link href="/about" :active="request()->is('about')">About</x-nav.nav-link>

        <x-nav.nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav.nav-link>
    </nav>

    <header class="bg-gradient-to-r from-red-500 to-pink-500 text-white py-20 flex flex-col items-center justify-center">
        <h1 class="text-5xl font-bold mb-4">{{ $heading }}</h1>
    </header>

    <main>
        {{ $slot }}
    </main>
    </div>
</body>

</html>
