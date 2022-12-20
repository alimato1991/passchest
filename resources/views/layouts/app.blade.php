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
            <div class="primary-menu">
                <ul class="menu">
                    <li class="menu-item">
                        <a href="/">Logins</a>
                    </li>
                    <li class="menu-item">
                        <a href="/notes">Secure Notes</a>
                    </li>
                </ul>
            </div> 
            {{ $slot }}
        </div>

        @livewireScripts()
    </body>
</html>
