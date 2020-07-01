@extends('layouts.main')

@section('content')

    @include('components.settings')
    @include('components.project-header')
    @include('components.project-description')
    @include('components.project-links')
    @include('components.project-tools')
    @include('components.project-gallery')
    @include('components.portfolio')
    @include('components.contact')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />--}}
{{--    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min" />--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" /></script>--}}

@endsection
