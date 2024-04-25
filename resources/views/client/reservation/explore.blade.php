<x-client>
    <x-sweetalert></x-sweetalert>
    <section class=" bg-slate-100 p-10 py-16">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h1 class="text-4xl font-bold mb-4">Find Hotel Rooms, Resorts with exciting deals and offers.</h1>
                    <p class="mb-8">We have a wide range of Hotel Rooms, Resorts and villas with exciting deals and
                        offers specially for our valuable customers.</p>
                    <form method="POST" action="{{ route('booking') }}" class="flex flex-col space-y-4">
                        @csrf
                        <input type="hidden" name="room_id" value="{{ $rooms->id }}">
 
                

                     
                        <input id="created_at" type="date" name="created_at" 
                        min="{{ count($rooms->reservations) && $rooms->reservations[0] && $rooms->reservations[0]->created_at && $rooms->reservations[0]->created_at ? $rooms->reservations[0]->created_at->format('Y-m-d') : now()->format('Y-m-d') }}"
                        class="border border-gray-300 rounded-md px-4 py-2 w-full sm:w-1/2">
                        <input id="reservation_finishdate" type="date" name="reservation_finishdate" 
                            class="border border-gray-300 rounded-md px-4 py-2 w-full sm:w-1/2">
                       
                        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-md self-start">Book
                            now</button>
                    </form>


                    <div class="flex space-x-8 mt-8">
                        <div class="text-center">
                            <span class="text-4xl font-bold">2000+</span>
                            <p class="text-gray-500">Location Hotels</p>
                        </div>
                        <div class="text-center">
                            <span class="text-4xl font-bold">200+</span>
                            <p class="text-gray-500">Points Checked In</p>
                        </div>
                        <div class="text-center">
                            <span class="text-4xl font-bold">5-star</span>
                            <p class="text-gray-500">Service</p>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/1689786863909.jpg') }}" alt="Hotel Room" class="rounded-lg shadow-md">
                    <div class="bg-gray-500 text-white p-4 rounded-lg shadow-md mt-4">
                        <h3 class="font-bold mb-2">Room: {{ $rooms->roomNumber }} </h3>
                        <p class="mb-2">{{ $rooms->description }}</p>
                        <p class="font-bold">{{ $rooms->price }} $/month</p>
                        <button class="bg-yellow-500 text-white px-4 py-2 rounded-md mt-2">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
     
      const createdAtInput = document.getElementById('created_at');
      const finishDateInput = document.getElementById('reservation_finishdate');
      
      
      createdAtInput.addEventListener('change', function() {
         
          finishDateInput.min = this.value;
      });
  </script>
</x-client>



