<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@if(isset($title)) {{ $title }} @else Resume @endif</title>
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
        <link href="@if(isset($page)) {{ asset('css/' . $page . '.css') }} @else {{ asset('css/index.css') }} @endif" rel="stylesheet">
    </head>

    <body class="{{ $theme . '-theme' }}">
        @yield('main_content')

        <script src="{{ asset('js/index.js') }}"></script>
    </body>
</html>
