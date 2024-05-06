<x-guest>
    <x-errorrole></x-errorrole>
    <h1 class="mb-8 text-3xl text-center">Log in</h1>

    <form id="myForm" onsubmit="return validateForm()" action="{{ route('login.authenticate') }}" method="post">
        @csrf

        <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="email" id="email"
            placeholder="Email" />

        <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
            id="password" placeholder="Password" />
        <x-error-message :messages="$errors->get('email')" class="mb-3" />

        <button type="submit"
            class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-dark focus:outline-none my-1">Log
            in</button>
    </form>

    <div class="text-center text-grey-dark mt-3">
        Don't have an account?
        <a href="{{ route('register.index') }}"
            class="hover:underline border-b border-blue text-blue hover:text-blue-900">Sign up</a>.
    </div>

    <script>
        function validateForm() {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const emailregex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            // const passwordregex = /^[^a-zA-Z]$/;

            if (!email.match(emailregex)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Input Error',
                    text: 'Please provide a valid email address'
                });
                return false;
            }

            if (!passwordregex.test(password)) {
                // alert('password is full');
                Swal.fire({
                    icon: 'error',
                    title: 'Input Error',
                    text: 'Password must be 8 caracter'
                });
                return false;
            }
            return true

        }
    </script>
</x-guest>
