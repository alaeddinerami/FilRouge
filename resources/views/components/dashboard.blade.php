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
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/LogoutButton.js'])


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
    <div>
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white text-black">

            <!-- Header -->
            <div class="fixed bg-blue-800 w-full flex items-center justify-between h-14 text-white px-4 z-10">
                <a href="">

                    <x-applicationlogo class="block h-9 w-auto fill-current text-white" />
                </a>
                <div class=" flex items-center justify-center">
                    <div class="relative group">
                        <button id="dropdown-button"
                            class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-blue-900   rounded-md shadow-sm ">
                            <span class="mr-2 text-white">{{ Auth::user()->name }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 -mr-1 text-white"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M6.293 9.293a1 1 0 011.414 0L10 11.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="dropdown-menu"
                            class=" absolute px-3  right-0 mt-2 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 p-1 space-y-1">
                            <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                                @csrf
                                {{-- <a href="#" onclick="document.getElementById('logoutForm').submit()"
                                    class="block px-4 p-1 text-gray-700 hover:bg-gray-100  active:bg-blue-100 cursor-pointer rounded-md">Logout</a> --}}
                                <button
                                    class="block px-4 p-1 text-gray-700 hover:bg-gray-100  active:bg-blue-100 cursor-pointer rounded-md">logout</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
            <!-- ./Header -->

            <!-- Sidebar -->
            <div
                class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
                <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                    <ul class="flex flex-col py-4 space-y-1">
                        <li class="px-5 hidden md:block">
                            <div class="flex flex-row items-center h-8">
                                <div class="text-sm font-light tracking-wide text-white uppercase"></div>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                        </path>



                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                            </a>
                        </li>
                        <li class="px-5 hidden md:block ">
                            <hr class="border-[1.2px] rounded-full">
                        </li>

                        <li>
                            <a href="{{ route('room.index') }}"
                                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.0" id="Layer_1" class=" w-5 h-5" viewBox="0 0 64 64"
                                        enable-background="new 0 0 64 64" xml:space="preserve">

                                        <g>
                                            <path fill="#ffffff"
                                                d="M18,10v54h9V53c0-0.553,0.447-1,1-1h8c0.553,0,1,0.447,1,1v11h9V20V4c0-2.211-1.789-4-4-4H22   c-2.211,0-4,1.789-4,4V10z M34,9c0-0.553,0.447-1,1-1h4c0.553,0,1,0.447,1,1v4c0,0.553-0.447,1-1,1h-4c-0.553,0-1-0.447-1-1V9z    M34,19c0-0.553,0.447-1,1-1h4c0.553,0,1,0.447,1,1v4c0,0.553-0.447,1-1,1h-4c-0.553,0-1-0.447-1-1V19z M34,29c0-0.553,0.447-1,1-1   h4c0.553,0,1,0.447,1,1v4c0,0.553-0.447,1-1,1h-4c-0.553,0-1-0.447-1-1V29z M34,39c0-0.553,0.447-1,1-1h4c0.553,0,1,0.447,1,1v4   c0,0.553-0.447,1-1,1h-4c-0.553,0-1-0.447-1-1V39z M24,9c0-0.553,0.447-1,1-1h4c0.553,0,1,0.447,1,1v4c0,0.553-0.447,1-1,1h-4   c-0.553,0-1-0.447-1-1V9z M24,19c0-0.553,0.447-1,1-1h4c0.553,0,1,0.447,1,1v4c0,0.553-0.447,1-1,1h-4c-0.553,0-1-0.447-1-1V19z    M24,29c0-0.553,0.447-1,1-1h4c0.553,0,1,0.447,1,1v4c0,0.553-0.447,1-1,1h-4c-0.553,0-1-0.447-1-1V29z M24,39c0-0.553,0.447-1,1-1   h4c0.553,0,1,0.447,1,1v4c0,0.553-0.447,1-1,1h-4c-0.553,0-1-0.447-1-1V39z" />
                                            <rect x="26" y="30" fill="#ffffff" width="2" height="2" />
                                            <rect x="26" y="40" fill="#ffffff" width="2" height="2" />
                                            <rect x="29" y="54" fill="#ffffff" width="6" height="10" />
                                            <rect x="8" y="50" fill="#ffffff" width="2" height="2" />
                                            <rect x="26" y="10" fill="#ffffff" width="2" height="2" />
                                            <rect x="26" y="20" fill="#ffffff" width="2" height="2" />
                                            <rect x="36" y="20" fill="#ffffff" width="2" height="2" />
                                            <rect x="36" y="10" fill="#ffffff" width="2" height="2" />
                                            <rect x="36" y="30" fill="#ffffff" width="2" height="2" />
                                            <rect x="36" y="40" fill="#ffffff" width="2" height="2" />
                                            <rect x="8" y="40" fill="#ffffff" width="2" height="2" />
                                            <path fill="#ffffff"
                                                d="M16,10H4c-2.211,0-4,1.789-4,4v46c0,2.211,1.789,4,4,4h12V10z M12,53c0,0.553-0.447,1-1,1H7   c-0.553,0-1-0.447-1-1v-4c0-0.553,0.447-1,1-1h4c0.553,0,1,0.447,1,1V53z M12,43c0,0.553-0.447,1-1,1H7c-0.553,0-1-0.447-1-1v-4   c0-0.553,0.447-1,1-1h4c0.553,0,1,0.447,1,1V43z M12,33c0,0.553-0.447,1-1,1H7c-0.553,0-1-0.447-1-1v-4c0-0.553,0.447-1,1-1h4   c0.553,0,1,0.447,1,1V33z M11,24H7c-0.553,0-1-0.447-1-1v-4c0-0.553,0.447-1,1-1h4c0.553,0,1,0.447,1,1v4   C12,23.553,11.553,24,11,24z" />
                                            <rect x="54" y="50" fill="#ffffff" width="2" height="2" />
                                            <rect x="54" y="40" fill="#ffffff" width="2" height="2" />
                                            <rect x="54" y="30" fill="#ffffff" width="2" height="2" />
                                            <path fill="#ffffff"
                                                d="M60,20H48v44h12c2.211,0,4-1.789,4-4V24C64,21.789,62.211,20,60,20z M58,53c0,0.553-0.447,1-1,1h-4   c-0.553,0-1-0.447-1-1v-4c0-0.553,0.447-1,1-1h4c0.553,0,1,0.447,1,1V53z M58,43c0,0.553-0.447,1-1,1h-4c-0.553,0-1-0.447-1-1v-4   c0-0.553,0.447-1,1-1h4c0.553,0,1,0.447,1,1V43z M58,33c0,0.553-0.447,1-1,1h-4c-0.553,0-1-0.447-1-1v-4c0-0.553,0.447-1,1-1h4   c0.553,0,1,0.447,1,1V33z" />
                                            <rect x="8" y="30" fill="#ffffff" width="2" height="2" />
                                            <rect x="8" y="20" fill="#ffffff" width="2" height="2" />
                                        </g>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">gestion des chambres</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('meal.index') }}"
                                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="_x32_"
                                        viewBox="0 0 512 512" xml:space="preserve">
                                        <style type="text/css">
                                            .st0 {
                                                fill: #ffffff;
                                            }
                                        </style>
                                        <g>
                                            <path class="st0"
                                                d="M249.705,184.735c-19.705,0.01-37.458,7.964-50.394,20.87c-12.906,12.936-20.86,30.69-20.87,50.394   c0.01,19.706,7.964,37.458,20.87,50.394c12.936,12.906,30.69,20.86,50.394,20.87c19.706-0.01,37.458-7.964,50.394-20.87   c12.906-12.936,20.86-30.689,20.87-50.394c-0.01-19.705-7.964-37.458-20.87-50.394C287.163,192.699,269.41,184.745,249.705,184.735   z" />
                                            <path class="st0"
                                                d="M249.705,108.488c-81.462,0-147.512,66.05-147.512,147.512c0,81.462,66.049,147.512,147.512,147.512   c81.472,0,147.512-66.05,147.512-147.512C397.217,174.538,331.177,108.488,249.705,108.488z M249.705,347.155   c-50.346-0.01-91.144-40.809-91.154-91.154c0.01-50.346,40.808-91.144,91.154-91.154c50.346,0.01,91.144,40.809,91.154,91.154   C340.849,306.346,300.05,347.145,249.705,347.155z" />
                                            <path class="st0"
                                                d="M21.915,172.576C4.075,234.032,0.307,272.782,0.307,272.782s-1.942,23.58,3.943,23.58   c5.876,0,20.443,0,20.443,0v85.464c0,9.216,7.488,16.704,16.704,16.704h12.946c9.216,0,16.704-7.488,16.704-16.704V139.148   C71.048,115.568,39.601,111.655,21.915,172.576z" />
                                            <path class="st0"
                                                d="M497.908,126.057h-0.039c-5.604,0-6.167,4.545-6.167,10.149v64.69h-16.248v-64.69   c0-5.604-4.545-10.149-10.149-10.149s-10.149,4.545-10.149,10.149v64.69h-19.074v-64.69c0-5.604-0.563-10.149-6.167-10.149h-0.038   c-7.779,0-14.092,6.313-14.092,14.092v60.747c0,26.105,6.808,33.117,13.674,39.983c7.459,7.459,11.256,9.945,11.256,18.647   c0,8.702,0,36.836,0,36.836v85.464c0,9.216,7.489,16.704,16.704,16.704h12.946c9.216,0,16.704-7.488,16.704-16.704v-122.3   c0-8.702,3.797-11.188,11.256-18.647c6.866-6.866,13.674-13.878,13.674-39.983v-60.747C512,132.37,505.687,126.057,497.908,126.057   z" />
                                        </g>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Gestion des repas</span>

                            </a>
                        </li>
                        <li>
                            <a href="{{ route('student.index') }}"
                                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" class="w-5 h-5"
                                        viewBox="0 0 32 32" id="icon">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: none;
                                                }
                                            </style>
                                        </defs>
                                        <title>events</title>
                                        <path
                                            d="M26,14H24v2h2a3.0033,3.0033,0,0,1,3,3v4h2V19A5.0058,5.0058,0,0,0,26,14Z"
                                            transform="translate(0 0)" />
                                        <path d="M24,4a3,3,0,1,1-3,3,3,3,0,0,1,3-3m0-2a5,5,0,1,0,5,5A5,5,0,0,0,24,2Z"
                                            transform="translate(0 0)" />
                                        <path
                                            d="M23,30H21V28a3.0033,3.0033,0,0,0-3-3H14a3.0033,3.0033,0,0,0-3,3v2H9V28a5.0059,5.0059,0,0,1,5-5h4a5.0059,5.0059,0,0,1,5,5Z"
                                            transform="translate(0 0)" />
                                        <path d="M16,13a3,3,0,1,1-3,3,3,3,0,0,1,3-3m0-2a5,5,0,1,0,5,5A5,5,0,0,0,16,11Z"
                                            transform="translate(0 0)" />
                                        <path d="M8,14H6a5.0059,5.0059,0,0,0-5,5v4H3V19a3.0033,3.0033,0,0,1,3-3H8Z"
                                            transform="translate(0 0)" />
                                        <path d="M8,4A3,3,0,1,1,5,7,3,3,0,0,1,8,4M8,2a5,5,0,1,0,5,5A5,5,0,0,0,8,2Z"
                                            transform="translate(0 0)" />
                                        <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;"
                                            class="cls-1" width="32" height="32" />
                                    </svg>

                                    <g id="User / Users_Group">
                                        <path id="Vector"
                                            d="M17 20C17 18.3431 14.7614 17 12 17C9.23858 17 7 18.3431 7 20M21 17.0004C21 15.7702 19.7659 14.7129 18 14.25M3 17.0004C3 15.7702 4.2341 14.7129 6 14.25M18 10.2361C18.6137 9.68679 19 8.8885 19 8C19 6.34315 17.6569 5 16 5C15.2316 5 14.5308 5.28885 14 5.76389M6 10.2361C5.38625 9.68679 5 8.8885 5 8C5 6.34315 6.34315 5 8 5C8.76835 5 9.46924 5.28885 10 5.76389M12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11C15 12.6569 13.6569 14 12 14Z"
                                            stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">gérer les utilisateurs </span>

                            </a>
                        </li>
                        <li>
                            <a href="{{ route('allReservation') }}"
                                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 192 192"
                                        fill="#ffffff">
                                        <defs>
                                            <linearGradient id="a" x1="16" x2="176"
                                                y1="96" y2="96" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" />
                                            </linearGradient>
                                        </defs>
                                        <path stroke="url(#a)" stroke-linejoin="round" stroke-width="12"
                                            d="M75.984 145.016H50.841V115.31c0-6.33 2.465-9.74 7.986-10.422h17.256a18.873 18.873 0 0 1 14.81 5.373 18.378 18.378 0 0 1 5.403 14.643c0 12.662-7.74 20.21-20.213 20.21zM50.791 64.71v-7.792c0-6.818 2.958-10.13 9.368-10.52h12.916c11.044 0 17.749 6.527 17.749 17.533 0 8.279-4.536 18.019-17.256 18.019H50.89Zm57.387 29.707-4.536-2.532 3.944-3.41c4.634-3.895 12.325-12.759 12.325-28.002C119.91 37.097 101.57 22 73.223 22h-35.99C28.79 22.286 22.075 29.093 22 37.438v132.464h51.864c31.552 0 51.865-16.947 51.865-43.246 0-14.122-6.557-26.297-17.65-32.385" />
                                        <ellipse cx="151.94" cy="152.17" fill="#fffffff" stroke="#fffffff"
                                            stroke-linejoin="round" stroke-width="8" rx="11.805"
                                            ry="11.707" />
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">gérer les Reservations </span>

                            </a>
                        </li>
                    </ul>
                    <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2024</p>
                </div>
            </div>
            <!-- ./Sidebar -->

            <main class="h-full ml-14 mt-14 mb-10 mr-3 md:ml-64">
                {{ $slot }}
            </main>
        </div>
    </div>
    
    @stack('scripts')
</body>

</html>
