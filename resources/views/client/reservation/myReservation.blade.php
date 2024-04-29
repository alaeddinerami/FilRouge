<x-client>
    <div class="p-5 mt-16 flex items-center flex-wrap">
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
                <a href="" class="hover:text-blue-500">{{ Auth::user()->name }}</a>
                <span class="mx-4 h-auto text-gray-400 font-medium">/</span>
            </li>
            <li class="inline-flex items-center">
                <a href="" class="hover:text-blue-500">Our Reservations</a>
            </li>
        </ul>
    </div>
    <div class="mt-4 md:min-h-[60vh] mx-4">
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
                            <th class="px-4 py-3 text-left">Reservation</th>
                            <th class="px-4 py-3 text-left">Start Date</th>
                            <th class="px-4 py-3 text-left">Finish Date</th>
                            <th class="px-4 py-3  text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($reservations as $reservation)
                            <tr
                                class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            @php
                                                $imagePath = $reservation->student->users->image
                                                    ? asset('storage/' . $reservation->room->image->path)
                                                    : asset('images/profile.webp');
                                            @endphp

                                            <img class="object-cover w-full h-full rounded-full"
                                                src="{{ $imagePath }}" alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-semibold">Room: {{ $reservation->room->roomNumber }}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                {{ $reservation->student->users->email }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    <span class="px-2 py-1 font-semibold leading-tight  rounded-full">
                                        {{ $reservation->room->roomNumber }} </span>
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    @if ($reservation->status == 'accepted')
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full ">
                                            {{ $reservation->status }} </span>
                                    @elseif ($reservation->status == 'pending')
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full ">
                                            {{ $reservation->status }} </span>
                                    @else
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full ">
                                            {{ $reservation->status }} </span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm">{{ $reservation->reserved_at }}</td>
                                <td class="px-4 py-3 text-sm">{{ $reservation->finished_at }}</td>
                                <td class=" py-5 flex justify-evenly flex-wrap whitespace-nowrap  text-sm font-medium">

                                    @if ($reservation->status == 'accepted')
                                        {{-- <form method="POST" action="" class="inline-block text-left">
                                            @csrf
                                            @method('PATCH') --}}
                                            <a href="{{route('generatePDF' , $reservation->id)}}" type="submit" class=" flex flex-col items-center justify-center text-teal-500  hover:text-teal-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                                  </svg>
                                                  
                                               Get your Contract
                                            </a>
                                        {{-- </form> --}}
                                    @elseif ($reservation->status == 'pending')
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-yellow-400  w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                      </svg>
                                                                          @else
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" text-red-500 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
                                      </svg>
                                      
                                    @endif
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="p-5">
                    {{$reservations->links() }}
                </div>
            </div>

        </div>
    </div>
</x-client>
