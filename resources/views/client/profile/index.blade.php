<x-client>
    <!-- This is an example component -->
    @if (session()->has('message'))
        @stack('scripts')
        <script>
            Swal.fire({
                title: '{{ session('operationSuccessful') ? 'Success' : 'Error' }}!',
                icon: '{{ session('operationSuccessful') ? 'success' : 'error' }}',
                confirmButtonText: 'Ok',
                html: '{{ session('message') }}'
            })
        </script>
    @endif
    <div class="border-b-2 bg-slate-50 block md:flex pt-20 pb-7 p-3">
        <div class="w-full md:w-2/5 p-4 sm:p-6 lg:p-8 bg-white shadow-md">
            <form action="{{ route('storeProfileImg') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex justify-between">
                    <span class="text-xl font-semibold block">Admin Profile</span>
                </div>
                <span class="text-gray-600">This information is secret so be careful</span>
                <div class="w-full p-8 mx-2 flex justify-center">
                    @if ($profileData->image == null)
                        <img src="{{ asset('storage/profile.webp') }}"
                            class="w-[300px] h-[280px] inline-block shrink-0 rounded-full" alt="">
                    @else
                        <img src="{{ asset('storage/' . $profileData->image->path) }}"
                            class="w-[300px] h-[280px] inline-block shrink-0 rounded-full" alt="">
                    @endif
                </div>
                <input type="hidden" name="id" value="{{ $profileData->id }}">
                <input type="file" name="image" :value="old('image[]')" id="image">
                <button type="submit"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-2 block mx-auto">
                    Save Changes
                </button>
            </form>
        </div>
        <div class="w-full md:w-3/5 p-8 bg-white lg:ml-4 shadow-md">
            <div class="rounded  shadow p-6">
                <div class="pb-6">
                    <label for="name" class="font-semibold text-gray-700 block pb-1">Name</label>
                    <div class="flex">
                        <input disabled id="username" class="border-1 bg-gray-200 rounded-r px-4 py-2 w-full"
                            type="text" value="{{ $profileData->name }}" />
                    </div>
                </div>
                <div class="pb-4">
                    <label for="about" class="font-semibold text-gray-700 block pb-1">Email</label>
                    <input disabled id="email" class="border-1 bg-gray-200 rounded-r px-4 py-2 w-full"
                        type="email" value="{{ $profileData->email }}" />
                    <span class="text-gray-600 pt-4 block opacity-70">Personal login information of your
                        account</span>
                </div>
            </div>
        </div>
    </div>

</x-client>
