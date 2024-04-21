<x-client>

    <x-sweetalert></x-sweetalert>

    <div id="indicators-carousel" class="relative w-full " data-carousel="static" style="height: 100vh">
        <!-- Carousel wrapper -->
        <div class="relative h-full overflow-hidden rounded-lg md:h-full">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="/storage/hero.jpg"
                    class="bg-custom absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                <div class="absolute inset-0 bg-black opacity-30"></div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out " data-carousel-item>
                <img src="/storage/hero.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute inset-0 bg-black opacity-30"></div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/storage/hero.jpg" 
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute inset-0 bg-black opacity-30"></div>
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/storage/hero.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute inset-0 bg-black opacity-30"></div>
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/storage/hero.jpg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute inset-0 bg-black opacity-30"></div>
            </div>
        </div>
       
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    {{-- --------------------------------------------------crude modale --------------------------------------------- --}}

    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed  top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Add New Article
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" method="post" action="{{ route('article.store') }}"
                    enctype="multipart/form-data" onsubmit="return validateForm()">
                    @csrf
                    <div class="grid gap-6 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Name Article
                            </label>
                            <input type="text" name="title" id="title"
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
                        <input type="hidden" name='user_id'value='{{ Auth::user()->id }}'>

                        <div class="col-span-2">
                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
                            <input type="file" name="image" :value="old('image[]')" id="image"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Actor's full name">
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex justify-center items-center bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-full">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <p>Add Article</p>
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ------------------------------------------------search modal button ------------------------------------------------------- --}}

    <section class="p-5">
        <div class="w-full flex md:justify-between justify-center flex-wrap items-center px-2 gap-5">
            <input type="text" name="search" id="search" placeholder="Search..."
                class="px-2 py-1 rounded-lg border-none bg-gray-200 focus:outline-none text-black">
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                class="block text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="button">
                Add Article
            </button>
        </div>
        <div id="articleContainer" class="articlesDisplay mt-5 flex flex-wrap gap-4">
            <!-- Articles will be displayed here -->
        </div>
        <h1 class="text-center mb-10 text-2xl text-black font-bold">Articles</h1>
        <div class="articlesDisplay mt-5  flex flex-wrap gap-4">
            @foreach ($articles as $article)
            <a href="{{ route('article.show', $article) }}"
                class="max-w-sm mx-auto min-w-[22rem] group bg-slate-200 rounded-lg hover:no-underline focus:no-underline dark:bg-gray-900 ">
                @php
                $imagePath = $article->image ? asset('storage/' . $article->image->path) : asset('storage/empty.jpg');
                $userName = $article->user ? $article->user->name : 'Unknown';
                @endphp
                <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="{{ $imagePath }}">
                <div class="p-6 space-y-2">
                    <h3 class="text-2xl text-black font-semibold group-hover:underline group-focus:underline">
                        {{ $article->title }}</h3>
                    <span class="text-xs dark:text-gray-400">
                        {{ $article->updated_at->formatLocalized('%d %B %Y') }}
                    </span>
                    <p>
                        {{ Str::limit($article->description, 90, '...') }}
                    </p>
                    <div class="flex gap-4">
                        <svg xmlns="" class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                            <!-- User icon -->
                        </svg>
                        <span>
                            {{ $userName }}
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="mt-5">
            {{ $articles->links() }}
        </div>
    </section>
    
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val().trim();
                
                if (query !== '') {
                    $.ajax({
                        type: "get",
                        url: "{{ route('search') }}",
                        data: {
                            search: query
                        },
                        success: function(response) {
                             $('#articleContainer').empty(); // Clear previous search results
    
                            if (response.original && response.original.length > 0) {
                                response.original.forEach(function(article) {
                                    var imagePath = article.image ? '{{ asset('storage/') }}/' + article.image.path : '{{ asset('storage/empty.jpg') }}';
                                    var userName = article.user ? article.user.name : 'Unknown';
                                    var articleHtml = `
                                    <a href="{{ route('article.show', '') }}/${article.id}"
                                        class="max-w-sm mx-auto min-w-[22rem] group bg-slate-200 rounded-lg hover:no-underline focus:no-underline dark:bg-gray-900 ">
                                        <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                                            src="${imagePath}">
                                        <div class="p-6 space-y-2">
                                            <h3 class="text-2xl text-black font-semibold group-hover:underline group-focus:underline">
                                                ${article.title}</h3>
                                            <span class="text-xs dark:text-gray-400">
                                                ${article.updated_at}
                                            </span>
                                            <p>
                                                ${article.description.substring(0, 60)}
                                            </p>
                                            <div class="flex gap-4">
                                                <svg xmlns="" class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                                                    <!-- User icon -->
                                                </svg>
                                                <span>
                                                    ${userName}
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                `;
                                    $('#articleContainer').append(articleHtml);
                                });
                            } else {
                                $('#articleContainer').html('<p>No articles found.</p>');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                } else {
                    $('#articleContainer').empty(); // Clear the search results or display a message indicating that the search query is empty
                }
            });
        });
    </script>
</x-client>    