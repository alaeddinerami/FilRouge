<x-client>
</div>
<h1 class="text-center mb-10 text-2xl text-black font-bold ">Events</h1>
<div class="mt-5  flex flex-wrap gap-4">
    
        
            <a href="{{ route('clientevent.show', $event) }}"
                class="max-w-sm mx-auto min-w-[22rem] group bg-slate-200 rounded-lg hover:no-underline focus:no-underline dark:bg-gray-900 ">

                <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                    src="/storage/hero.jpg">

                <div class="p-6 space-y-2">
                    <h3 class="text-2xl text-black font-semibold group-hover:underline group-focus:underline">
                        title</h3>

                    <span
                        class="text-xs dark:text-gray-400">
                        {{-- {{ \Carbon\Carbon::parse($event->date)->formatLocalized('%d %B %Y') }} --}}
                    </span>
                    <p> saljfbvaosfb ;sjfbv'jS V'Ofjbvobsfvbsfihbf vHFBV;sbv
                        {{-- {{ Str::limit($event->description, 90, '...') }} --}}
                    </p>

                    <div class="flex gap-4">
                        <svg xmlns="" class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>
                             {{-- {{ $event->lieu }} --}} writer
                        </span>
                    </div>
                    <div class="flex gap-4">
                        <svg xmlns="" class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                            <path d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z"
                                stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z"
                                stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z"
                                stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z"
                                stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />

                        </svg>
                        <span>
                             {{-- {{ $event->categories->name }} --}}
                        </span>
                    </div>
                    
                </div>

            </a>
        @endif
    @endforeach
</div>
</x-client>