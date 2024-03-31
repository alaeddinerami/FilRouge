<x-client>
    @push('vite')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
    @endpush
    @if (session()->has('message'))
        @push('scripts')
            <script>
                Swal.fire({
                    title: '{{ session('operationSuccessful') ? 'Success' : 'Error' }}!',
                    icon: '{{ session('operationSuccessful') ? 'success' : 'error' }}',
                    confirmButtonText: 'Ok',
                    html: '{{ session('message') }}'
                })
            </script>
        @endpush
    @endif
       {{-- -------------------------------------------------- edit modal ----------------------------------------------- --}}

       <div id="edit-modal" tabindex="-1" aria-hidden="true"
       class="hidden overflow-y-auto overflow-x-hidden fixed  top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
       <div class="relative p-4 w-full max-w-md max-h-full">
           <!-- Modal content -->
           <div class="relative bg-white rounded-lg shadow">
               <!-- Modal header -->
               <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                   <h3 class="text-lg font-semibold text-gray-900">
                       Edit Article
                   </h3>
                   <button type="button"
                       class="text-blue-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                       data-modal-toggle="edit-modal">
                       <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                           viewBox="0 0 14 14">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                               stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                       </svg>
                       <span class="sr-only">Close modal</span>
                   </button>
               </div>
               <!-- Modal body -->
               <form class="p-4 md:p-5" method="post" action="" id="edit_form" enctype="multipart/form-data"
                   onsubmit="return validateForm()">
                   @csrf
                   <div class="grid gap-6 mb-4 grid-cols-2">
                       <div class="col-span-2">
                           <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name Article
                           </label>
                           <input type="name article" name="name" id="name"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                               placeholder="Name article">
                       </div>
                       <div class="col-span-2">
                           <label for="description"
                               class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                           <textarea name="description" id="description"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                               placeholder="Description"></textarea>
                       </div>
                       <div class="col-span-2">
                           <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
                           <input type="file" name="image" :value="old('image')" id="image"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                               placeholder="Actor's full name">
                       </div>
                   </div>
                   <button type="submit"
                       class="text-white inline-flex justify-center items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-full">
                       <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                           xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd"
                               d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                               clip-rule="evenodd"></path>
                       </svg>
                       <p>Edit Article</p>
                   </button>
               </form>
           </div>
       </div>
   </div>
    <div class="font-[sans-serif] text-gray-800 bg-gray-200 mt-5 rounded-2xl  px-6 py-12">
        <div class="grid lg:grid-cols-2 gap-8 max-lg:max-w-2xl mx-auto">
            <div class="text-left">
                <h2 class="text-4xl font-extrabold mb-6">Article</h2>
                <p class="mb-4 text-sm">For the use of digital object identifiers on Wikipedia, see Wikipedia:Digital
                    Object Identifier.
                    Digital object identifier

                    Full name Digital object identifier
                    Acronym DOI
                    Organisation International DOI Foundation
                    Introduced 2000; 24 years ago
                    Example 10.1000/182
                    Website www.doi.org Edit this at Wikidata
                    A digital object identifier (DOI) is a persistent identifier or handle used to uniquely identify
                    various objects, standardized by the International Organization for Standardization (ISO).[1] DOIs
                    are an implementation of the Handle System;[2][3] they also fit within the URI system (Uniform
                    Resource Identifier). They are widely used to identify academic, professional, and government
                    information, such as journal articles, research reports, data sets, and official publications.

                </p>

                <div class="grid xl:grid-cols-3 sm:grid-cols-2 gap-8 mt-12">

                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="_x32_"
                            viewBox="0 0 512 512" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #000000;
                                }
                            </style>
                            <g>
                                <rect x="119.256" y="222.607" class="st0" width="50.881" height="50.885" />
                                <rect x="341.863" y="222.607" class="st0" width="50.881" height="50.885" />
                                <rect x="267.662" y="222.607" class="st0" width="50.881" height="50.885" />
                                <rect x="119.256" y="302.11" class="st0" width="50.881" height="50.885" />
                                <rect x="267.662" y="302.11" class="st0" width="50.881" height="50.885" />
                                <rect x="193.46" y="302.11" class="st0" width="50.881" height="50.885" />
                                <rect x="341.863" y="381.612" class="st0" width="50.881" height="50.885" />
                                <rect x="267.662" y="381.612" class="st0" width="50.881" height="50.885" />
                                <rect x="193.46" y="381.612" class="st0" width="50.881" height="50.885" />
                                <path class="st0"
                                    d="M439.277,55.046h-41.376v39.67c0,14.802-12.195,26.84-27.183,26.84h-74.025   c-14.988,0-27.182-12.038-27.182-26.84v-39.67h-67.094v39.297c0,15.008-12.329,27.213-27.484,27.213h-73.424   c-15.155,0-27.484-12.205-27.484-27.213V55.046H72.649c-26.906,0-48.796,21.692-48.796,48.354v360.246   c0,26.661,21.89,48.354,48.796,48.354h366.628c26.947,0,48.87-21.692,48.87-48.354V103.4   C488.147,76.739,466.224,55.046,439.277,55.046z M453.167,462.707c0,8.56-5.751,14.309-14.311,14.309H73.144   c-8.56,0-14.311-5.749-14.311-14.309V178.089h394.334V462.707z" />
                                <path class="st0"
                                    d="M141.525,102.507h53.392c4.521,0,8.199-3.653,8.199-8.144v-73.87c0-11.3-9.27-20.493-20.666-20.493h-28.459   c-11.395,0-20.668,9.192-20.668,20.493v73.87C133.324,98.854,137.002,102.507,141.525,102.507z" />
                                <path class="st0"
                                    d="M316.693,102.507h54.025c4.348,0,7.884-3.513,7.884-7.826V20.178C378.602,9.053,369.474,0,358.251,0H329.16   c-11.221,0-20.349,9.053-20.349,20.178v74.503C308.81,98.994,312.347,102.507,316.693,102.507z" />
                            </g>
                        </svg>
                        <h6 class="text-base font-semibold ml-4">
                            {{-- {{ \Carbon\Carbon::parse($event->date)->formatLocalized('%d %B %Y') }} --}}
                        </h6>
                    </div>


                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M11 15C10.1183 15 9.28093 14.8098 8.52682 14.4682C8.00429 14.2315 7.74302 14.1131 7.59797 14.0722C7.4472 14.0297 7.35983 14.0143 7.20361 14.0026C7.05331 13.9914 6.94079 14 6.71575 14.0172C6.6237 14.0242 6.5425 14.0341 6.46558 14.048C5.23442 14.2709 4.27087 15.2344 4.04798 16.4656C4 16.7306 4 17.0485 4 17.6841V19.4C4 19.9601 4 20.2401 4.10899 20.454C4.20487 20.6422 4.35785 20.7951 4.54601 20.891C4.75992 21 5.03995 21 5.6 21H8.4M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7ZM12.5898 21L14.6148 20.595C14.7914 20.5597 14.8797 20.542 14.962 20.5097C15.0351 20.4811 15.1045 20.4439 15.1689 20.399C15.2414 20.3484 15.3051 20.2848 15.4324 20.1574L19.5898 16C20.1421 15.4477 20.1421 14.5523 19.5898 14C19.0376 13.4477 18.1421 13.4477 17.5898 14L13.4324 18.1574C13.3051 18.2848 13.2414 18.3484 13.1908 18.421C13.1459 18.4853 13.1088 18.5548 13.0801 18.6279C13.0478 18.7102 13.0302 18.7985 12.9948 18.975L12.5898 21Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h6 class="text-base font-semibold ml-4">bafjbnaoj oajbnaojefb oenfbfb </h6>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="" class="w-7 h-7" viewBox="0 0 1024 1024" class="icon" version="1.1">
                            <path
                                d="M406.162286 94.061714l12.653714 65.316572a365.933714 365.933714 0 0 0-267.264 501.540571l-61.220571 25.892572a432.420571 432.420571 0 0 1 315.830857-592.749715z m-193.828572 757.028572l42.569143-51.2a364.105143 364.105143 0 0 0 233.764572 84.48c87.771429 0 170.642286-31.012571 236.251428-86.528l43.008 50.761143A430.665143 430.665143 0 0 1 488.594286 950.857143a430.665143 430.665143 0 0 1-276.260572-99.766857z m426.422857-666.331429a135.68 135.68 0 1 1 7.753143-68.754286 432.713143 432.713143 0 0 1 268.873143 332.8c1.462857 9.069714 2.706286 21.065143 3.803429 35.986286a31.451429 31.451429 0 0 1-31.451429 33.718857 34.889143 34.889143 0 0 1-34.816-32.329143 366.153143 366.153143 0 0 0-214.162286-301.348571z m-126.464 29.403429a78.555429 78.555429 0 1 0 0-157.037715 78.555429 78.555429 0 0 0 0 157.037715z m-320.658285 672.914285a135.68 135.68 0 1 1 0-271.286857 135.68 135.68 0 0 1 0 271.36z m0-57.051428a78.555429 78.555429 0 1 0 0-157.110857 78.555429 78.555429 0 0 0 0 157.110857z m640.731428 57.051428a135.68 135.68 0 1 1 0-271.286857 135.68 135.68 0 0 1 0 271.36z m0-57.051428a78.555429 78.555429 0 1 0 0-157.110857 78.555429 78.555429 0 0 0 0 157.110857z"
                                fill="#000000" />
                        </svg>
                        <h6 class="text-base font-semibold ml-4">djfsb aojfnboe beojfnbqejb</h6>
                    </div>

                </div>

            </div>
            <div class="flex justify-center items-center">
                <img src="/storage/hero.jpg" alt="Placeholder Image" class="rounded-lg object-cover w-full h-full" />
            </div>

        </div>
        <button
        data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="inline-block mt-6 px-6 py-2.5 bg-blue-500 text-white text-base font-medium rounded-md hover:bg-blue-600">Edit
        </button>
        <button
            class="inline-block mt-6 px-6 py-2.5 bg-red-500 text-white text-base font-medium rounded-md hover:bg-red-600">Cancel
        </button>
    </div>
    @push('vite')
    @vite('resources/js/articleEditModal.js')
    @endpush
</x-client>
