<x-guest>


    <h1 class="mb-8 text-3xl text-center">Sign up</h1>
    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="fullname"
        placeholder="Full Name" />

    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="email"
        placeholder="Email" />

    <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
        placeholder="Password" />
    <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="confirm_password"
        placeholder="Confirm Password" />

    <button type="submit"
        class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-dark focus:outline-none my-1">Create
        Account</button>


    <div class=" text-center text-grey-dark mt-6">
        Already have an account?
        <a class="no-underline border-b border-blue text-blue" href="{{ route('login.index') }}">
            Log in
        </a>.
    </div>


</x-guest>
