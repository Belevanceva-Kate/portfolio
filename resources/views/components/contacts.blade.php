@if(!empty($contacts))
    <div class="contacts">
        <ul class="contacts__list">
            @foreach($contacts as $item)
                @if (config('contacts.' . $item . '.title'))
                    <li class="contacts__item">
                        <a
                            href="{{ config('contacts.' . $item . '.link') }}"
                            class="contacts__link"
                        >
                            <div class="contacts__image">
                                @include(config('contacts.' . $item . '.image'))
                            </div>
                            <p class="contacts__title">{{ config('contacts.' . $item . '.title') }}</p>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@endif
