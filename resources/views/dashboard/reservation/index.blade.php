<x-dashboard>
    @if (session()->has('message'))
        @stack('scripts')
        <script>
            Swal.fire({
                title: '{{ session('operationSuccessful') ? 'Success' : 'Error' }}!',
                icon: '{{ session('operationSuccessful') ? 'success' : 'error' }}',
                confirmButtonText: 'Ok',
                html: '{{ session('message') }}'
            })
        </script>
    @endif

    <div class="p-5 flex items-center flex-wrap">
        <ul class="flex items-center">
            <li class="inline-flex items-center">
                <a href="/dashboard" class="hover:text-blue-500">
                    <svg class="w-5 h-auto fill-current " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="#000000">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1z" />
                    </svg>
                </a>
                <span class="mx-4 h-auto text-gray-400 font-medium">/</span>
            </li>
            <li class="inline-flex items-center">
                <a href="" class="hover:text-blue-500">Dashboard</a>
                <span class="mx-4 h-auto text-gray-400 font-medium">/</span>
            </li>
            <li class="inline-flex items-center">
                <a href="" class="hover:text-blue-500">Our Reservations</a>
            </li>
        </ul>
    </div>
    <div class="mt-4 mx-4">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <div class="flex flex-wrap items-center px-4 py-2">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Our
                            Reservations</h3>
                    </div>

                </div>
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide  text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3 text-left">Client</th>
                            <th class="px-4 py-3 text-left">Room</th>
                            <th class="px-4 py-3 text-left">Status</th>
                            <th class="px-4 py-3 text-left">Date</th>
                            <th class="px-4 py-3  text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <tr
                            class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                            alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Hans Burger</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">10x Developer
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span class="px-2 py-1 font-semibold leading-tight  rounded-full">
                                    46 </span>
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    Approved </span>
                            </td>
                            <td class="px-4 py-3 text-sm">15-01-2021</td>
                            <td class=" py-5 flex justify-evenly flex-wrap whitespace-nowrap  text-sm font-medium">

                                
                                <form method="POST" action="" class="inline-block text-left">
                                    @csrf
                                    @method('put')     
                                    <button type="submit" class="text-teal-500  hover:text-teal-700">
                                        Accept
                                    </button>
                                </form>
                                <form action="" method="POST" class="inline-block text-left">
                                    @csrf
                                    @method('put')
                                    <button type="submit" class="text-red-500  hover:text-red-700 ">Reject</button>
                                </form>
                            </td>
    
                        </tr>
                        <tr
                            class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;facepad=3&amp;fit=facearea&amp;s=707b9c33066bf8808c934c8ab394dff6"
                                            alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Jolina Angelie</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Unemployed</p>
                                    </div>
                                </div>
                            </td>

                            <td class="px-4 py-3 text-xs">
                                <span class="px-2 py-1 font-semibold leading-tight  rounded-full">
                                    45 </span>
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">
                                    Pending </span>
                            </td>
                            <td class="px-4 py-3 text-sm">23-03-2021</td>

                            <td class="py-5 flex justify-evenly flex-wrap whitespace-nowrap  text-sm font-medium">

                                
                                <form method="POST" action="" class="inline-block text-left">
                                    @csrf
                                    @method('put')     
                                    <button type="submit" class="text-teal-500  hover:text-teal-700">
                                        Accept
                                    </button>
                                </form>
                                <form action="" method="POST" class="inline-block text-left">
                                    @csrf
                                    @method('put')
                                    <button type="submit" class="text-red-500  hover:text-red-700 ">Reject</button>
                                </form>
                            </td>
    
                        </tr>


                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-dashboard>
