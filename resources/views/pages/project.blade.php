@extends('layouts.main')

@section('content')

    @include('components.settings')
    @include('components.project-header')
    @include('components.project-description')
    @include('components.project-link')
    @include('components.project-tools')
    @include('components.portfolio')
    @include('components.contact')

@endsection
