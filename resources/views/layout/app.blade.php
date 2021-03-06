<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mystagram | @yield('title')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-5 flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    <a href="/">
                        Mystagram
                    </a>
                </h1>
                <nav class="flex gap-2 items-center">
                    <a class="font-bold uppercase text-gray-600 text-sm" 
                        href="{{ route('singin') }}">
                        Login
                    </a>
                    <a class="font-bold uppercase text-gray-600 text-sm" 
                    href="{{ route('singup') }}">
                        Crear cuenta
                    </a>
                </nav>
            </div>
        </header>
        <main class="container mx-auto mt-10">

            <h2 class="font-black text-center text-3xl">
                @yield('title')
            </h2>

            @yield('content')

        </main>
        <footer class="text-center p-5 text-gray-500 font-bold mt-10">
            All rights reserved | Jose Galdamez | Mystagram © {{ now()->year }}
        </footer>
    </body>
</html>
