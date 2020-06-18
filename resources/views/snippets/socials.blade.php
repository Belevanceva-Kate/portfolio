@if(!empty($socials))
    <div class="socials">
        <ul class="socials__list">
            @foreach($socials as $item)
                <li class="socials__item">
                    <a
                        href="{{ config('contacts.socials.' . $item . '.link') }}"
                        class="socials__link"
                        target="_blank"
                        title={{ config('contacts.socials.' . $item . '.title') }}
                    >
                        @include(config('contacts.socials.' . $item . '.image'))
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endif



