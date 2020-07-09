@if(!empty($contacts))
    <div class="contacts">
        <ul class="contacts__list">
            @foreach($contacts as $item)
            @if (config('contacts.' . $item . '.title'))
                    <li class="contacts__item">
                        <p class="contacts__title">{{ __('contacts.list.' . $item . '.title') }}</p>
                        <a
                            href="{{ config('contacts.' . $item . '.link') }}"
                            class="contacts__link"
                            onclick="ga('send', 'event', 'button', 'click', 'contacts');"
                            @if($item == 'location')
                                target="_blank"
                            @endif
                        >
                            {{ config('contacts.' . $item . '.title') }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@endif

