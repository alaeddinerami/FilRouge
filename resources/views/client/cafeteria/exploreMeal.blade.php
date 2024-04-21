<x-client>

    <!-- Hero Section -->
    <div class="bg-cover bg-center h-screen" style="background-image: url({{ asset('storage/' . $meal->image->path) }})">
        <div class="bg-black bg-opacity-60 h-full flex items-center  justify-around ">
            <div class="text-center text-white px-8">
                <span class="text-xl font-light mb-4">ENJOY YOUR HEALTHY DELICIOUS MEAL </span>
                <h1 class="text-5xl font-bold fon mb-4">Treat Yourself</h1>
                <p class="text-2xl font-normal mb-4">Another free template by Colorlib. Far far away, behind the word
                    <br>
                    mountains, far from the countries Vokalia and Consonantia, <br>there live the blind texts.</p>

            </div>
            <img class=" w-2/5 h-80 rounded-lg" src="{{ asset('storage/' . $meal->image->path) }}" alt="">
        </div>
    </div>

    </div>
    <div class="flex w-full justify-end mt-5 px-6">
        <button onclick="showreview()"
            class="rounded-lg bg-orange-500 hover:bg-orange-600 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-light="true">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 10.5h0m-4 0h0m-4 0h0M5 5h14c.6 0 1 .4 1 1v9c0 .6-.4 1-1 1h-6.6a1 1 0 0 0-.7.3L8.8 19c-.3.3-.8 0-.8-.4V17c0-.6-.4-1-1-1H5a1 1 0 0 1-1-1V6c0-.6.4-1 1-1Z" />
            </svg>
        </button>
    </div>
    <div class="font-[sans-serif] text-gray-800 bg-gray-200  rounded-2xl m-5 px-5 py-5">
        <div class="flex gap-8 max-lg:max-w-2xl mx-auto">
            @if ($meal->image)
                <div class="flex justify-center items-center">
                    <img src="{{ asset('storage/' . $meal->image->path) }}" alt="Placeholder Image"
                        class="rounded-lg object-cover w-40 h-50" />
                </div>
            @else
                <div class="flex justify-center items-center">
                    <img src="{{ asset('storage/empty.jpg') }}" alt="Placeholder Image"
                        class="rounded-lg object-cover w-40 h-50" />
                </div>
            @endif
            <div class="text-left">
                <h2 class="text-4xl font-extrabold mb-6">{{ $meal->name }}</h2>
                <p class="mb-4 text-sm">
                    {{ $meal->description }}
                </p>



            </div>
        </div>

    </div>
    <!-- Reserve Your Table Section -->


    <div class="m-5 h-full rounded-2xl bg-gray-100 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="px-10">
            <div class="flex flex-wrap  gap-4">

                <div
                    class=" bg-white  max-w-xl rounded-2xl px-10 py-2 shadow-lg hover:shadow-2xl transition duration-500">
                    <div class="flex justify-between items-center">
                        <div class="mt-4 flex items-center justify-between space-x-4 py-3">
                            <img class="w-12 h-12 rounded-full"
                                src="https://images.unsplash.com/photo-1593104547489-5cfb3839a3b5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1036&q=80"
                                alt="" />
                            <div class="text-sm font-semibold">user
                            </div>
                        </div>
                        <div class="flex mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class=" text-base text-gray-600 font-semibold hover:underline cursor-pointer">
                        </h3>
                        <p class="mt-4 text-md text-gray-600">jdbvsaosjbbbbbsojbbbbbihsb ihs vhsv svasbsubssu ub sv
                            svosv0us vsv suhvu </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- ///////////////////////////////////////form comment////////////////////////// --}}
    <form
        class="hidden bg-cyan-200 rounded-xl absolute top-[40%] left-[40%] transform -translate-x-[40%] -translate-y-[40%] z-50 justify-center items-center w-[33rem] h-[20rem] sm:fixed sm:top-[25%] sm:left-[32%] sm:transform-none sm:-translate-x-[30%] sm:-translate-y-[30%]"
        action="" method="post" id="rev-form">
        <input type="hidden" name="doctorID" id="doctor_id" value="">
        <input type="hidden" name="patientID" id="patient_id" value="">

        @csrf
        <div class="grid gap-4 mb-4 sm:grid-cols-2">


            <div>
                <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 ">Comment</label>
                <input type="text" name="comment"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
            </div>
            <div>
                <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 ">Rating</label>
                <div class="flex items-center space-x-1">
                    <input type="radio" id="star5" name="starCount" value="1" class="hidden" />
                    <label for="star5"
                        class="starr cursor-pointer text-xl opacity-50 hover:opacity-100 hover:text-3xl"
                        onclick="handleStarClick(this)">⭐️</label>
                    <input type="radio" id="star4" name="starCount" value="2" class="hidden" />
                    <label for="star4"
                        class="starr cursor-pointer text-xl opacity-50 hover:opacity-100 hover:text-3xl"
                        onclick="handleStarClick(this)">⭐️</label>
                    <input type="radio" id="star3" name="starCount" value="3" class="hidden" />
                    <label for="star3"
                        class="starr cursor-pointer text-xl opacity-50 hover:opacity-100 hover:text-3xl"
                        onclick="handleStarClick(this)">⭐️</label>
                    <input type="radio" id="star2" name="starCount" value="4" class="hidden" />
                    <label for="star2"
                        class="starr cursor-pointer text-xl opacity-50 hover:opacity-100 hover:text-3xl"
                        onclick="handleStarClick(this)">⭐️</label>
                    <input type="radio" id="star1" name="starCount" value="5" class="hidden" />
                    <label for="star1"
                        class="starr cursor-pointer text-xl opacity-50 hover:opacity-100 hover:text-3xl"
                        onclick="handleStarClick(this)">⭐️</label>

                </div>
            </div>

            <button type="submit"
                class="text-white inline-flex items-center bg-cyan-800 hover:bg-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd" />
                </svg>
                Send Review
            </button>
            <button type="button" onclick="hidereview()"
                class="text-white inline-flex items-center hover:bg-cyan-800 bg-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                <svg class="w-5 mt-1 mr-1 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18 18 6m0 12L6 6" />
                </svg>cancel</button>
        </div>
    </form>
    </div>
    <style>
        .starr.selected {
            opacity: 1;
            /* Change opacity to 1 when selected */
            font-size: 2rem;
            /* Adjust text size as desired when selected */
        }
    </style>
    <script>
        function showreview() {

            document.getElementById('rev-form').classList.remove('hidden');
            document.getElementById('rev-form').classList.add('flex');
            document.getElementById('bg').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }


        function hidereview() {
            document.getElementById('rev-form').classList.add('hidden');
            document.getElementById('rev-form').classList.remove('flex');
            document.getElementById('bg').classList.add('hidden');
        }

        function handleStarClick(starr) {
            var stars = document.querySelectorAll('.starr');
            var clickedIndex = Array.from(stars).indexOf(starr);

            // Loop through stars
            for (var i = 0; i <= clickedIndex; i++) {
                stars[i].classList.add('selected');
            }
        }
    </script>


</x-client>
