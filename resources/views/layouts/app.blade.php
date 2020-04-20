<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@if(isset($title)) {{ $title }} @else App @endif</title>
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    </head>

    <body>
        @yield('main_content')

        <script src="{{ asset('js/index.js') }}"></script>
    </body>
</html>
