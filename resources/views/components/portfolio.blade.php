<div class="portfolio section">
    @if (Lang::has('portfolio.title') && !empty(Lang::get('portfolio.title')))
        <h3 class="section__title">{{ __('portfolio.title') }}</h3>
    @endif
    <div class="section__content">
        @if (Lang::has('portfolio.list') && !empty(Lang::get('portfolio.list')))
            @foreach($portfolio as $item)
                <div class="portfolio__item">
                    @if (Lang::has('portfolio.list.' . $item . '.title') &&
                           !empty(Lang::get('portfolio.list.' . $item . '.title')))
                        <p class="portfolio__title section__subtitle">{{ __('portfolio.list.' . $item . '.title') }}</p>
                    @endif
                    @if (Lang::has('portfolio.list.' . $item . '.site_title') &&
                        !empty(Lang::get('portfolio.list.' . $item . '.site_title')))
                        <a href="{{ __('portfolio.list.' . $item . '.site_link') }}"
                           class="portfolio__site"
                           target="_blank">
                            {{ __('portfolio.list.' . $item . '.site_title') }}
                        </a>
                    @endif
                    @if (Lang::has('portfolio.list.' . $item . '.description') &&
                        !empty(Lang::get('portfolio.list.' . $item . '.description')))
                        <div class="portfolio__description">
                            @foreach(Lang::get('portfolio.list.' . $item . '.description') as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach
                        </div>
                    @endif
                    @if (Lang::has('portfolio.list.' . $item . '.tools') &&
                        !empty(Lang::get('portfolio.list.' . $item . '.tools')))
                        <p class="portfolio__tools">{{ __('portfolio.list.' . $item . '.tools') }}</p>
                    @endif
                </div>
            @endforeach
        @endif
    </div>

</div>
