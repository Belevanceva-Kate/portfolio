<section class="section portfolio">
    @include('snippets.background')
    <div class="container section__container">
        <div class="section__left">
            <div class="section__content">
                @if (Lang::has('portfolio.title') && !empty(Lang::get('portfolio.title')))
                    <h3 class="section__title">{{ __('portfolio.title') }}</h3>
                @endif
            </div>
        </div>
        <div class="section__right">
            <div class="section__content">
                <ul class="portfolio__list">
                    @foreach($portfolio as $item)
                        @if (Lang::has('portfolio.list.' . $item) && !empty(Lang::get('portfolio.list.' . $item)))
                            <li class="portfolio__item">
                                <div class="portfolio__icon">
                                    @include(__('portfolio.list.' . $item . '.icon'))
                                </div>
                                <div class="portfolio__content">
                                    @if (Lang::has('portfolio.list.' . $item . '.title') &&
                                        !empty(Lang::get('portfolio.list.' . $item . '.title')))
                                        <a
    {{--                                        href="{{ __('portfolio.list.' . $item . '.site_link') }}"--}}
                                            href="/projects/{{ __('portfolio.list.' . $item . '.handle') }}"
{{--                                            href="#"--}}
                                            title="{{ __('portfolio.list.' . $item . '.title') }}"
                                            class="portfolio__title section__title"
                                        >
                                            {{ __('portfolio.list.' . $item . '.title') }}
                                        </a>
                                    @endif
                                    @if (Lang::has('portfolio.list.' . $item . '.excerpt') &&
                                        !empty(Lang::get('portfolio.list.' . $item . '.excerpt')))
                                        <div class="portfolio__excerpt">
                                            @foreach(__('portfolio.list.' . $item . '.excerpt') as $paragraph)
                                                <p>{{ $paragraph }}</p>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>




{{--<div class="header">--}}
{{--    @if (Lang::has('header.title') && !empty(Lang::get('header.title')))--}}
{{--        <h1 class="header__title">{{ __('header.title') }}</h1>--}}
{{--    @endif--}}
{{--    @if (Lang::has('header.subtitle') && !empty(Lang::get('header.subtitle')))--}}
{{--        <h2 class="header__subtitle">{{ __('header.subtitle') }}</h2>--}}
{{--    @endif--}}
{{--</div>--}}


{{--<div class="portfolio section">--}}
{{--    @if (Lang::has('portfolio.title') && !empty(Lang::get('portfolio.title')))--}}
{{--        <h3 class="section__title">{{ __('portfolio.title') }}</h3>--}}
{{--    @endif--}}
{{--    <div class="section__content">--}}
{{--        @if (Lang::has('portfolio.list') && !empty(Lang::get('portfolio.list')))--}}
{{--            @foreach($portfolio as $item)--}}
{{--                <div class="portfolio__item">--}}
{{--                    @if (Lang::has('portfolio.list.' . $item . '.title') &&--}}
{{--                           !empty(Lang::get('portfolio.list.' . $item . '.title')))--}}
{{--                        <p class="portfolio__title section__subtitle">{{ __('portfolio.list.' . $item . '.title') }}</p>--}}
{{--                    @endif--}}
{{--                    @if (Lang::has('portfolio.list.' . $item . '.site_title') &&--}}
{{--                        !empty(Lang::get('portfolio.list.' . $item . '.site_title')))--}}
{{--                        <a href="{{ __('portfolio.list.' . $item . '.site_link') }}"--}}
{{--                           class="portfolio__site"--}}
{{--                           target="_blank">--}}
{{--                            {{ __('portfolio.list.' . $item . '.site_title') }}--}}
{{--                        </a>--}}
{{--                    @endif--}}
{{--                    @if (Lang::has('portfolio.list.' . $item . '.description') &&--}}
{{--                        !empty(Lang::get('portfolio.list.' . $item . '.description')))--}}

{{--                            <button class="portfolio__description-toggler">--}}
{{--                                <span class="btn-inner">--}}
{{--                                    <span class="text">{{ trans('portfolio.show_details') }}</span>--}}
{{--                                    @include('icons.arrows.arrow-right')--}}
{{--                                </span>--}}
{{--                            </button>--}}

{{--                        <div class="portfolio__description">--}}
{{--                            @foreach(Lang::get('portfolio.list.' . $item . '.description') as $paragraph)--}}
{{--                                <p>{{ $paragraph }}</p>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                    @if (Lang::has('portfolio.list.' . $item . '.tools') &&--}}
{{--                        !empty(Lang::get('portfolio.list.' . $item . '.tools')))--}}
{{--                        <p class="portfolio__tools">{{ __('portfolio.list.' . $item . '.tools') }}</p>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        @endif--}}
{{--    </div>--}}

{{--</div>--}}
