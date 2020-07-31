@extends('layouts.main')

@section('content')

    @include('components.project-header')

    <main class="main">
        @include('components.settings')
        @include('components.project-description')
        @include('components.project-links')
        @include('components.project-tools')
        @include('components.project-gallery')
        @include('components.portfolio')
    </main>

    @include('components.contact')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

@endsection
