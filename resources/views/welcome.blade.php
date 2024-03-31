<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- Styles -->
    <style>
        .bg-custom {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/storage/hero.jpg');
        }
    </style>
</head>

<body class=" bg-gray-100 h-screen ">

    <header class="fixed top-0 left-0 w-full bg-gray-800 bg-opacity-70 z-50">
        <nav class="container mx-auto px-6 ">
            <div class="flex items-center justify-between">
                <div class="text-white font-bold text-xl">
                    <a href="/">
                        <x-applicationlogo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                </div>
                <div class="hidden md:block">
                    <ul class="flex items-center space-x-8">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href=" {{route('login.index')}} "
                                class="font-semibold text-gray-200 hover:text-gray-900 border p-2 border-white dark:text-gray-200 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a></li>
                        <li><a href="{{route('register.index')}}"
                                class="ml-4 font-semibold text-gray-200 border p-2 border-white hover:text-gray-900 dark:text-gray-200 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        </li>

                    </ul>
                </div>
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
                    <li><a href="
                        {{route('login.index')}}
                        " class="block px-4 py-2 text-white bg-gray-900 rounded">Log in </a></li>
                    <li><a href="
                        {{route('register.index')}}
                        " class="block px-4 py-2 text-white bg-gray-900 rounded">Register</a></li>

                </ul>
            </div>

        </nav>
    </header>
    <div class=" h-3/5 bg-cover bg-custom bg-center bg-no-repeat">
        <div class="flex justify-center  items-center h-full">
            <div class="col-span-6 text-white text-center">
                <h1 class="font-extrabold text-3xl md:text-5xl mb-8">Discover Your New Home</h1>
                <p class="text-xl md:text-2xl mb-10">
                    Helping thousands of students find their perfect fit.
                </p>
            </div>
        </div>
    </div>

    <main class="m-10  ">
        <section class=" ">

            <div class=" w-full bg-gray-200 p-8 rounded-lg flex flex-col md:flex-row items-center gap-4">
                <img class="w-full md:w-1/2  rounded-lg " src="/storage/hero.jpg" alt="">

                <div class="w-full md:w-1/2">
                    <h1 class="md:text-3xl text-center font-semibold mb-5">This is One Hand®️ Safi</h1>
                    <p class="text-center mt-4">Located in the heart of downtown Safi, One hand®️ Safi is the city's
                        most
                        innovative student accommodation.</p>

                    <p class="text-center mt-4">Conveniently situated near Youcode and other educational institutions,
                        One
                        hand®️ Safi offers a premier student living experience. Enjoy modern amenities, comfortable
                        accommodations, and a vibrant community atmosphere, all within a secure environment. Whether
                        you're
                        a domestic or international student, One hand®️ Safi provides the ideal setting for your
                        academic
                        journey. Join us and experience urban living at its finest.</p>
                </div>
            </div>
        </section>
        <section class="mt-7">
            <h2 class="font-bold text-center text-xl md:text-3xl mb-8">Student Comments</h2>
            <div class=" flex justify-around">
                <div class="flex items-center justify-center">
                    <div class="max-w-lg w-full bg-gray-200 p-6 rounded-lg">
                        <div class="flex items-center gap-4">
                            <img class="w-12 h-12 rounded-full" src="/storage/hero.jpg" alt="Student Image">
                            <div>
                                <p class="font-semibold">John Doe</p>
                                <p class="text-gray-600">March 22, 2024</p>
                            </div>
                        </div>
                        <p class="mt-4">I love living at One Hand®️ Safi! The facilities are top-notch and the
                            community is amazing.</p>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div class="max-w-lg w-full bg-gray-200 p-6 rounded-lg">
                        <div class="flex items-center gap-4">
                            <img class="w-12 h-12 rounded-full" src="/storage/hero.jpg" alt="Student Image">
                            <div>
                                <p class="font-semibold">John Doe</p>
                                <p class="text-gray-600">March 22, 2024</p>
                            </div>
                        </div>
                        <p class="mt-4">I love living at One Hand®️ Safi! The facilities are top-notch and the
                            community is amazing.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-7">
            <h2 class="font-bold text-center text-xl md:text-3xl mb-8">FAQs</h2>

            <div class="bg-white mx-auto p-6">
                <div class="mb-4">
                    <div class="flex items-center justify-between bg-gray-200 pl-3 pr-2 py-3 w-full rounded text-gray-600 font-bold cursor-pointer hover:bg-gray-300"
                        onclick="toggleAnswer(1)">
                        Lorem ipsum dolor sit amet?
                        <span class="h-6 w-6 flex items-center justify-center text-teal-500">
                            <svg class="w-3 h-3 fill-current" viewBox="0 -192 469.33333 469"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m437.332031.167969h-405.332031c-17.664062 0-32 14.335937-32 32v21.332031c0 17.664062 14.335938 32 32 32h405.332031c17.664063 0 32-14.335938 32-32v-21.332031c0-17.664063-14.335937-32-32-32zm0 0" />
                            </svg>
                        </span>
                    </div>
                    <div class="p-3" id="answer1" style="display: none;">
                        <p class="text-gray-600 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Pellentesque sed nulla porttitor, porttitor arcu ut, dictum augue. Vestibulum consequat in
                            urna in bibendum. Praesent sed magna risus. Nunc elementum in mauris ac pharetra. Ut blandit
                            ut lorem sit amet rutrum. Vivamus ut purus fringilla, euismod nibh ut, blandit.</p>
                        <p class="text-gray-600">Nunc ac efficitur sapien. Mauris eu lectus odio. Mauris ac erat tortor.
                            Nulla consectetur commodo justo. Pellentesque eget ornare quam. Pellentesque sodales metus
                            non semper luctus. Praesent non ornare tellus, eget vulputate tellus. Donec luctus non
                            sapien sed semper.</p>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex items-center justify-between bg-gray-200 pl-3 pr-2 py-3 w-full rounded text-gray-600 font-bold cursor-pointer hover:bg-gray-300"
                        onclick="toggleAnswer(2)">
                        Lorem ipsum dolor sit amet?
                        <span class="h-6 w-6 flex items-center justify-center text-teal-500">
                            <svg class="w-3 h-3 fill-current" viewBox="0 -192 469.33333 469"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m437.332031.167969h-405.332031c-17.664062 0-32 14.335937-32 32v21.332031c0 17.664062 14.335938 32 32 32h405.332031c17.664063 0 32-14.335938 32-32v-21.332031c0-17.664063-14.335937-32-32-32zm0 0" />
                            </svg>
                        </span>
                    </div>
                    <div class="p-3" id="answer2" style="display: none;">
                        <p class="text-gray-600 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Pellentesque sed nulla porttitor, porttitor arcu ut, dictum augue. Vestibulum consequat in
                            urna in bibendum. Praesent sed magna risus. Nunc elementum in mauris ac pharetra. Ut blandit
                            ut lorem sit amet rutrum. Vivamus ut purus fringilla, euismod nibh ut, blandit.</p>
                        <p class="text-gray-600">Nunc ac efficitur sapien. Mauris eu lectus odio. Mauris ac erat tortor.
                            Nulla consectetur commodo justo. Pellentesque eget ornare quam. Pellentesque sodales metus
                            non semper luctus. Praesent non ornare tellus, eget vulputate tellus. Donec luctus non
                            sapien sed semper.</p>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex items-center justify-between bg-gray-200 pl-3 pr-2 py-3 w-full rounded text-gray-600 font-bold cursor-pointer hover:bg-gray-300"
                        onclick="toggleAnswer(3)">
                        Lorem ipsum dolor sit amet?
                        <span class="h-6 w-6 flex items-center justify-center text-teal-500">
                            <svg class="w-3 h-3 fill-current" viewBox="0 -192 469.33333 469"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m437.332031.167969h-405.332031c-17.664062 0-32 14.335937-32 32v21.332031c0 17.664062 14.335938 32 32 32h405.332031c17.664063 0 32-14.335938 32-32v-21.332031c0-17.664063-14.335937-32-32-32zm0 0" />
                            </svg>
                        </span>
                    </div>
                    <div class="p-3" id="answer3" style="display: none;">
                        <p class="text-gray-600 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Pellentesque sed nulla porttitor, porttitor arcu ut, dictum augue. Vestibulum consequat in
                            urna in bibendum. Praesent sed magna risus. Nunc elementum in mauris ac pharetra. Ut blandit
                            ut lorem sit amet rutrum. Vivamus ut purus fringilla, euismod nibh ut, blandit.</p>
                        <p class="text-gray-600">Nunc ac efficitur sapien. Mauris eu lectus odio. Mauris ac erat tortor.
                            Nulla consectetur commodo justo. Pellentesque eget ornare quam. Pellentesque sodales metus
                            non semper luctus. Praesent non ornare tellus, eget vulputate tellus. Donec luctus non
                            sapien sed semper.</p>
                    </div>
                </div>
                <!-- Additional FAQs... -->
            </div>
        </section>

    </main>

    <footer class="bg-gray-800 py-12 px-16 font-[sans-serif]">
        <div class="flex justify-evenly flex-wrap gap-8">

            <div>
                <h2 class="text-white text-lg font-bold mb-4">Follow Us</h2>
                <ul class="space-y-3">
                    <li>
                        <a href="javascript:void(0)"
                            class="text-gray-400 hover:text-white text-base transition-all">Github</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="text-gray-400 hover:text-white text-base transition-all">linkedin</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="text-gray-400 hover:text-white text-base transition-all">Twitter</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="text-white text-lg font-bold mb-4">Company</h2>
                <ul class="space-y-3">
                    <li>
                        <a href="javascript:void(0)"
                            class="text-gray-400 hover:text-white text-base transition-all">About</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="text-gray-400 hover:text-white text-base transition-all">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="text-gray-400 hover:text-white text-base transition-all">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center lg:justify-center">
                <a href='javascript:void(0)'><img src="https://readymadeui.com/readymadeui-light.svg" alt="logo"
                        class='w-60' /></a>
            </div>
        </div>
        <hr class="my-8 border-gray-700" />
        <div class="sm:flex sm:items-center md:justify-center sm:justify-between sm:flex-row">
            <p class='text-gray-400 text-sm sm:order-1'>© 202<a href='https://readymadeui.com/' target='_blank'
                    class="hover:underline mx-1">ReadymadeUI</a>All Rights Reserved.
            </p>

        </div>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');

            menuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
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
