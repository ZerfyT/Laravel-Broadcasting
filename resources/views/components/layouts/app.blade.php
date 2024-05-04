<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body class="antialiased">
    @component('components.nav-bar')
    @endcomponent
    <div class="container mx-auto px-4">
        {{ $slot }}
    </div>
    <div class="toast toast-end"></div>
</body>

</html>
