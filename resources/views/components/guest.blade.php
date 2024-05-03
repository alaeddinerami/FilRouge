<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .bg-custom {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/storage/hero.jpg');
        }
    </style>
</head>

<body class="font-sans  text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col justify-center items-center bg-cover bg-no-repeat  sm:pt-0 bg-custom">
        <div class="">
            <a href="/">
                <x-applicationlogo class="w-40 h-30 fill-current text-gray-500" />
            </a>
        </div>

        <div class=" w-5/6 sm:max-w-md mt-6 px-6 py-4 bg-blue-100 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
    
</body>

</html>
