{{--@if(!empty($contacts))--}}
{{--    <div class="contacts section">--}}

{{--        @if (Lang::has('contacts.title') && !empty(Lang::get('contacts.title')))--}}
{{--            <h3 class="section__title">{{ __('contacts.title') }}</h3>--}}
{{--        @endif--}}

{{--        <ul class="contacts__list">--}}
{{--            @foreach($contacts as $item)--}}
{{--                @if($item != 'socials')--}}
{{--                    @if (config('contacts.' . $item . '.title'))--}}
{{--                        <li class="contacts__item">--}}
{{--                            <a--}}
{{--                                href="{{ config('contacts.' . $item . '.link') }}"--}}
{{--                                class="contacts__link"--}}
{{--                                @if($item == 'location')--}}
{{--                                    target="_blank"--}}
{{--                                @endif--}}
{{--                            >--}}
{{--                                <div class="contacts__image">--}}
{{--                                    @include(config('contacts.' . $item . '.image'))--}}
{{--                                </div>--}}
{{--                                <p class="contacts__title">{{ config('contacts.' . $item . '.title') }}</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @else--}}
{{--                    @foreach(config('contacts.' . $item) as $social)--}}
{{--                        <li class="contacts__item">--}}
{{--                            <a--}}
{{--                                href="{{ $social['link'] }}"--}}
{{--                                class="contacts__link"--}}
{{--                                target="_blank"--}}
{{--                            >--}}
{{--                                <div class="contacts__image">--}}
{{--                                    @include($social['image'])--}}
{{--                                </div>--}}
{{--                                <p class="contacts__title">{{ $social['title'] }}</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                @endif--}}

{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}
