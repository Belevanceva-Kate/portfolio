@if(!empty($education))
    <div class="education">
        <ul class="education__list">
            @foreach($education as $item)
                @if (!empty(trans('education.' . $item . '.name')))
                    <li class="education__item">
                        @if (!empty(trans('education.' . $item . '.date')))
                            <time class="education_date">{{ __('education.' . $item . '.date') }}</time>
                        @endif
                        <p class="education__name">{{ __('education.' . $item . '.name') }}</p>
                        @if (!empty(trans('education.' . $item . '.info')))
                            <p class="education__info">{{ __('education.' . $item . '.info') }}</p>
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@endif
