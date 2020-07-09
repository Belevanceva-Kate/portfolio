<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172162051-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-172162051-1');
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@if(isset($title)) {{ $title }} @else Portfolio. Kateryna Bielievantseva @endif</title>
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
        <link href="@if(isset($page)) {{ asset('css/' . $page . '.css') }} @else {{ asset('css/index.css') }} @endif" rel="stylesheet">
        <link rel="stylesheet" media="print" href="{{ asset('css/print.css') }}" />

        <!-- Primary Meta Tags -->
        <meta name="title" content="Portfolio. Kateryna Bielievantseva">
{{--        <meta name="description" content="">--}}

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://belekate.tk/">
        <meta property="og:title" content="Portfolio. Kateryna Bielievantseva">
{{--        <meta property="og:description" content="">--}}
        <meta property="og:image" content="https://belekate.tk/img/photo.png">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://belekate.tk/">
        <meta property="twitter:title" content="Portfolio. Kateryna Bielievantseva">
{{--        <meta property="twitter:description" content="">--}}
        <meta property="twitter:image" content="https://belekate.tk/img/photo.png">
    </head>

    <body class="{{ $theme . '-theme' }}">
        @yield('main_content')

        <script src="@if(isset($page)) {{ asset('js/' . $page . '.js') }} @else {{ asset('js/index.js') }} @endif"></script>
    </body>
</html>
