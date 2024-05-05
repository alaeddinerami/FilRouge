<x-dashboard>




    <!-- Statistics Cards -->
    <section class=" md:pl-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 md:ml-40 p-4 gap-4">
            <div
                class="bg-blue-300 shadow-lg rounded-full flex items-center justify-between p-3 border-b-4 border-blue-300  text-white font-medium group">
                <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" viewBox="0 0 24 24" fill="#1565C0">
                        <path
                            d="M17.5291 7.77C17.4591 7.76 17.3891 7.76 17.3191 7.77C15.7691 7.72 14.5391 6.45 14.5391 4.89C14.5391 3.3 15.8291 2 17.4291 2C19.0191 2 20.3191 3.29 20.3191 4.89C20.3091 6.45 19.0791 7.72 17.5291 7.77Z"
                            fill="#1565C0" />
                        <path
                            d="M20.7916 14.7004C19.6716 15.4504 18.1016 15.7304 16.6516 15.5404C17.0316 14.7204 17.2316 13.8104 17.2416 12.8504C17.2416 11.8504 17.0216 10.9004 16.6016 10.0704C18.0816 9.8704 19.6516 10.1504 20.7816 10.9004C22.3616 11.9404 22.3616 13.6504 20.7916 14.7004Z"
                            fill="#1565C0" />
                        <path
                            d="M6.44016 7.77C6.51016 7.76 6.58016 7.76 6.65016 7.77C8.20016 7.72 9.43016 6.45 9.43016 4.89C9.43016 3.29 8.14016 2 6.54016 2C4.95016 2 3.66016 3.29 3.66016 4.89C3.66016 6.45 4.89016 7.72 6.44016 7.77Z"
                            fill="#1565C0" />
                        <path
                            d="M6.55109 12.8506C6.55109 13.8206 6.76109 14.7406 7.14109 15.5706C5.73109 15.7206 4.26109 15.4206 3.18109 14.7106C1.60109 13.6606 1.60109 11.9506 3.18109 10.9006C4.25109 10.1806 5.76109 9.89059 7.18109 10.0506C6.77109 10.8906 6.55109 11.8406 6.55109 12.8506Z"
                            fill="#1565C0" />
                        <path
                            d="M12.1208 15.87C12.0408 15.86 11.9508 15.86 11.8608 15.87C10.0208 15.81 8.55078 14.3 8.55078 12.44C8.56078 10.54 10.0908 9 12.0008 9C13.9008 9 15.4408 10.54 15.4408 12.44C15.4308 14.3 13.9708 15.81 12.1208 15.87Z"
                            fill="#1565C0" />
                        <path
                            d="M8.87078 17.9406C7.36078 18.9506 7.36078 20.6106 8.87078 21.6106C10.5908 22.7606 13.4108 22.7606 15.1308 21.6106C16.6408 20.6006 16.6408 18.9406 15.1308 17.9406C13.4208 16.7906 10.6008 16.7906 8.87078 17.9406Z"
                            fill="#1565C0" />
                    </svg>
                </div>
                <div class="text-right text-black">
                    <p class="text-2xl" id = "alae">{{ $studentsCount }}</p>
                    <p>Students</p>
                </div>
            </div>
            <div
                class="bg-blue-300 shadow-lg rounded-full flex items-center justify-between p-3 border-b-4 border-blue-300  text-white ">
                <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full ">
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#1565C0"
                        class="h-9 w-9" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path
                                        d="M422.7,305.365l-82.411,51.627c-5.867,3.136-17.899,4.693-31.211,5.44c-0.939-6.059-3.499-12.949-8.619-20.629     c-15.808-23.573-33.899-33.643-60.523-33.643h-31.552c-14.101,0-27.712-4.437-38.4-12.48     c-18.283-13.76-39.509-17.771-63.317-12.437v-5.909c0-11.776-9.536-21.333-21.333-21.333h-64     c-11.797,0-21.333,9.557-21.333,21.333v213.333C0.001,502.443,9.537,512,21.334,512h64c11.797,0,21.333-9.557,21.333-21.333     v-0.021l63.552-0.043l4.864,0.085c17.131,0,34.432-1.323,51.051-3.84l104.213-13.653c4.224-0.107,8.491-0.597,12.736-1.493     c11.968-1.813,23.275-7.424,32.853-16.299l122.667-95.531c14.891-12.331,17.749-34.24,6.528-49.899     C482.028,277.781,453.59,289.045,422.7,305.365z M64.001,313.643v155.691H42.668V298.667h21.333V313.643z" />
                                    <path
                                        d="M150.429,262.741c2.901,8.725,11.051,14.592,20.245,14.592h298.667c9.173,0,17.323-5.867,20.224-14.592l21.333-64     c2.176-6.507,1.088-13.653-2.923-19.2c-4.011-5.589-10.453-8.875-17.301-8.875h-1.493     c-9.664-77.056-70.805-138.176-147.84-147.861v-1.472C341.341,9.557,331.783,0,320.007,0c-11.797,0-21.333,9.557-21.333,21.333     v1.472c-77.056,9.685-138.176,70.805-147.861,147.861h-1.472c-6.869,0-13.291,3.285-17.323,8.875     c-3.989,5.547-5.099,12.693-2.923,19.2L150.429,262.741z M461.063,213.333l-7.104,21.333H186.034l-7.104-21.333H461.063z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="text-right text-black">
                    <p class="text-2xl">{{ $ordersCount }}</p>
                    <p>Orders</p>
                </div>
            </div>
            <div
                class="bg-blue-300 shadow-lg rounded-full flex items-center justify-between p-3 border-b-4 border-blue-300  text-white font-medium group">
                <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" viewBox="0 0 192 192"
                        fill="#1E88E5">
                        <defs>
                            <linearGradient id="a" x1="16" x2="176" y1="96" y2="96"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0" />
                            </linearGradient>
                        </defs>
                        <path stroke="#1565C0" stroke-linejoin="round" stroke-width="12"
                            d="M75.984 145.016H50.841V115.31c0-6.33 2.465-9.74 7.986-10.422h17.256a18.873 18.873 0 0 1 14.81 5.373 18.378 18.378 0 0 1 5.403 14.643c0 12.662-7.74 20.21-20.213 20.21zM50.791 64.71v-7.792c0-6.818 2.958-10.13 9.368-10.52h12.916c11.044 0 17.749 6.527 17.749 17.533 0 8.279-4.536 18.019-17.256 18.019H50.89Zm57.387 29.707-4.536-2.532 3.944-3.41c4.634-3.895 12.325-12.759 12.325-28.002C119.91 37.097 101.57 22 73.223 22h-35.99C28.79 22.286 22.075 29.093 22 37.438v132.464h51.864c31.552 0 51.865-16.947 51.865-43.246 0-14.122-6.557-26.297-17.65-32.385" />
                        <ellipse cx="151.94" cy="152.17" fill="#1565C0" stroke="#1E88E5" stroke-linejoin="round"
                            stroke-width="8" rx="11.805" ry="11.707" />
                    </svg>
                </div>
                <div class="text-right text-black">
                    <p class=" text-2xl">{{ $reservationCount }}</p>
                    <p>Reservations</p>
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

        <div class=" mt-4 mx-4 ">
            <div class="   overflow-hidden rounded-lg shadow-xs">
                <div class=" max-w-[70vw] overflow-x-auto">
                    <div class="flex flex-wrap items-center px-4 py-2">
                        <div class="relative w-full  flex-grow flex-1">
                            <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Orders</h3>
                        </div>

                    </div>
                    <table class="w-full ">


                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b  bg-blue-200 ">
                                <th class="px-4 py-3">Client</th>
                                <th class="px-4 py-3">Meal</th>
                                <th class="px-4 py-3">Date</th>
                            </tr>
                        </thead>
                        @foreach ($orders as $order)
                            @php
                                $imagePath = $order->users->image
                                    ? asset('storage/' . $order->users->image->path)
                                    : asset('storage/empty.jpg');

                            @endphp
                            @foreach ($order->commandemeal as $commande)
                                <tbody class="bg-white  divide-y ">
                                    <tr class="bg-blue-50 -800  hover:bg-blue-100  text-gray-700 ">
                                        <td class="px-4 py-3">
                                            <div class="flex justify-start  text-sm">
                                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="{{ $imagePath }}" alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true">
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="  font-semibold">{{ $order->users->name }}</p>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3  text-xs">
                                            <span class="px-2 py-1 font-semibold leading-tight  rounded-full">
                                                {{ $commande->name }} </span>
                                        </td>

                                        <td class="px-4 py-3 text-sm">{{ $commande->pivot->created_at }}</td>
                                    </tr>

                                </tbody>
                            @endforeach
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </section>




</x-dashboard>
