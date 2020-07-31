@extends('layouts.main')

@section('content')

    @include('components.header')

    <main class="main">
        @include('components.settings')
        @include('components.profile')
        @include('components.experience')
        @include('components.education')
        @include('components.expertise')
        @include('components.portfolio')
        @include('components.publications')
        @include('components.conferences')
    </main>

    @include('components.contact')

@endsection
