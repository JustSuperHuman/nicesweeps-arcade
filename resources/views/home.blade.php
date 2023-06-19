<x-app>
    @php
    $bgColors = collect(['bg-purple-400', 'bg-red-400', 'bg-green-400', 'bg-yellow-400', 'bg-blue-400', 'bg-pink-400', 'bg-orange-400', 'bg-indigo-400', 'bg-lime-400', 'bg-rose-400']);
    @endphp

    <div class="container max-w-screen-md py-16">
        <h1 class="text-xl font-semibold">Games</h1>

        @if ($highlighted_games->isNotEmpty())
            <div class="grid grid-cols-2 gap-4 mt-4">
                @foreach ($highlighted_games as $game)
                    <a href="#" class="flex items-end p-4 rounded-xl aspect-video {{ $bgColors->random() }}">
                        <div class="font-semibold text-xl/6">{{ $game->name }}</div>
                    </a>
                @endforeach
            </div>
        @endif

        <ul class="grid gap-4 mt-8">
            @foreach ($games as $game)
                <li class="flex items-center gap-4 text-lg font-semibold">
                    <div class="rounded-lg aspect-square w-6 h-6 {{ $bgColors->random() }}"></div>
                    {{ $game->name }}
                </li>
            @endforeach
        </ul>
    </div>
</x-app>
