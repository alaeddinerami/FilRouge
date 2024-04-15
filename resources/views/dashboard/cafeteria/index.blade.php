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
                <a href="" class="hover:text-blue-500">Cafetiria</a>
            </li>
        </ul>
        {{-- ------------------------------------------------ modal button ------------------------------------------------------- --}}
    <div class="w-full flex justify-between items-center px-2 mt-4">
        <p class="text-none text-xl font-semibold indent-4">Menu</p>
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            type="button">
            Add meal
        </button>
    </div>
    </div>


    {{-- --------------------------------------------------crude modale --------------------------------------------- --}}

    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed  top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Add New Meal
                    </h3>
                    <button type="button"
                        class="text-blue-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" method="post" action="{{ route('meal.store') }}" enctype="multipart/form-data"
                    onsubmit="return validateForm()">
                    @csrf
                    <div class="grid gap-6 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name Meal
                            </label>
                            <input type="name meal" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Name Meal">
                        </div>
                        <div class="col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                            <textarea name="description" id="description"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Description"></textarea>
                        </div>
                        <div class="col-span-2">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                            <input type="number" name="price" id="price"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="price">
                        </div>

                        <div class="col-span-2">
                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
                            <input type="file" name="image" :value="old('image[]')" id="image"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Actor's full name">
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex justify-center items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-full">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <p>Add Meal</p>
                    </button>
                </form>
            </div>
        </div>
    </div>
    

    {{-- -------------------------------------------------- edit modal ----------------------------------------------- --}}

    <div id="edit-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed  top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Edit Meal
                    </h3>
                    <button type="button"
                        class="text-blue-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="edit-modal"
                        >
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" method="post" action="" id="edit_form" enctype="multipart/form-data"
                    onsubmit="return validateForm()">
                    @csrf
                    @method('patch')
                    <div class="grid gap-6 mb-4 grid-cols-2">
                        <div class="col-span-2">

                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name Meal
                            </label>
                            <input type="text" name="name" id="edit_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Name Meal">
                        </div>
                        <div class="col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                            <textarea name="description" id="edit_description"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Description"></textarea>
                        </div>
                        <div class="col-span-2">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                            <input type="number" name="price" id="edit_price"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="price">
                        </div>

                        <div class="col-span-2">
                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
                            <input type="file" name="image" :value="old('image')" id="image"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Actor's full name">
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex justify-center items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-full">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <p>Edit Meal</p>
                    </button>
                </form>
            </div>
        </div>
    </div>
    {{-- ------------------------------------------------ display table ------------------------------------------------------ --}}
    <section>
        <div class="overflow-x-auto m-5">
            <table class="min-w-full border bg-white font-[sans-serif]">
                <thead class="border whitespace-nowrap">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-black">
                            Name
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-black">
                            Price
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-black">
                            Description
                        </th>
                        <th class="px-6 py-3 text-center text-sm font-semibold text-black">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="whitespace-nowrap">
                    @foreach ($meals as $meal)
                        <tr class="{{ $loop->odd ? 'odd:bg-blue-50' : 'even:bg-blue-100' }}">
                            <td class="px-6 py-3 text-sm">
                                <div class="flex items-center cursor-pointer">
                                    <img src='{{ asset('storage/' . $meal->image->path) }}'
                                        class="w-9 h-9 rounded-full shrink-0" />
                                    <div class="ml-4">
                                        <p class="text-sm text-black">{{ $meal->name }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-3 text-sm">
                                {{ $meal->price }} $
                            </td>
                            <td class="px-6 py-3">
                                <p class="text-xs text-gray-400">{{ $meal->description }}</p>
                            </td>
                            <td class="flex justify-center ml-5 py-5">
                                <button   onclick="openEditModal({{ $meal->id }},'{{ $meal->name }}','{{ $meal->description }}','{{$meal->price}}')" class="mr-6"
                                    title="Edit" >
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 fill-blue-500 hover:fill-blue-700" viewBox="0 0 348.882 348.882">
                                        <path
                                            d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                            data-original="#000000" />
                                        <path
                                            d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                            data-original="#000000" />
                                    </svg>
                                </button>
                                <form class="mt-2" action="{{route('meal.destroy', $meal)}} '" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="mr-4 " title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                                            <path
                                                d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                                data-original="#000000" />
                                            <path
                                                d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                                data-original="#000000" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$meals->links()}}
        </div>
    </section>
    @push('vite')
        @vite('resources/js/mealEditModal.js')
    @endpush
</x-dashboard>
