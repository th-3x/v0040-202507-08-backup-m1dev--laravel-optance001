<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nav test</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <nav class="flex items-center justify-between bg-[#3b6ba5] px-6 py-4 text-white">
        <!-- Logo and nav -->
        <div class="flex items-center space-x-10">
            <!-- Logo -->
            <div class="flex items-center space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6" viewBox="0 0 24 24">
                    <path d="M4 4h16v2H4V4zm0 6h16v2H4v-2zm0 6h10v2H4v-2z" />
                </svg>
                <span class="text-lg font-medium">blognone<span class="ml-1 align-super text-xs">JOBS</span></span>
            </div>

            <!-- Nav Links -->
            <ul class="flex space-x-6 text-sm font-bold uppercase">
                <!-- svelte-ignore a11y_invalid_attribute -->
                <li><a href="#" class="hover:underline">Jobs</a></li>
                <li><a href="#" class="hover:underline">Companies</a></li>
                <li><a href="#" class="hover:underline">For Employers</a></li>
            </ul>
        </div>

        <!-- Login -->
        <div>
            <a href="#" class="text-sm font-bold text-white hover:underline">Login</a>
        </div>
    </nav>

</body>

</html>
