<x-app>
    <div class="container max-w-screen-md py-16 text-white">
        <h1 class="text-3xl text-center">I forgot my password</h1>

        <form method="POST" action="{{ route('login') }}" class="grid gap-4 mt-8">
            @csrf

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required class="block w-full px-4 py-3 mt-1 text-gray-600 placeholder-gray-300 rounded" />
                @error('password')
                    <span class="inline-block mt-2 text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <x-forms.submit>
                Send password reset link
            </x-forms.submit>
        </form>
    </div>
</x-app>
