<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite('resources/css/app.css')

    </head>
    <body class="bg-sky-100">
        <div class=" max-w-5xl mx-auto  p-6">
            {{ $slot }}
        </div>
    </body>
</html>
