<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page_title', 'The Movie DB by filecc')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="layoutContainer d-flex flex-column justify-content-between">
        @include('partials.header')
        <main class="h-100">
            @yield('content')
        </main>
        @include('partials.footer')

    </div>

</body>

</html>
