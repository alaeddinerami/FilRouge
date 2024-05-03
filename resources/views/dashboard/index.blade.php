<x-dashboard>




    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
        <div
            class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div
                class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>
            </div>
            <div class="text-right">
                <p class="text-2xl" id = "alae">1,257</p>
                <p>Visitors</p>
            </div>
        </div>
        <div
            class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div
                class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
            </div>
            <div class="text-right">
                <p class="text-2xl">557</p>
                <p>Orders</p>
            </div>
        </div>
        <div
            class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div
                class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
            </div>
            <div class="text-right">
                <p class="text-2xl">$11,257</p>
                <p>Sales</p>
            </div>
        </div>
        <div
            class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
            <div
                class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>
            </div>
            <div class="text-right">
                <p class="text-2xl">$75,257</p>
                <p>Balances</p>
            </div>
        </div>
    </div>
    <!-- ./Statistics Cards -->

    {{-- <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4"> --}}

    <!-- Social Traffic -->
    {{-- <div
            class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
                <div class="flex flex-wrap items-center px-4 py-2">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Social Traffic
                        </h3>
                    </div>
                    <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                        <button
                            class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button">See all</button>
                    </div>
                </div>
                <div class="block w-full overflow-x-auto">
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                            <tr>
                                <th
                                    class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Referral</th>
                                <th
                                    class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Visitors</th>
                                <th
                                    class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    Facebook</th>
                                <td
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    5,480</td>
                                <td
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                        <span class="mr-2">70%</span>
                                        <div class="relative w-full">
                                            <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                                                <div style="width: 70%"
                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    Twitter</th>
                                <td
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    3,380</td>
                                <td
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                        <span class="mr-2">40%</span>
                                        <div class="relative w-full">
                                            <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                                                <div style="width: 40%"
                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    Instagram</th>
                                <td
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    4,105</td>
                                <td
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                        <span class="mr-2">45%</span>
                                        <div class="relative w-full">
                                            <div class="overflow-hidden h-2 text-xs flex rounded bg-pink-200">
                                                <div style="width: 45%"
                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    Google</th>
                                <td
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    4,985</td>
                                <td
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                        <span class="mr-2">60%</span>
                                        <div class="relative w-full">
                                            <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                                <div style="width: 60%"
                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-gray-700 dark:text-gray-100">
                                <th
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    Linkedin</th>
                                <td
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    2,250</td>
                                <td
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                        <span class="mr-2">30%</span>
                                        <div class="relative w-full">
                                            <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                                                <div style="width: 30%"
                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-700">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
    <!-- ./Social Traffic -->




    <!-- Client Table -->
    <div class="mt-4 mx-4">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <div class="flex flex-wrap items-center px-4 py-2">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Recent
                            customers</h3>
                    </div>

                </div>
                <table class="w-full">
                        
                    
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Client</th>
                            <th class="px-4 py-3">Meal</th>
                            <th class="px-4 py-3">Date</th>
                        </tr>
                    </thead>
                    @foreach ($orders as $order)
                     @foreach ($order->commandemeal as $commande)

                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <tr
                            class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="{{asset('storage/' . $order->users->image->path )}}"
                                            alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{$order->users->name}}</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span class="px-2 py-1 font-semibold leading-tight  rounded-full">
                                    {{$commande->name}} </span>
                            </td>
                            
                            <td class="px-4 py-3 text-sm">{{$commande->pivot->created_at}}</td>
                        </tr>
                    
                    </tbody>
                    @endforeach
                    @endforeach 
                </table>
            </div>

        </div>
    </div>
    <!-- ./Client Table -->




</x-dashboard>
