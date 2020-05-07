@if(!empty($education))
    <div class="education section">

        @if (!empty(trans('education.title')))
            <h3 class="section__title">{{ __('education.title') }}</h3>
        @endif

        <div class="section__content">
            <ul class="education__list">
                @foreach($education as $item)
                    @if (!empty(trans('education.list.' . $item . '.name')))
                        <li class="education__item">
                            @if (!empty(trans('education.list.' . $item . '.info')))
                                <p class="education__info">{{ __('education.list.' . $item . '.info') }}</p>
                            @endif
                            <p class="education__name">{{ __('education.list.' . $item . '.name') }}</p>
                            @if (!empty(trans('education.list.' . $item . '.date')))
                                <time class="education_date">{{ __('education.list.' . $item . '.date') }}</time>
                            @endif
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
@endif
