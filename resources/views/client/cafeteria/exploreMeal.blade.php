<x-client>
    <section class="bg-gray-100">

        <x-sweetalert></x-sweetalert>
        <!-- Hero Section -->
        <div class="bg-cover bg-center h-screen"
            style="background-image: url({{ asset('storage/' . $meal->image->path) }})">
            <div class="bg-black bg-opacity-60 h-full flex flex-wrap items-center  justify-around ">
                <div class="text-center text-white px-8">
                    <span class="text-xl font-light mb-4">ENJOY YOUR HEALTHY DELICIOUS MEAL </span>
                    <h1 class="text-5xl font-bold fon mb-4">Treat Yourself</h1>
                    <p class="text-2xl font-normal mb-4">Another free template by Colorlib. Far far away, behind the word
                        <br>
                        mountains, far from the countries Vokalia and Consonantia, <br>there live the blind texts.
                    </p>

                </div>
                <img class=" w-2/5 h-80 rounded-lg" src="{{ asset('storage/' . $meal->image->path) }}" alt="">
            </div>
        </div>
        </div>

        <div class="flex flex-wrap justify-center">
            <div class="font-[sans-serif] text-gray-800 bg-gray-200 min-w-36 md:w-3/6    rounded-2xl m-5 px-5 py-5">
                
                <div class="flex justify-center  md:flex md:justify-start flex-wrap relative ">
                    @if ($meal->image)
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('storage/' . $meal->image->path) }}" alt="Placeholder Image"
                                class="rounded-lg object-cover w-64 h-58" />
                        </div>
                    @else
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('storage/empty.jpg') }}" alt="Placeholder Image"
                                class="rounded-lg object-cover w-64 h-58" />
                        </div>
                    @endif
                   
                    <div class="text-left  md:ml-5">
                        
                        <h2 class=" flex flex-row  text-xl font-extrabold mt-3 mb-3 md:mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                class="w-8 h-8 md:h-8 md:w-8 md:mr-2" version="1.1" id="_x32_" viewBox="0 0 512 512"
                                xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #000000;
                                    }
                                </style>
                                <g>
                                    <path class="st0"
                                        d="M256,0C114.613,0,0,114.615,0,256s114.613,256,256,256c141.383,0,256-114.615,256-256S397.383,0,256,0z    M379.652,402.722v-98.774v-8.938v-3.573v-7.201V161.333c0-5.3-2.656-10.245-7.066-13.177c-4.039-2.694-9.059-3.346-13.629-1.862   c-0.422,0.131-0.84,0.263-1.254,0.432l-41.98,17.577c-5.051,2.11-8.648,6.681-9.524,12.083l-10.84,127.164   c-0.728,4.531,0.539,9.165,3.488,12.681c2.945,3.524,36.008,32.46,36.008,32.46v82.297C310.779,441.882,284.098,448,256,448   c-16.172,0-31.871-2.032-46.885-5.814V299.032c4.186-1.114,8.139-2.521,11.822-4.191c7.184-3.25,13.348-7.422,18.488-11.992   c7.727-6.875,13.176-14.562,16.832-21.803c1.828-3.634,3.211-7.164,4.191-10.584c0.496-1.707,0.883-3.396,1.16-5.104   c0.278-1.708,0.453-3.43,0.453-5.294c0-11.474,0-78.701,0-78.701c0-8.754-7.098-15.846-15.848-15.846s-15.84,7.092-15.84,15.846   c0,0,0,1.051,0,2.916c0,9.157,0,37.98,0,57.756c0,7.539-6.117,13.657-13.664,13.657c-7.543,0-13.656-6.118-13.656-13.657   c0-23.81,0-59.578,0-59.578c0-8.748-7.098-15.846-15.852-15.846c-8.752,0-15.848,7.098-15.848,15.846c0,0,0,1.056,0,2.912   c0,8.995,0,36.938,0,56.666c0,7.539-6.114,13.657-13.66,13.657c-7.543,0-13.656-6.118-13.656-13.657c0-23.791,0-60.672,0-60.672   c0-8.754-7.094-15.846-15.846-15.846c-8.752,0-15.85,7.092-15.85,15.846c0,0,0,1.051,0,2.916c0,13.02,0,65.742,0,75.785   c0.008,1.66,0.141,3.201,0.365,4.723c0.428,2.846,1.154,5.646,2.16,8.558c1.764,5.057,4.396,10.408,8.068,15.813   c2.758,4.043,6.105,8.092,10.121,11.926c6.014,5.736,13.563,10.974,22.664,14.732c3.023,1.251,6.226,2.312,9.574,3.201v126.154   C105.051,392.741,64,329.081,64,256c0-105.869,86.129-192,192-192c105.867,0,192,86.131,192,192   C448,314.796,421.408,367.474,379.652,402.722z" />
                                </g>
                            </svg>
                            <span> {{ $meal->name }}</span>
                        </h2>
                        <p class="flex flex-row  mb-4 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000" class="h-8 w-8" version="1.1" id="Layer_1" viewBox="0 0 512 512"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M148.489,171.778l-0.001,44.629c0,8.027-2.286,14.557-6.613,18.883c-1.089,1.089-2.319,2.047-3.676,2.873v-66.384h-30.417    v66.382c-1.356-0.826-2.584-1.784-3.673-2.872c-4.326-4.326-6.613-10.855-6.612-18.883v-44.625H67.079v44.624    c-0.001,16.271,5.367,30.239,15.522,40.393c6.824,6.823,15.374,11.472,25.18,13.797v133.594h30.417V270.595    c9.809-2.324,18.361-6.975,25.184-13.796c10.155-10.154,15.523-24.121,15.523-40.392l0.001-44.627L148.489,171.778z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M389.007,166.709c-26.393,0.001-47.865,21.474-47.865,47.864v35.684c0.001,21.076,13.7,39.001,32.658,45.372v108.558    h30.417V295.631c18.957-6.372,32.656-24.297,32.655-45.372l0.001-35.69C436.869,188.181,415.397,166.71,389.007,166.709z     M406.456,250.259c0,9.62-7.826,17.446-17.446,17.447c-9.622-0.001-17.449-7.827-17.449-17.447v-35.684    c0-9.62,7.827-17.446,17.447-17.447c9.62,0.001,17.447,7.828,17.449,17.445L406.456,250.259z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M473.751,31.888L297.38,74.602C278.98,78.816,265.422,85.969,256,96.444c-9.423-10.475-22.979-17.627-41.38-21.841    L38.249,31.888L0,96.779v340.454l227.979,42.619l1.385,0.26h53.272L512,437.234V96.779L473.751,31.888z M215.564,446.588    L30.417,411.975V119.242l185.147,34.613V446.588z M232.182,126.017L39.324,89.964l13.679-23.206l154.555,37.43l0.196,0.047    c19.015,4.341,27.524,11.668,30.969,21.783H232.182z M266.016,449.694h-20.035V156.435h20.035V449.694z M279.817,126.018h-6.54    c3.444-10.116,11.954-17.443,30.969-21.784l154.75-37.477l13.679,23.206L279.817,126.018z M481.583,411.975l-185.148,34.613    V153.855l185.148-34.613V411.975z" />
                                    </g>
                                </g>
                            </svg>
                            <span class="py-1 px-3">{{ $meal->description }}</span>
                        </p>
                        <p class=" flex flex-row mb-4 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none">
                                <path d="M8.67188 14.3298C8.67188 15.6198 9.66188 16.6598 10.8919 16.6598H13.4019C14.4719 16.6598 15.3419 15.7498 15.3419 14.6298C15.3419 13.4098 14.8119 12.9798 14.0219 12.6998L9.99187 11.2998C9.20187 11.0198 8.67188 10.5898 8.67188 9.36984C8.67188 8.24984 9.54187 7.33984 10.6119 7.33984H13.1219C14.3519 7.33984 15.3419 8.37984 15.3419 9.66984" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 6V18" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15 22H9C4 22 2 20 2 15V9C2 4 4 2 9 2H15C20 2 22 4 22 9V15C22 20 20 22 15 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            <span class="py-2 px-3" >{{ $meal->price }} $</span>
                        </p>


                        <div class=" md:absolute top-0 right-0 flex items-center space-x-1 pl-5 pt-5">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $averageStars)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M19.708 7.783a1 1 0 00-.933-.659l-6.263-.55L10.934.55a1 1 0 00-1.868 0l-1.578 6.024-6.263.55a1 1 0 00-.548 1.705l5.158 3.75-1.578 6.024a1 1 0 001.454 1.054l5.354-3.75 5.354 3.75a1 1 0 001.454-1.054l-1.578-6.024 5.158-3.75a1 1 0 00.268-1.046z"
                                            clip-rule="evenodd" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M19.708 7.783a1 1 0 00-.933-.659l-6.263-.55L10.934.55a1 1 0 00-1.868 0l-1.578 6.024-6.263.55a1 1 0 00-.548 1.705l5.158 3.75-1.578 6.024a1 1 0 001.454 1.054l5.354-3.75 5.354 3.75a1 1 0 001.454-1.054l-1.578-6.024 5.158-3.75a1 1 0 00.268-1.046z"
                                            clip-rule="evenodd" />
                                    </svg>
                                @endif
                            @endfor
                        </div>
                    </div>
                    
                </div>
                

            </div>
            
        </div>
        {{-- /////////////////////////////////////////////// button feedback//////////////////////////////////////////// --}}
        <div class="flex w-full justify-end mt-5 px-6">
            @if (!$meal->feedbackbystudent()->where('student_id', auth()->user()->students->id)->exists())
                <button onclick="showreview()"
                    class="rounded-lg bg-orange-500 hover:bg-orange-600 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    data-ripple-light="true">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 10.5h0m-4 0h0m-4 0h0M5 5h14c.6 0 1 .4 1 1v9c0 .6-.4 1-1 1h-6.6a1 1 0 0 0-.7.3L8.8 19c-.3.3-.8 0-.8-.4V17c0-.6-.4-1-1-1H5a1 1 0 0 1-1-1V6c0-.6.4-1 1-1Z" />
                    </svg>
                </button>
            @endif
        </div>

        <div class="p-5 h-full rounded-2xl  py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($meal->feedbackbystudent as $student)
                <div class="px-10">
                    @php
                        $imagePath = $student->users->image
                            ? asset('storage/' . $student->users->image->path)
                            : asset('storage/empty.jpg');

                    @endphp

                    <div
                        class=" relative bg-white  max-w-xl rounded-2xl min-h-48 px-10 py-2 shadow-lg hover:shadow-2xl transition duration-500">
                        <div class="flex justify-between items-center">
                            <div class="mt-4 flex items-center justify-between space-x-4 py-3">
                                <img class="w-12 h-12 rounded-full" src="{{ $imagePath }}" alt="" />
                                <div class="text-sm font-semibold">{{ $student->users->name }}
                                </div>
                            </div>
                            <div class="flex mt-2">
                                @for ($i = 0; $i < $student->pivot->starCount; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                        </div>
                        <div>
                            <h3 class=" text-base text-gray-600 font-semibold hover:underline cursor-pointer">
                            </h3>
                            <p class="p-4 text-md text-gray-600">“ {{ $student->pivot->comment }} ”</p>
                        </div>
                        @if (Auth::user()->id == $student->user_id)
                            <form action="{{ route('feedbackDelete', $meal) }}" method="post">
                                @csrf
                               
                                <button class="">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class=" absolute bottom-2 right-2  w-7 h-7" viewBox="0 0 24 24"
                                        fill="none">
                                        <g clip-path="url(#clip0_429_11078)">
                                            <path
                                                d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 13.4876 3.36093 14.891 4 16.1272L3 21L7.8728 20C9.10904 20.6391 10.5124 21 12 21Z"
                                                stroke="#292929" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M10.0002 10L14.0002 14M10.0002 14L14.0002 10" stroke="#292929"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_429_11078">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                        @endif
                        </form>
                    </div>
                </div>
            @endforeach
        </div>



        {{-- ///////////////////////////////////////form comment////////////////////////// --}}
        <form
            class="hidden bg-orange-200 rounded-xl absolute top-[40%] left-[40%] transform -translate-x-[40%] -translate-y-[40%] z-50 justify-center items-center w-[33rem] h-[20rem] sm:fixed sm:top-[25%] sm:left-[32%] sm:transform-none sm:-translate-x-[30%] sm:-translate-y-[30%]"
            action="{{ route('feedbackStore') }}" method="post" id="rev-form">
            <input type="hidden" name="meal_id" id="meal_id" value="{{ $meal->id }}">

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
                    class="text-white inline-flex items-center bg-orange-800 hover:bg-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                    Send Review
                </button>
                <button type="button" onclick="hidereview()"
                    class="text-white inline-flex items-center hover:bg-orange-800 bg-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="w-5 mt-1 mr-1 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18 18 6m0 12L6 6" />
                    </svg>cancel</button>
            </div>
        </form>
        </div>
    </section>
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
