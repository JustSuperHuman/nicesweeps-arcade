<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
        <meta name="description" content="{{ $description ?? '' }}" />
        <meta property="og:title" content="{{ $title ?? config('app.name') }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:creator" content="@benjamincrozat" />
        <meta name="twitter:description" content="{{ $description ?? '' }}" />
        <meta name="twitter:title" content="{{ $title ?? config('app.name') }}" />

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @if (! app()->runningUnitTests())
            @googlefonts
        @endif

        <link rel="canonical" href="{{ url()->current() }}" />

        @stack('head')
    </head>
    <body {{ $attributes->merge(['class' => 'bg-gradient-to-r from-[#060a2f] to-[#0e174c]']) }}>
        <div class="bg-white/[.02] text-white">
            <nav class="container max-w-screen-md py-8">
                <ul class="flex items-center justify-end gap-16">
                    <li>
                        <a
                            href="{{ route('home') }}"
                            class="font-semibold text-current uppercase"
                        >
                            Home
                        </a>
                    </li>

                    @auth
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button class="font-semibold text-current uppercase">
                                    Log out
                                </button>
                            </form>
                        </li>
                    @else
                        <li>
                            <a
                                href="{{ route('login') }}"
                                class="font-semibold text-current uppercase"
                            >
                                Log in
                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ route('register') }}"
                                @if (Route::is('register'))
                                    class="px-4 py-3 font-semibold uppercase rounded-md bg-white/5"
                                @else
                                    class="px-4 py-3 font-semibold uppercase rounded-md bg-gradient-to-b from-red-500 to-red-600"
                                @endif
                            >
                                <span class="@if (! Route::is('register')) text-transparent bg-clip-text bg-gradient-to-b from-yellow-100 to-yellow-400 @endif">
                                    Register
                                </span>
                            </a>
                        </li>
                    @endauth
                </ul>
            </nav>
        </div>

        {{ $slot }}
    </body>
</html>
