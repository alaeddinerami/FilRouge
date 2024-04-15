<x-guest>
    <h1 class="mb-8 text-3xl text-center">Sign up</h1>
    <form action="{{ route('register.store') }}" method="post">
        @csrf
        <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="name"
            placeholder="Full Name"  />
            <x-error-message :messages="$errors->get('name')" class="mb-3"/>

        <input type="email" class="block border border-grey-light w-full p-3 rounded mb-4" name="email"
            placeholder="Email"  />
            <x-error-message :messages="$errors->get('email')" class="mb-3"/>
        <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
            placeholder="Password"  />
            <x-error-message :messages="$errors->get('password')" class="mb-3"/>
        <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4"
            name="password_confirmation" placeholder="Confirm Password"  />
        <input type="hidden" name="role" value="student">

        <button type="submit"
            class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-dark focus:outline-none my-1">Create
            Account</button>

        <div class="text-center text-grey-dark mt-6">
            Already have an account?
            <a class="no-underline border-b border-blue text-blue" href="{{ route('login.index') }}">Log in</a>.
        </div>
    </form>
</x-guest>
