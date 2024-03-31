<x-dashboard>
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

    <div class="p-5 flex items-center flex-wrap">
      <ul class="flex items-center">
          <li class="inline-flex items-center">
              <a href="/dashboard" class="hover:text-blue-500">
                  <svg class="w-5 h-auto fill-current " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                      fill="#000000">
                      <path d="M0 0h24v24H0V0z" fill="none" />
                      <path
                          d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1z" />
                  </svg>
              </a>
              <span class="mx-4 h-auto text-gray-400 font-medium">/</span>
          </li>
          <li class="inline-flex items-center">
              <a href="" class="hover:text-blue-500">Dashboard</a>
              <span class="mx-4 h-auto text-gray-400 font-medium">/</span>
          </li>
          <li class="inline-flex items-center">
              <a href="" class="hover:text-blue-500">Students</a>
          </li>
      </ul>
  </div>
        <section class="w-full m-5 md:flex flex-wrap ">
    <div class="flex flex-wrap items-center justify-center bg-gray-100 mb-5 mr-8 border md:w-1/6  flex-col rounded-xl">
        <img src='https://readymadeui.com/team-1.webp' class="w-20 h-20 rounded-full" />
        <h4 class=" text-xl font-bold mt-3 uppercase">alaeddine</h4>
        <p class="text-l font-medium text-gray-700 mt-1 uppercase">Safi</p>
        <button   class="m-3 rounded-lg bg-red-500 px-5 py-1 font-sans text-xs font-bold uppercase text-white "
        >Ban</button>
        <button   class="m-3 rounded-lg bg-green-500 px-5 py-1 font-sans text-xs font-bold uppercase text-white "
        >Unban</button>
    </div>
    <div class="flex flex-wrap items-center justify-center bg-gray-100 mb-5 mr-8 border md:w-1/6  flex-col rounded-xl">
        <img src='https://readymadeui.com/team-1.webp' class="w-20 h-20 rounded-full" />
        <h4 class=" text-xl font-bold mt-3 uppercase">alaeddine</h4>
        <p class="text-l font-medium text-gray-700 mt-1 uppercase">Safi</p>
        <button   class="m-3 rounded-lg bg-red-500 px-5 py-1 font-sans text-xs font-bold uppercase text-white "
        >Ban</button>
        <button   class="m-3 rounded-lg bg-green-500 px-5 py-1 font-sans text-xs font-bold uppercase text-white "
        >Unban</button>
    </div>
    <div class="flex flex-wrap items-center justify-center bg-gray-100 mb-5 mr-8 border md:w-1/6  flex-col rounded-xl">
        <img src='https://readymadeui.com/team-1.webp' class="w-20 h-20 rounded-full" />
        <h4 class=" text-xl font-bold mt-3 uppercase">alaeddine</h4>
        <p class="text-l font-medium text-gray-700 mt-1 uppercase">Safi</p>
        <button   class="m-3 rounded-lg bg-red-500 px-5 py-1 font-sans text-xs font-bold uppercase text-white "
        >Ban</button>
        <button   class="m-3 rounded-lg bg-green-500 px-5 py-1 font-sans text-xs font-bold uppercase text-white "
        >Unban</button>
    </div>
   
</section>








</x-dashboard>
