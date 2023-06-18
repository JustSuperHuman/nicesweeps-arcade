<x-app>
    <div class="container max-w-screen-md py-16 text-white">
        <h1 class="text-5xl font-bold text-center uppercase">Log in</h1>

        <form method="POST" action="{{ route('login') }}" class="grid gap-4 mt-8">
            @csrf

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="johnsmith@example.com" class="block w-full px-4 py-3 mt-1 placeholder-gray-300 rounded" />
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="block w-full px-4 py-3 mt-1 placeholder-gray-300 rounded" />
            </div>
        </form>
    </div>
</x-app>
