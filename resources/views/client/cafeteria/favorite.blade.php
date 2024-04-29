<x-client>
    <x-sweetalert></x-sweetalert>
    <div class=" ">
        <div class="bg-cover bg-center h-[50vh] bg-fixed"
            style="background-image: url('{{ asset('storage/1713278658.jpg') }}')">
            <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
                <div class="text-center text-white px-8">
                    <h1 class="text-5xl font-bold mb-4">We Have All the Food You Love</h1>
                    <button class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg">Explore</button>
                </div>
            </div>
        </div>

        <div class="  m-5 py-8">
            <h1 class="text-3xl font-bold text-center mb-8">Favorite Meals</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($favorites as $favorite)
                    @php
                        $imagePath = $favorite->image
                            ? asset('storage/' . $favorite->image->path)
                            : asset('storage/empty.jpg');

                    @endphp
                    <a href="{{ route('meals.show', $favorite) }}" class="relative bg-slate-300">
                        <img class="h-4/6 w-full" src="{{ $imagePath }}" alt="Poulsen Arm Chair">
                        <div class="p-4">
                            <h2>{{ $favorite->name }}</h2>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-lg font-bold">{{ $favorite->price }} $</span>
                                <form action="{{ route('addFavorit.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="meal_id" value="{{ $favorite->id }}">
                                    {{-- @if ($favorite->student()->exists()) --}}
                                        <button type="submit"
                                            class=" absolute top-2 right-0  text-white bg-white hover:bg-yellow-400 focus:outline-none focus:ring-4  font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="#FFC300" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-width="2"
                                                    d="M11 5.1a1 1 0 0 1 2 0l1.7 4c.1.4.4.6.8.6l4.5.4a1 1 0 0 1 .5 1.7l-3.3 2.8a1 1 0 0 0-.3 1l1 4a1 1 0 0 1-1.5 1.2l-3.9-2.3a1 1 0 0 0-1 0l-4 2.3a1 1 0 0 1-1.4-1.1l1-4.1c.1-.4 0-.8-.3-1l-3.3-2.8a1 1 0 0 1 .5-1.7l4.5-.4c.4 0 .7-.2.8-.6l1.8-4Z" />
                                            </svg>
                                        </button>
                                  
                                    {{-- @endif --}}
                                </form>
                                <form action="{{ route('meals.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="meal_id" value="{{ $favorite->id }}">
                                    <button class="bg-orange-500 text-white px-4 py-2 rounded-lg">Order now</button>
                                </form>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="  mt-5">
                {{ $favorites->links() }}
            </div>
        </div>
    </div>
    </div>

</x-client>
