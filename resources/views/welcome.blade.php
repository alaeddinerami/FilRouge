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
                        <x-applicationlogo class="w-20 h-14 fill-current text-gray-500" />
                    </a>
                </div>
                <div class="hidden md:block">
                    <ul class="flex items-center space-x-8">
                        @auth
                            <li><a href="#" class="text-white">Home</a></li>
                        @else
                            <li><a href=" {{ route('login.index') }} "
                                    class="font-semibold text-gray-200 hover:text-gray-900 border p-2 border-white dark:text-gray-200 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                    in</a></li>
                            <li><a href="{{ route('register.index') }}"
                                    class=" font-semibold text-gray-200 border p-2 border-white hover:text-gray-900 dark:text-gray-200 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            </li>
                        </ul>
                    @endauth
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
                        {{ route('login.index') }}
                        "
                            class="block px-4 py-2 text-white bg-gray-900 rounded">Log in </a></li>
                    <li><a href="
                        {{ route('register.index') }}
                        "
                            class="block px-4 py-2 text-white bg-gray-900 rounded">Register</a></li>

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
                        <p class="text-gray-600">Nunc ac efficitur sapien. Mauris eu lectus odio. Mauris ac erat
                            tortor.
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
                        <p class="text-gray-600">Nunc ac efficitur sapien. Mauris eu lectus odio. Mauris ac erat
                            tortor.
                            Nulla consectetur commodo justo. Pellentesque eget ornare quam. Pellentesque sodales metus
                            non semper luctus. Praesent non ornare tellus, eget vulputate tellus. Donec luctus non
                            sapien sed semper.</p>
                    </div>
                </div>
                <!-- Additional FAQs... -->
            </div>
        </section>

    </main>

    
    <footer class="flex flex-col   bg-gray-400 ">
        <div class="w-full draggable">
            <div class="container flex flex-col mx-auto">
                <div class="flex flex-col justify-center  items-center w-full my-5">
                    <x-applicationlogo class=" h-20 w-auto fill-current"></x-applicationlogo>
                    <div class="flex flex-col items-center gap-6 mb-4 mt-4">
                        <div
                            class="flex flex-wrap items-center justify-center gap-5 lg:gap-12 gap-y-3 lg:flex-nowrap text-dark-grey-900">
                            <a href="javascript:void(0)" class="text-white hover:text-gray-900">Home</a>
                            <a href="javascript:void(0)" class="text-white hover:text-gray-900">Library</a>
                            <a href="javascript:void(0)" class="text-white hover:text-gray-900">Cafeteria</a>
                            <a href="javascript:void(0)" class="text-white hover:text-gray-900">Accommodation</a>

                        </div>
                        <div class="flex items-center gap-8">
                            <a href="javascript:void(0)" class="text-grey-700 hover:text-grey-900">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.6348 20.7273V12.766H16.3582L16.7668 9.66246H13.6348V7.68128C13.6348 6.78301 13.8881 6.17085 15.2029 6.17085L16.877 6.17017V3.39424C16.5875 3.35733 15.5937 3.27273 14.437 3.27273C12.0216 3.27273 10.368 4.71881 10.368 7.37391V9.66246H7.63636V12.766H10.368V20.7273H13.6348Z"
                                        fill="currentColor" />
                                    <mask id="mask0_3320_6483" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                        x="7" y="3" width="10" height="18">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6348 20.7273V12.766H16.3582L16.7668 9.66246H13.6348V7.68128C13.6348 6.78301 13.8881 6.17085 15.2029 6.17085L16.877 6.17017V3.39424C16.5875 3.35733 15.5937 3.27273 14.437 3.27273C12.0216 3.27273 10.368 4.71881 10.368 7.37391V9.66246H7.63636V12.766H10.368V20.7273H13.6348Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_3320_6483)">
                                    </g>
                                </svg>
                            </a>
                            <a href="javascript:void(0)" class="text-grey-700 hover:text-grey-900">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.8182 6.14597C21.1356 6.44842 20.4032 6.65355 19.6337 6.74512C20.4194 6.27461 21.0208 5.5283 21.3059 4.64176C20.5689 5.07748 19.7553 5.39388 18.8885 5.56539C18.1943 4.82488 17.207 4.36364 16.1118 4.36364C14.0108 4.36364 12.3072 6.06718 12.3072 8.16706C12.3072 8.46488 12.3408 8.75576 12.4058 9.03391C9.24436 8.87512 6.44106 7.36048 4.56485 5.05894C4.23688 5.61985 4.0503 6.27342 4.0503 6.97109C4.0503 8.29106 4.72246 9.45573 5.74227 10.1371C5.11879 10.1163 4.53239 9.94476 4.01903 9.65967V9.70718C4.01903 11.5498 5.33088 13.0876 7.07033 13.4376C6.75164 13.5234 6.41558 13.5709 6.06791 13.5709C5.82224 13.5709 5.58467 13.5465 5.35173 13.5002C5.83612 15.0125 7.2407 16.1123 8.90485 16.1424C7.60343 17.1622 5.96246 17.7683 4.18012 17.7683C3.87303 17.7683 3.57055 17.7498 3.27273 17.7162C4.95658 18.7974 6.95564 19.4278 9.10418 19.4278C16.1026 19.4278 19.9281 13.6312 19.9281 8.60397L19.9153 8.11145C20.6628 7.57833 21.3094 6.90851 21.8182 6.14597Z"
                                        fill="currentColor" />
                                    <mask id="mask0_3320_6484" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                        x="3" y="4" width="19" height="16">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M21.8182 6.14597C21.1356 6.44842 20.4032 6.65355 19.6337 6.74512C20.4194 6.27461 21.0208 5.5283 21.3059 4.64176C20.5689 5.07748 19.7553 5.39388 18.8885 5.56539C18.1943 4.82488 17.207 4.36364 16.1118 4.36364C14.0108 4.36364 12.3072 6.06718 12.3072 8.16706C12.3072 8.46488 12.3408 8.75576 12.4058 9.03391C9.24436 8.87512 6.44106 7.36048 4.56485 5.05894C4.23688 5.61985 4.0503 6.27342 4.0503 6.97109C4.0503 8.29106 4.72246 9.45573 5.74227 10.1371C5.11879 10.1163 4.53239 9.94476 4.01903 9.65967V9.70718C4.01903 11.5498 5.33088 13.0876 7.07033 13.4376C6.75164 13.5234 6.41558 13.5709 6.06791 13.5709C5.82224 13.5709 5.58467 13.5465 5.35173 13.5002C5.83612 15.0125 7.2407 16.1123 8.90485 16.1424C7.60343 17.1622 5.96246 17.7683 4.18012 17.7683C3.87303 17.7683 3.57055 17.7498 3.27273 17.7162C4.95658 18.7974 6.95564 19.4278 9.10418 19.4278C16.1026 19.4278 19.9281 13.6312 19.9281 8.60397L19.9153 8.11145C20.6628 7.57833 21.3094 6.90851 21.8182 6.14597Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_3320_6484)">
                                    </g>
                                </svg>
                            </a>
                            <a href="javascript:void(0)" class="text-grey-700 hover:text-grey-900">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M12 3C7.0275 3 3 7.13211 3 12.2284C3 16.3065 5.5785 19.7648 9.15375 20.9841C9.60375 21.0709 9.76875 20.7853 9.76875 20.5403C9.76875 20.3212 9.76125 19.7405 9.7575 18.9712C7.254 19.5277 6.726 17.7332 6.726 17.7332C6.3165 16.6681 5.72475 16.3832 5.72475 16.3832C4.9095 15.8111 5.78775 15.8229 5.78775 15.8229C6.6915 15.887 7.16625 16.7737 7.16625 16.7737C7.96875 18.1847 9.273 17.777 9.7875 17.5414C9.8685 16.9443 10.1003 16.5381 10.3575 16.3073C8.35875 16.0764 6.258 15.2829 6.258 11.7471C6.258 10.7399 6.60675 9.91659 7.18425 9.27095C7.083 9.03774 6.77925 8.0994 7.263 6.82846C7.263 6.82846 8.01675 6.58116 9.738 7.77462C10.458 7.56958 11.223 7.46785 11.988 7.46315C12.753 7.46785 13.518 7.56958 14.238 7.77462C15.948 6.58116 16.7017 6.82846 16.7017 6.82846C17.1855 8.0994 16.8818 9.03774 16.7917 9.27095C17.3655 9.91659 17.7142 10.7399 17.7142 11.7471C17.7142 15.2923 15.6105 16.0725 13.608 16.2995C13.923 16.5765 14.2155 17.1423 14.2155 18.0071C14.2155 19.242 14.2043 20.2344 14.2043 20.5341C14.2043 20.7759 14.3617 21.0647 14.823 20.9723C18.4237 19.7609 21 16.3002 21 12.2284C21 7.13211 16.9703 3 12 3Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                            <a href="javascript:void(0)" class="text-grey-700 hover:text-grey-900">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 18 18" fill="none">
                                    <path
                                        d="M16.2 0H1.8C0.81 0 0 0.81 0 1.8V16.2C0 17.19 0.81 18 1.8 18H16.2C17.19 18 18 17.19 18 16.2V1.8C18 0.81 17.19 0 16.2 0ZM5.4 15.3H2.7V7.2H5.4V15.3ZM4.05 5.67C3.15 5.67 2.43 4.95 2.43 4.05C2.43 3.15 3.15 2.43 4.05 2.43C4.95 2.43 5.67 3.15 5.67 4.05C5.67 4.95 4.95 5.67 4.05 5.67ZM15.3 15.3H12.6V10.53C12.6 9.81004 11.97 9.18 11.25 9.18C10.53 9.18 9.9 9.81004 9.9 10.53V15.3H7.2V7.2H9.9V8.28C10.35 7.56 11.34 7.02 12.15 7.02C13.86 7.02 15.3 8.46 15.3 10.17V15.3Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                            <a href="javascript:void(0)" class="text-grey-700 hover:text-grey-900">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.60063 2.18182H16.3991C19.3873 2.18182 21.8183 4.61281 21.8182 7.60074V16.3993C21.8182 19.3872 19.3873 21.8182 16.3991 21.8182H7.60063C4.6127 21.8182 2.18182 19.3873 2.18182 16.3993V7.60074C2.18182 4.61281 4.6127 2.18182 7.60063 2.18182ZM16.3993 20.0759C18.4266 20.0759 20.0761 18.4266 20.0761 16.3993H20.0759V7.60074C20.0759 5.57348 18.4265 3.92405 16.3991 3.92405H7.60063C5.57336 3.92405 3.92405 5.57348 3.92405 7.60074V16.3993C3.92405 18.4266 5.57336 20.0761 7.60063 20.0759H16.3993ZM6.85714 12.0001C6.85714 9.16424 9.16418 6.85714 12 6.85714C14.8358 6.85714 17.1429 9.16424 17.1429 12.0001C17.1429 14.8359 14.8358 17.1429 12 17.1429C9.16418 17.1429 6.85714 14.8359 6.85714 12.0001ZM8.62798 12C8.62798 13.8593 10.1407 15.3719 12 15.3719C13.8593 15.3719 15.372 13.8593 15.372 12C15.372 10.1406 13.8594 8.6279 12 8.6279C10.1406 8.6279 8.62798 10.1406 8.62798 12Z"
                                        fill="currentColor" />
                                    <mask id="mask0_3320_6487" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                        x="2" y="2" width="20" height="20">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.60063 2.18182H16.3991C19.3873 2.18182 21.8183 4.61281 21.8182 7.60074V16.3993C21.8182 19.3872 19.3873 21.8182 16.3991 21.8182H7.60063C4.6127 21.8182 2.18182 19.3873 2.18182 16.3993V7.60074C2.18182 4.61281 4.6127 2.18182 7.60063 2.18182ZM16.3993 20.0759C18.4266 20.0759 20.0761 18.4266 20.0761 16.3993H20.0759V7.60074C20.0759 5.57348 18.4265 3.92405 16.3991 3.92405H7.60063C5.57336 3.92405 3.92405 5.57348 3.92405 7.60074V16.3993C3.92405 18.4266 5.57336 20.0761 7.60063 20.0759H16.3993ZM6.85714 12.0001C6.85714 9.16424 9.16418 6.85714 12 6.85714C14.8358 6.85714 17.1429 9.16424 17.1429 12.0001C17.1429 14.8359 14.8358 17.1429 12 17.1429C9.16418 17.1429 6.85714 14.8359 6.85714 12.0001ZM8.62798 12C8.62798 13.8593 10.1407 15.3719 12 15.3719C13.8593 15.3719 15.372 13.8593 15.372 12C15.372 10.1406 13.8594 8.6279 12 8.6279C10.1406 8.6279 8.62798 10.1406 8.62798 12Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_3320_6487)">
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="text-base font-normal leading-7 text-center text-white">
                        2024. All rights reserved.</p>
                </div>
            </div>
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
