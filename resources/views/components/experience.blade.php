<div class="experience section">
    @if (Lang::has('experience.title') && !empty(Lang::get('experience.title')))
        <h3 class="section__title">{{ __('experience.title') }}</h3>
    @endif
    <div class="section__content">
        @if (Lang::has('experience.list') && !empty(Lang::get('experience.list')))
            @foreach(Lang::get('experience.list') as $list)
                <div class="experience__item">
                    @if(!empty($list['position']))
                        <p class="experience__position">{{ $list['position'] }}</p>
                    @endif
                    @if(!empty($list['company']))
                        <p class="experience__company">{{ $list['company'] }}</p>
                    @endif
                    @if(!empty($list['description']))
                        <div class="experience__description">
                            @foreach($list['description'] as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        @endif
    </div>

</div>
