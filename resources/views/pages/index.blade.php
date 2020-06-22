@extends('layouts.main')

@section('content')
    {{--    @include('components.back-action', ['backURL' => '/orders'])--}}

{{--    @include('components.localization')--}}

{{--    @include('components.theme_switcher')--}}

    @include('components.settings')
    @include('components.header')
    @include('components.profile')
    @include('components.experience')
    @include('components.education')
    @include('components.expertise')
    @include('components.portfolio')
    @include('components.contact')

@endsection
