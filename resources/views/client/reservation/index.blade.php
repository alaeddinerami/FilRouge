<x-client>
    <div class="bg-cover bg-center h-[70vh] bg-fixed"
        style="background-image: url('{{ asset('storage/1713278658.jpg') }}')">
        <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
            <div class="text-center text-white px-8">
                <h1 class="text-5xl font-bold mb-4">Experience the Freedom</h1>
            </div>
        </div>
    </div>
    <div class=" flex justify-center h-[50vh] bg-white">
        <div class="transform -translate-y-24 top-0 md:w-[80vw] md:h-[40vh] mb-10 ">
            <div class="flex-1 p-5 max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">

                @foreach ($rooms as $room)
                    @php
                        $imagePath = $room->image ? asset('storage/' . $room->image->path) : asset('images/empty.jpg');

                    @endphp
                    <a href="" class=" bg-slate-300">
                        <img class="h-4/6 w-full" src="{{ $imagePath }}" alt="Poulsen Arm Chair">
                        <div class="p-4 gap-4 text-center">
                            <h2 class="text-2xl text-center font-bold">Room: {{ $room->roomNumber }}</h2>
                            <span class="text-lg text-orange-600 text-center font-semibold">{{$room->price}} $</span>
                        </div>
                    </a>
                    {{-- @foreach ($favorites as $favorite) --}}
                    
                    @endforeach
                </div>
                <div class=" m-5">
                    {{ $rooms->links() }}
                </div>

        </div>
    </div>
</x-client>
