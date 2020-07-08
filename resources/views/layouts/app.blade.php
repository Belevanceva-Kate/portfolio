<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@if(isset($title)) {{ $title }} @else Portfolio. Kateryna Bielievantseva @endif</title>
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
        <link href="@if(isset($page)) {{ asset('css/' . $page . '.css') }} @else {{ asset('css/index.css') }} @endif" rel="stylesheet">
        <link rel="stylesheet" media="print" href="{{ asset('css/print.css') }}" />
    </head>

    <body class="{{ $theme . '-theme' }}">
        @yield('main_content')

        <script src="@if(isset($page)) {{ asset('js/' . $page . '.js') }} @else {{ asset('js/index.js') }} @endif"></script>
    </body>
</html>
