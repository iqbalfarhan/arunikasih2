<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? config('app.name') }}</title>
        @vite('resources/css/app.css')
    </head>

    <body>
        @auth
            <div class="drawer lg:drawer-open">
                <input id="drawer" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    @livewire('partial.navbar')
                    <div class="p-6 space-y-6">
                        @livewire('partial.header', ['title' => $title ?? config('app.name')])
                        {{ $slot }}
                    </div>
                </div>
                <div class="drawer-side scrollbar-hide">
                    <label for="drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                    @livewire('partial.sidebar')
                </div>
            </div>
        @endauth

        @guest
            <div class="grid place-content-center h-screen">
                <div class="text-4xl font-semibold text-center w-full text-primary mb-4">{{ config('app.name') }}</div>
                {{ $slot }}
            </div>
        @endguest
    </body>

</html>
