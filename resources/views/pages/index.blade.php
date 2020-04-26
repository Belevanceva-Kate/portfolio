@extends('layouts.main')

@section('content')
    {{--    @include('components.back-action', ['backURL' => '/orders'])--}}
    {{--    @include('components.decor', ['backURL' => '/orders'])--}}

    <div class="lang">
        <a href="locale/en">en</a>
        <a href="locale/ru">ru</a>
        <a href="locale/ua">ua</a>
    </div>

    <div class="page" style="height: 500px;">
        <div class="page__header">
            <h1 class="page__heading">Kateryna Bielievantseva</h1>
            <h2 class="page__subheading">Full-Stack Developer</h2>
        </div>
        <div class="page__main">
            <div class="page__column page__column--thinner">
                @include('components.contacts')
                @include('components.education')
                <div class="expertise"></div>
            </div>
            <div class="page__column page__column--wider">
                <div class="profile"></div>
                <div class="experience"></div>
                <div class="info"></div>
            </div>
        </div>
    </div>

@endsection
