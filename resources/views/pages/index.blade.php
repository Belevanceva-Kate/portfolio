@extends('layouts.main')

@section('content')
    {{--    @include('components.back-action', ['backURL' => '/orders'])--}}

    @include('components.localization')

    <div class="page" style="height: 500px;">
        @include('components.header')
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
