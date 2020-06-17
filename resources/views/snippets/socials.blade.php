@if(!empty($socials))
    <div class="socials">
        <ul class="socials__list">
            @foreach($socials as $item)
                @if($item == 'socials')
                    @foreach(config('contacts.' . $item) as $social)
                        <li class="socials__item">
                            <a
                                href="{{ $social['link'] }}"
                                class="socials__link"
                                target="_blank"
                                title={{ $social['title'] }}
                            >
                                @include($social['image'])
                            </a>
                        </li>
                    @endforeach
                @endif
            @endforeach
        </ul>
    </div>
@endif



