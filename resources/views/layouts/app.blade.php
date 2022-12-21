<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

        @livewireStyles()
    </head>
    <body>
        <div class="app">
             <x-menu></x-menu>
             <x-top-bar></x-top-bar>
            {{ $slot }}
        </div>

        @livewireScripts()
        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"</script>
    </body>
</html>