<x-client>
    <div class="bg-cover bg-center h-[70vh] bg-fixed"
        style="background-image: url('{{ asset('storage/1713278658.jpg') }}')">
        <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
            <div class="text-center text-white px-8">
                <h1 class="text-5xl font-bold mb-4">Experience the Freedom</h1>
            </div>
        </div>
    </div>
    <div class=" flex justify-center md:h-[90vh] bg-white">
        <div class="transform -translate-y-24 top-0 md:w-[80vw] md:h-[40vh]  ">
            <div class="flex-1  max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">

                {{-- @foreach ($favorites as $favorite) --}}
                @php
                    // $imagePath = $favorite->meal->image
                    // ? asset('storage/' . $favorite->meal->image->path)
                    $imagePath = asset('images/1689786863909.jpg');

                @endphp
                <a href="" class=" bg-slate-300">
                    <img class="h-4/6 w-full" src="{{ $imagePath }}" alt="Poulsen Arm Chair">
                    <div class="p-4">
                        <h2>fsdbnpfb</h2>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-lg font-bold">5412 $</span>


                        </div>
                    </div>
                </a>
                {{-- @endforeach --}}
                {{-- @foreach ($favorites as $favorite) --}}
                @php
                    // $imagePath = $favorite->meal->image
                    // ? asset('storage/' . $favorite->meal->image->path)
                    $imagePath = asset('images/1689786863909.jpg');

                @endphp
                <div class=" bg-slate-300">
                    <img class="h-4/6 w-full" src="{{ $imagePath }}" alt="Poulsen Arm Chair">
                    <div class="p-4">
                        <h2>fsdbnpfb</h2>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-lg font-bold">5412 $</span>


                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
                 {{-- @foreach ($favorites as $favorite) --}}
                 @php
                 // $imagePath = $favorite->meal->image
                 // ? asset('storage/' . $favorite->meal->image->path)
                 $imagePath = asset('images/1689786863909.jpg');

             @endphp
             <div class=" bg-slate-300">
                 <img class="h-4/6 w-full" src="{{ $imagePath }}" alt="Poulsen Arm Chair">
                 <div class="p-4">
                     <h2>fsdbnpfb</h2>
                     <div class="flex items-center justify-between mt-4">
                         <span class="text-lg font-bold">5412 $</span>


                     </div>
                 </div>
             </div>
                 @php
                 // $imagePath = $favorite->meal->image
                 // ? asset('storage/' . $favorite->meal->image->path)
                 $imagePath = asset('images/1689786863909.jpg');

             @endphp
             <div class=" bg-slate-300">
                 <img class="h-4/6 w-full" src="{{ $imagePath }}" alt="Poulsen Arm Chair">
                 <div class="p-4">
                     <h2>fsdbnpfb</h2>
                     <div class="flex items-center justify-between mt-4">
                         <span class="text-lg font-bold">5412 $</span>


                     </div>
                 </div>
             </div>
             {{-- @endforeach --}}

            </div>
        </div>
    </div>
</x-client>
