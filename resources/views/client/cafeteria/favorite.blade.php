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
                        $imagePath = $favorite->meal->image
                            ? asset('storage/' . $favorite->meal->image->path)
                            : asset('storage/empty.jpg');

                    @endphp
                    <div class="chair-card bg-slate-300">
                        <img class="h-4/6 w-full" src="{{ $imagePath }}" alt="Poulsen Arm Chair">
                        <div class="p-4">
                            <h2>{{ $favorite->meal->name }}</h2>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-lg font-bold">{{ $favorite->meal->price }} $</span>

                                <form action="{{ route('meals.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="meal_id" value="{{ $favorite->meal->id }}">
                                    <button class="bg-orange-500 text-white px-4 py-2 rounded-lg">Order now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="  mt-5">
                {{ $favorites->links() }}
            </div>
        </div>
    </div>
    </div>

</x-client>
