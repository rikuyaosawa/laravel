<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
    </head>
    <body>
        {{ $slot }}
    </body>
</html>