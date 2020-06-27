@extends('layouts.pdf-resume')

@section('content')

    @include('pdf.components.resume_header')
    @include('pdf.components.resume_profile')
    {{--    @include('components.header')--}}
{{--    @include('components.profile')--}}
{{--    @include('components.experience')--}}
{{--    @include('components.education')--}}
{{--    @include('components.expertise')--}}
{{--    @include('components.portfolio')--}}
{{--    @include('components.contact')--}}

@endsection
