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
                <a href="" class="hover:text-blue-500">Students</a>
            </li>
        </ul>
    </div>
    <section class="w-full m-5 md:flex flex-wrap ">
        @foreach ($students as $student)
            <div
                class="flex flex-wrap items-center justify-center bg-gray-100 mb-5 mr-8 border md:w-1/6  flex-col rounded-xl">
                @if ($student->image)
                    <img src='{{ asset('storage/' . $student->image->path) }}' class="w-20 h-20 rounded-full" />
                @else
                    <img src='{{ asset('storage/profile.webp') }}' class="w-20 h-20 rounded-full" />
                @endif
                <h4 class=" text-xl font-bold mt-3 uppercase">{{ $student->name }}</h4>
                <p class="text-l font-medium text-gray-700 mt-1 uppercase">Safi</p>
                {{-- <button
                    class="m-3 rounded-lg bg-red-500 px-5 py-1 font-sans text-xs font-bold uppercase text-white ">Ban</button>
                <button
                    class="m-3 rounded-lg bg-green-500 px-5 py-1 font-sans text-xs font-bold uppercase text-white ">Unban</button> --}}
                @if ($student->role == 'student')
                    <button data-modal-target="ban-modal" data-modal-toggle="ban-modal"
                        class="text-white bg-green-800   font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
                        onclick="openEditModalStudent({{ $student->id}})">
                        Ban
                    </button>
                @else
                    <button class="text-white bg-red-800   font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
                        onclick="openEditModalStudent({{ $student->id }})">
                        Unban
                    </button>
                @endif
            </div>
        @endforeach
        {{-- ban model --}}
        <form id="ban-modal" method="post" action="" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

            @csrf
            @method('patch')
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="ban-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you ?</h3>
                        <button data-modal-hide="ban-modal" type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="ban-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                            cancel</button>
                    </div>
                </div>
            </div>
        </form>

    </section>





    @stack('vite')
    @vite('resources/js/studentModal.js')



</x-dashboard>
