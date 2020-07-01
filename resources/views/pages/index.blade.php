@extends('layouts.main')

@section('content')
    {{--    @include('components.back-action', ['backURL' => '/orders'])--}}

    @include('components.settings')
    @include('components.header')
    @include('components.profile')
    @include('components.experience')
    @include('components.education')
    @include('components.expertise')
    @include('components.portfolio')
    @include('components.publications')
    @include('components.conferences')
    @include('components.contact')

@endsection
