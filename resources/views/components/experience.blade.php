<div class="experience section">
    @if (Lang::has('experience.title') && !empty(Lang::get('experience.title')))
        <h3 class="section__title">{{ __('experience.title') }}</h3>
    @endif
    <div class="section__content">
        @if (Lang::has('experience.list') && !empty(Lang::get('experience.list')))
            @foreach($experience as $item)
                <div class="experience__item">
                    @if (Lang::has('experience.list.' . $item . '.position') &&
                           !empty(Lang::get('experience.list.' . $item . '.position')))
                        <p class="experience__position section__subtitle">{{ __('experience.list.' . $item . '.position') }}</p>
                    @endif
                        @if (Lang::has('experience.list.' . $item . '.company') &&
                            !empty(Lang::get('experience.list.' . $item . '.company')))
                        <p class="experience__company">{{ __('experience.list.' . $item . '.company') }}</p>
                    @endif
                        @if (Lang::has('experience.list.' . $item . '.date') &&
                            !empty(Lang::get('experience.list.' . $item . '.date')))
                        <p class="experience__date">{{ __('experience.list.' . $item . '.date') }}</p>
                    @endif
                        @if (Lang::has('experience.list.' . $item . '.description') &&
                            !empty(Lang::get('experience.list.' . $item . '.description')))
                        <div class="experience__description">
                            @foreach(Lang::get('experience.list.' . $item . '.description') as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        @endif
    </div>

</div>
