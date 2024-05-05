<x-client>
    <x-sweetalert></x-sweetalert>
    <section class=" bg-slate-100 p-10 py-16">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h1 class="text-4xl font-bold mb-4">Your Gateway to Comfort</h1>
                    <p class="mb-8">We have a wide range of  Rooms with exciting deals and
                        offers specially for our valuable customers.</p>
                    <form method="POST" action="{{ route('booking') }}" class="flex flex-col space-y-4">
                        @csrf
                        <input type="hidden" name="room_id" value="{{ $rooms->id }}">
                        <label for="start_date" class="text-gray-700">Start Date</label>
                        <input id="reserved_at" type="date" name="reserved_at" min="{{ now()->format('Y-m-d') }}"
                            class="border border-gray-300 rounded-md px-4 py-2 w-full sm:w-1/2">
                        <label for="finish_date" class="text-gray-700">Finish Date</label>
                        <input id="finished_at" type="date" name="finished_at"
                            class="border border-gray-300 rounded-md px-4 py-2 w-full sm:w-1/2">

                        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-md self-start">Book
                            now</button>
                    </form>


                    <div class=" space-y-4 mt-8 mb-8">
                        <div class="flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000" class="h-8 w-8 mt-2 mr-4" version="1.1" id="Layer_1"
                                viewBox="0 0 512 512" xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M469.343,53.383H42.657C19.136,53.383,0,72.513,0,96.025v163.863v68.257v60.596v55.421    c0,7.982,6.472,14.455,14.455,14.455h69.76c7.984,0,14.455-6.473,14.455-14.455v-40.966h314.659v40.966    c0,7.982,6.472,14.455,14.455,14.455h69.76c7.984,0,14.455-6.473,14.455-14.455v-55.421v-60.596v-68.257V96.025    C512,72.513,492.864,53.383,469.343,53.383z M69.76,429.707H28.91v-26.511h40.85V429.707z M84.215,374.286H28.91v-31.686h288.524    c7.984,0,14.455-6.473,14.455-14.455s-6.472-14.455-14.455-14.455H28.91v-53.802c0-13.08,10.64-23.721,23.721-23.721h28.982    h145.953h56.866h145.953h28.982c13.08,0,23.721,10.64,23.721,23.721v53.802h-64.716c-7.984,0-14.455,6.473-14.455,14.455    s6.472,14.455,14.455,14.455h64.716v31.686h-55.305H84.215z M96.069,207.259v-24.342c0-16.524,13.442-29.965,29.965-29.965h57.112    c16.524-0.001,29.965,13.442,29.965,29.965v24.342H96.069z M298.888,207.259v-24.342c0-16.524,13.442-29.965,29.965-29.965h57.112    c16.524-0.001,29.965,13.442,29.965,29.965v24.342H298.888z M483.09,429.707h-40.85v-26.511h40.85V429.707z M483.09,212.912    c-7.132-3.617-15.192-5.655-23.721-5.655h-14.527v-24.342c0-32.465-26.411-58.876-58.876-58.876h-57.112    c-32.463,0-58.876,26.411-58.876,58.876v24.342h-27.956v-24.342c0-32.465-26.411-58.876-58.876-58.876h-57.112    c-32.463,0-58.876,26.411-58.876,58.876v24.342H52.631c-8.529,0-16.589,2.038-23.721,5.655V96.025    c0-7.572,6.167-13.732,13.747-13.732h426.686c7.58,0,13.747,6.161,13.747,13.732V212.912z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M371.034,313.69h-7.589c-7.984,0-14.455,6.473-14.455,14.455s6.472,14.455,14.455,14.455h7.589    c7.984,0,14.455-6.473,14.455-14.455S379.017,313.69,371.034,313.69z" />
                                    </g>
                                </g>
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold">Room in a home</h3>
                                <p class="text-gray-600">Your own room in a home, plus access to shared spaces.</p>
                            </div>
                        </div>

                        <div class="flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg"class="h-8 w-8 mt-2 mr-4" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M17.5291 7.77C17.4591 7.76 17.3891 7.76 17.3191 7.77C15.7691 7.72 14.5391 6.45 14.5391 4.89C14.5391 3.3 15.8291 2 17.4291 2C19.0191 2 20.3191 3.29 20.3191 4.89C20.3091 6.45 19.0791 7.72 17.5291 7.77Z"
                                    fill="#292D32" />
                                <path
                                    d="M20.7916 14.7004C19.6716 15.4504 18.1016 15.7304 16.6516 15.5404C17.0316 14.7204 17.2316 13.8104 17.2416 12.8504C17.2416 11.8504 17.0216 10.9004 16.6016 10.0704C18.0816 9.8704 19.6516 10.1504 20.7816 10.9004C22.3616 11.9404 22.3616 13.6504 20.7916 14.7004Z"
                                    fill="#292D32" />
                                <path
                                    d="M6.44016 7.77C6.51016 7.76 6.58016 7.76 6.65016 7.77C8.20016 7.72 9.43016 6.45 9.43016 4.89C9.43016 3.29 8.14016 2 6.54016 2C4.95016 2 3.66016 3.29 3.66016 4.89C3.66016 6.45 4.89016 7.72 6.44016 7.77Z"
                                    fill="#292D32" />
                                <path
                                    d="M6.55109 12.8506C6.55109 13.8206 6.76109 14.7406 7.14109 15.5706C5.73109 15.7206 4.26109 15.4206 3.18109 14.7106C1.60109 13.6606 1.60109 11.9506 3.18109 10.9006C4.25109 10.1806 5.76109 9.89059 7.18109 10.0506C6.77109 10.8906 6.55109 11.8406 6.55109 12.8506Z"
                                    fill="#292D32" />
                                <path
                                    d="M12.1208 15.87C12.0408 15.86 11.9508 15.86 11.8608 15.87C10.0208 15.81 8.55078 14.3 8.55078 12.44C8.56078 10.54 10.0908 9 12.0008 9C13.9008 9 15.4408 10.54 15.4408 12.44C15.4308 14.3 13.9708 15.81 12.1208 15.87Z"
                                    fill="#292D32" />
                                <path
                                    d="M8.87078 17.9406C7.36078 18.9506 7.36078 20.6106 8.87078 21.6106C10.5908 22.7606 13.4108 22.7606 15.1308 21.6106C16.6408 20.6006 16.6408 18.9406 15.1308 17.9406C13.4208 16.7906 10.6008 16.7906 8.87078 17.9406Z"
                                    fill="#292D32" />
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold">Shared common spaces</h3>
                                <p class="text-gray-600">You'll share parts of the home with the Host and other guests.
                                </p>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000" class="h-8 w-8 mt-2 mr-4" viewBox="0 -16.33 127.9 127.9" version="1.1"
                                id="Layer_1" style="enable-background:new 0 0 127.9 95.25" xml:space="preserve">

                                <g>

                                    <path
                                        d="M98.97,22.32l-0.06-0.08c-0.31-0.45-0.93-0.55-1.37-0.24l-7.6,5.32c-0.45,0.31-0.55,0.93-0.24,1.37l0.06,0.08 c0.31,0.45,0.93,0.55,1.37,0.24l7.6-5.32C99.17,23.38,99.28,22.76,98.97,22.32L98.97,22.32L98.97,22.32z M119.01,52.32l-4.12,19.22 c-1.02,4.78-3.33,8.43-6.61,10.93c-2.27,1.73-4.98,2.88-8.03,3.45l2.7,5.78c0.58,1.25,0.04,2.74-1.21,3.32 c-1.25,0.58-2.74,0.04-3.32-1.21l-3.5-7.48H35.1l-3.5,7.48c-0.58,1.25-2.07,1.79-3.32,1.21c-1.25-0.58-1.79-2.07-1.21-3.32 l2.55-5.46c-3.9-0.34-7.1-1.59-9.68-3.73c-3.01-2.5-5.07-6.13-6.3-10.86L8.57,52.32H4.61c-1.26,0-2.41-0.52-3.25-1.35l0-0.01 l-0.01,0.01C0.52,50.13,0,48.98,0,47.71v-4.19c0-1.27,0.52-2.42,1.35-3.26c0.06-0.06,0.13-0.13,0.2-0.18 c0.81-0.73,1.88-1.17,3.05-1.17h0.61c0.17-1.82,0.87-3.54,1.95-5.04c1.1-1.54,2.62-2.85,4.35-3.75c1.74-0.91,3.71-1.42,5.7-1.36 c1.75,0.06,3.49,0.54,5.1,1.56c0.7-1.02,1.57-1.93,2.57-2.68c1.96-1.47,4.41-2.35,7.06-2.35c2.2,0,4.26,0.6,6.01,1.64 c1.37,0.81,2.55,1.9,3.47,3.18c2.79,0.22,5.31,1.41,7.2,3.23c1.55,1.5,2.67,3.42,3.16,5.56h67.25V14.1 c-1.46-7.17-5.6-9.12-11.13-8.33c2.49,4.34,2.17,8.75-1.36,13.25c0.45,0.73,0.41,1.53-0.08,2.38l-1.1,1.27 c-0.44,0.45-0.99,0.49-1.7-0.08L86.76,5.52c-0.46-0.55-0.37-1.03,0.17-1.45c1.2-1.47,1.35-1.72,3.48-1.36 c4.74-3.08,9.25-3.63,13.5-1.19c10.67-4.38,19.75,1.12,20.98,12.32l0,0V39.2c0.63,0.23,1.19,0.6,1.65,1.06 c0.83,0.83,1.35,1.99,1.35,3.26v4.19c0,1.27-0.52,2.42-1.35,3.26c-0.83,0.83-1.99,1.35-3.25,1.35H119.01L119.01,52.32z M89.4,14.1 l-0.06-0.08c-0.31-0.45-0.93-0.55-1.37-0.24l-7.6,5.32c-0.45,0.31-0.55,0.93-0.24,1.37l0.06,0.08c0.31,0.45,0.93,0.55,1.37,0.24 l7.6-5.32C89.61,15.16,89.71,14.54,89.4,14.1L89.4,14.1L89.4,14.1z M85.03,9.7l-0.06-0.08c-0.31-0.45-0.93-0.55-1.37-0.24 l-7.6,5.32c-0.45,0.31-0.55,0.93-0.24,1.37l0.06,0.08c0.31,0.45,0.93,0.55,1.37,0.24l7.6-5.32C85.23,10.76,85.34,10.14,85.03,9.7 L85.03,9.7L85.03,9.7z M93.76,18.35l-0.06-0.08c-0.31-0.45-0.93-0.55-1.37-0.24l-7.6,5.32c-0.45,0.31-0.55,0.93-0.24,1.37 l0.06,0.08c0.31,0.45,0.93,0.55,1.37,0.24l7.61-5.32C93.96,19.41,94.07,18.8,93.76,18.35L93.76,18.35L93.76,18.35z M10.29,38.91 h36.25c-0.32-0.74-0.79-1.4-1.37-1.95c-1.19-1.15-2.84-1.86-4.67-1.86c-0.28,0,0.02-0.01-0.17-0.01l-0.17,0.01 c-0.94,0.04-1.87-0.45-2.33-1.34c-0.54-1.03-1.38-1.9-2.41-2.51c-1-0.59-2.19-0.94-3.46-0.94c-1.54,0-2.95,0.5-4.06,1.33 c-1.11,0.84-1.94,2.01-2.3,3.35c-0.12,0.51-0.41,0.99-0.85,1.35c-1.07,0.87-2.65,0.71-3.52-0.36c-1.23-1.51-2.71-2.17-4.16-2.22 c-1.1-0.04-2.22,0.26-3.23,0.79c-1.02,0.54-1.92,1.32-2.59,2.24C10.78,37.45,10.44,38.17,10.29,38.91L10.29,38.91z M8.5,43.93 c-0.4,0.1-0.8,0.09-1.18,0h-2.3v3.36h117.86v-3.36H8.5L8.5,43.93z M13.74,52.32l4.74,18.07c0.96,3.68,2.48,6.45,4.66,8.25 c2.13,1.77,5,2.67,8.73,2.67h63.75c3.86,0,7.15-0.95,9.61-2.82c2.34-1.78,3.99-4.45,4.75-7.99l3.9-18.18H13.74L13.74,52.32z" />

                                </g>
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold">Shared bathroom</h3>
                                <p class="text-gray-600">You'll share the bathroom with others.</p>
                            </div>
                        </div>
                        
                    </div>



                </div>
                <div>
                    <img src="{{ asset('storage/' . $rooms->image->path) }}" alt="Hotel Room"
                        class="rounded-lg shadow-md">
                    <div class="bg-gray-500 text-white p-4 rounded-lg shadow-md mt-4">
                        <h3 class="font-bold mb-2">Room: {{ $rooms->roomNumber }} </h3>
                        <p class="ml-3 mb-2">{{ $rooms->description }}</p>
                        <p class="font-semibold">Price: {{ $rooms->price }} $</p>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="text-3xl font-bold mb-4">About</h2>
                <p class="text-lg text-gray-700 leading-relaxed shadow-md p-4">
                    Welcome to One Hand, where comfort meets convenience, tailored exclusively for students like
                    you! Dive into the ultimate blend of relaxation and practicality with our handpicked
                    selection of student-friendly rooms. Whether you're diving into textbooks or exploring the
                    city, our rooms offer a haven where you can rejuvenate after a day of lectures or
                    adventures. From cozy study nooks to essential amenities, each room is crafted to surpass
                    your needs and enhance your student living experience. Don't miss out on the chance to
                    unwind and thrive in an environment designed just for you. Reserve your room today and
                    embark on a journey of unmatched comfort and convenience with One Hand. Your ideal student
                    sanctuary awaits!
                </p>
            </div>
        </div>
    </section>


</x-client>
