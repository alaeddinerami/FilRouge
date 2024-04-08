<x-guest>
    <h1 class="mb-8 text-3xl text-center">Log in</h1>

    <form action="{{ route('login.authenticate') }}" method="post">
        @csrf
        
        <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="email"
            placeholder="Email" />

        <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
            placeholder="Password" />

        <button type="submit"
            class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-dark focus:outline-none my-1">Log in</button>
    </form>
        
    <div class="text-grey-dark mt-3">
        <a href="{{ route('passwordrest.index') }}" class="hover:text-blue-900 hover:underline">Forgot your password?</a>
    </div>
    
    <div class="text-center text-grey-dark mt-3">
        Don't have an account?
        <a href="{{ route('register.index') }}" class="hover:underline border-b border-blue text-blue hover:text-blue-900">Sign up</a>.
    </div>
</x-guest>
