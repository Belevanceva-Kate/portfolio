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
                                            href="/projects/{{ __('portfolio.list.' . $item . '.handle') }}"
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
