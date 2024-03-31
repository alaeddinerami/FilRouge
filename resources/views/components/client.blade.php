<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        /* Custom style */
        .header-right {
            width: calc(100% - 3.5rem);
        }

        .sidebar:hover {
            width: 16rem;
        }



        @media only screen and (min-width: 768px) {
            .header-right {
                width: calc(100% - 16rem);
            }
        }
    </style>
</head>

<body>
    <header class="fixed top-0 left-0 w-full bg-gray-800 bg-opacity-70 z-50">
        <nav class="container mx-auto px-6 ">
            <div class="flex items-center justify-between">
                <div class="text-white font-bold text-xl">
                    <a href="">
                        <x-applicationlogo class="w-20 h-14 fill-current text-gray-500" />
                    </a>
                </div>
                <div class="hidden md:block">
                    <ul class="flex items-center space-x-8">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href="{{route('librarys.index')}}" class="text-white">Library</a></li>
                        <li><a href="#" class="text-white">Cafeteria</a></li>
                        <li><a href="#" class="text-white">My place</a></li>
                    </ul>
                </div>
                <!-- Profile Picture Dropdown -->
                <div class="relative" id="profileDropdown">
                    <button class="flex items-center focus:outline-none" id="profileDropdownButton">
                        <img src="/storage/hero.jpg" alt="Profile Picture"
                            class="w-10 h-10 rounded-full object-cover mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white  hidden md:block"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <ul class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10 hidden"
                        id="profileDropdownMenu">
                        <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Settings</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Logout</a></li>
                    </ul>
                </div>
                <!-- End Profile Picture Dropdown -->
                <div class="flex md:hidden">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-white" x-show="!showMenu" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mobile-menu hidden md:hidden">
                <ul class="mt-4 space-y-4">
                    <li><a href="#" class="block px-4 py-2 text-white bg-gray-900 rounded">Home</a></li>
                    <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a></li>
                    <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Settings</a></li>
                    <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Logout</a></li>
                </ul>
            </div>

        </nav>
    </header>
    <main class="h-full ml-3 mt-14 mb-10 mr-3 md:m-8 md:mt-20">
        {{ $slot }}
    </main>
    
    @stack('scripts')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');

            menuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
            const profileDropdown = document.getElementById('profileDropdown');
            const profileDropdownButton = document.getElementById('profileDropdownButton');
            const profileDropdownMenu = document.getElementById('profileDropdownMenu');

            // Open dropdown menu
            profileDropdownButton.addEventListener('click', function(event) {
                event.stopPropagation();
                profileDropdownMenu.classList.toggle('hidden');
            });

            // Close dropdown menu when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInside = profileDropdown.contains(event.target);
                if (!isClickInside) {
                    profileDropdownMenu.classList.add('hidden');
                }
            });
        });

        function toggleAnswer(id) {
            var answer = document.getElementById('answer' + id);
            if (answer.style.display === 'none') {
                answer.style.display = 'block';
            } else {
                answer.style.display = 'none';
            }
        }
    </script>
</body>

</html>
