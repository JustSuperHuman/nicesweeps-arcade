<x-app>
    <div class="container max-w-screen-md py-16 text-white">
        <h1 class="text-3xl text-center">Log in</h1>

        <form method="POST" action="{{ route('login') }}" class="grid gap-4 mt-8">
            @csrf

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="johnsmith@example.com" required class="block w-full px-4 py-3 mt-1 text-gray-600 placeholder-gray-300 rounded" />
                @error('email')
                    <span class="inline-block mt-2 text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required class="block w-full px-4 py-3 mt-1 text-gray-600 placeholder-gray-300 rounded" />
                @error('password')
                    <span class="inline-block mt-2 text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <x-forms.submit>
                Log in
            </x-forms.submit>
        </form>

        <div class="mt-16 bg-[#0d184b] p-4 rounded text-center">
            Did you forget your password? <a href="{{ route('password.email') }}" class="text-blue-300">Ask for a new one.</a>
        </div>
    </div>
</x-app>
