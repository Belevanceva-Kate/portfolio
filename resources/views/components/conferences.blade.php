{{--@if(!empty($expertise))--}}
    <section class="section conferences">
        @include('snippets.background')
        <div class="container section__container">
            <div class="section__left">
                <div class="section__content">
                    @if (Lang::has('conferences.title') && !empty(Lang::get('conferences.title')))
                        <h3 class="section__title">{{ __('conferences.title') }}</h3>
                    @endif
                </div>
            </div>
            <div class="section__right">
                <div class="section__content">
                    <ul class="conferences__list">
                        {{--@foreach($expertise as $key => $item)
                            @if (Lang::has('expertise.list.' . $item) && !empty(Lang::get('expertise.list.' . $item)))
                                <li class="expertise__item">

                                    <div class="expertise__counter">
                                        @if(($key + 1) < 10)
                                            <span>0{{ ++$key }}</span>
                                        @else
                                            <span>{{ ++$key }}</span>
                                        @endif
                                    </div>

                                    <div class="expertise__content">
                                        @if (Lang::has('expertise.list.' . $item . '.list') &&
                                            !empty(Lang::get('expertise.list.' . $item . '.list')))
                                            <p class="expertise__title section__title">{{ __('expertise.list.' . $item . '.title') }}</p>
                                        @endif

                                        @if (Lang::has('expertise.list.' . $item . '.list') &&
                                            !empty(Lang::get('expertise.list.' . $item . '.list')))

                                            <div class="skills">
                                                <ul class="skills__list">
                                                    @foreach(__('expertise.list.' . $item . '.list') as $skill)
                                                        <li class="skills__item">{{ $skill }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>

                                </li>
                            @endif
                        @endforeach--}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
{{--@endif--}}
