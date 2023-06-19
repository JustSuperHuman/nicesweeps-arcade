<x-app>
    <div class="container max-w-screen-md py-16 text-white">
        <h1 class="text-5xl font-bold text-center uppercase">I forgot my password</h1>

        <form method="POST" action="{{ route('login') }}" class="grid gap-4 mt-8">
            @csrf

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="block w-full px-4 py-3 mt-1 text-gray-600 placeholder-gray-300 rounded" />
                @error('password')
                    <span class="inline-block mt-2 text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <button class="px-4 py-3 mt-4 font-semibold uppercase rounded-md bg-gradient-to-r from-blue-600 to-blue-700">
                Send password reset link
            </button>
        </form>
    </div>
</x-app>
