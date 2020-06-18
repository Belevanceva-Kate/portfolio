@if(!empty($education))
    <section class="section education">
        @include('snippets.background')
        <div class="container section__container">
            <div class="section__left">
                <div class="section__content">
                    @if (Lang::has('education.title') && !empty(Lang::get('education.title')))
                        <h3 class="section__title">{{ __('education.title') }}</h3>
                    @endif
                </div>
            </div>
            <div class="section__right">
                <div class="section__content">
                    <div class="timeline">
                        <ul class="education__list">
                            @foreach($education as $item)
                                <li class="education__item">
                                    @if (Lang::has('education.list.' . $item . '.date') &&
                                        !empty(Lang::get('education.list.' . $item . '.date')))
                                        <p class="education__date">{{ __('education.list.' . $item . '.date') }}</p>
                                    @endif
                                    @if (Lang::has('education.list.' . $item . '.name') &&
                                        !empty(Lang::get('education.list.' . $item . '.name')))
                                        <p class="education__name">{{ __('education.list.' . $item . '.name') }}</p>
                                    @endif
                                    @if (Lang::has('education.list.' . $item . '.heading') &&
                                        !empty(Lang::get('education.list.' . $item . '.heading')))
                                        <p class="education__info">{{ __('education.list.' . $item . '.heading') }}</p>
                                    @endif
                                    @if (Lang::has('education.list.' . $item . '.area') &&
                                        !empty(Lang::get('education.list.' . $item . '.area')))
                                        <p class="education__area">{{ __('education.list.' . $item . '.area') }}</p>
                                    @endif
                                    @if (Lang::has('education.list.' . $item . '.program') &&
                                        !empty(Lang::get('education.list.' . $item . '.program')))
                                        <p class="education__program">{{ __('education.list.' . $item . '.program') }}</p>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

{{--@if(!empty($education))--}}
{{--    <div class="education section">--}}

{{--        @if (Lang::has('education.title') && !empty(Lang::get('education.title')))--}}
{{--            <h3 class="section__title">{{ __('education.title') }}</h3>--}}
{{--        @endif--}}

{{--        <div class="section__content">--}}
{{--            <ul class="education__list">--}}
{{--                @foreach($education as $item)--}}
{{--                    <li class="education__item">--}}
{{--                        @if (Lang::has('education.list.' . $item . '.heading') &&--}}
{{--                            !empty(Lang::get('education.list.' . $item . '.heading')))--}}
{{--                            <p class="education__info section__subtitle">{{ __('education.list.' . $item . '.heading') }}</p>--}}
{{--                        @endif--}}
{{--                        @if (Lang::has('education.list.' . $item . '.area') &&--}}
{{--                            !empty(Lang::get('education.list.' . $item . '.area')))--}}
{{--                            <p class="education__area">{{ __('education.list.' . $item . '.area') }}</p>--}}
{{--                        @endif--}}
{{--                        @if (Lang::has('education.list.' . $item . '.program') &&--}}
{{--                            !empty(Lang::get('education.list.' . $item . '.program')))--}}
{{--                            <p class="education__program">{{ __('education.list.' . $item . '.program') }}</p>--}}
{{--                        @endif--}}
{{--                        @if (Lang::has('education.list.' . $item . '.name') &&--}}
{{--                            !empty(Lang::get('education.list.' . $item . '.name')))--}}
{{--                            <p class="education__name">{{ __('education.list.' . $item . '.name') }}</p>--}}
{{--                        @endif--}}
{{--                        @if (Lang::has('education.list.' . $item . '.date') &&--}}
{{--                            !empty(Lang::get('education.list.' . $item . '.date')))--}}
{{--                            <time class="education__date">{{ __('education.list.' . $item . '.date') }}</time>--}}
{{--                        @endif--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endif--}}
