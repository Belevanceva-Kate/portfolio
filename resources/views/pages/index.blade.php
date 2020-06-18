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

{{--    @include('components.socials')--}}

{{--    <div class="page">--}}
{{--        @include('components.header')--}}
{{--        <div class="page__main">--}}
{{--            <div class="page__column page__column--thinner">--}}
{{--                @include('components.contacts')--}}
{{--                @include('components.education')--}}
{{--                @include('components.expertise')--}}
{{--            </div>--}}
{{--            <div class="page__column page__column--wider">--}}
{{--                @include('components.profile')--}}
{{--                @include('components.experience')--}}
{{--                @include('components.info')--}}
{{--                @include('components.portfolio')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
