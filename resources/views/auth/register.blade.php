<x-app>
    <div class="container max-w-screen-md py-16 text-white">
        <h1 class="text-5xl font-bold text-center uppercase">Register</h1>

        <form method="POST" action="{{ route('register') }}" class="grid gap-4 mt-8">
            @csrf

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="John Smith" class="block w-full px-4 py-3 mt-1 placeholder-gray-300 rounded" />
                @error('name')
                    <span class="inline-block mt-2 text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="johnsmith@example.com" class="block w-full px-4 py-3 mt-1 placeholder-gray-300 rounded" />
                @error('email')
                    <span class="inline-block mt-2 text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="block w-full px-4 py-3 mt-1 placeholder-gray-300 rounded" />
                @error('password')
                    <span class="inline-block mt-2 text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password-confirmation">Password Confirmation</label>
                <input type="password" name="password_confirmation" id="password-confirmation" class="block w-full px-4 py-3 mt-1 placeholder-gray-300 rounded" />
                @error('password_confirmation')
                    <span class="inline-block mt-2 text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <button class="px-4 py-3 mt-4 font-semibold uppercase rounded-md bg-gradient-to-r from-blue-600 to-blue-700">
                Register
            </button>
        </form>
    </div>
</x-app>
