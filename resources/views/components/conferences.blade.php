@if(!empty($conferences))
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
                    @if (Lang::has('conferences.list') && !empty(Lang::get('conferences.list')))
                        <ul class="conferences__list counter">
                            @foreach($conferences as $key => $item)
                                <li class="conferences__item counter__item">

                                    <div class="counter__digits">
                                        @if(($key + 1) < 10)
                                            <span>0{{ ++$key }}</span>
                                        @else
                                            <span>{{ ++$key }}</span>
                                        @endif
                                    </div>

                                    <div class="counter__content">
                                        @if (Lang::has('conferences.list.' . $item . '.title' ) &&
                                        !empty(Lang::get('conferences.list.' . $item . '.title' )))
                                            <p class="conferences__title section__title">{{ __('conferences.list.' . $item . '.title' ) }}</p>
                                        @endif
                                        @if (Lang::has('conferences.list.' . $item . '.role' ) &&
                                            !empty(Lang::get('conferences.list.' . $item . '.role' )))
                                            <p class="conferences__role">{{ __('conferences.list.' . $item . '.role' ) }}</p>
                                        @endif
                                        @if (Lang::has('conferences.list.' . $item . '.info') && !empty(Lang::get('conferences.list.' . $item . '.info')))
                                            <div class="conferences__info">
                                                @foreach(__('conferences.list.' . $item . '.info') as $paragraph)
                                                    <p>{{ $paragraph }}</p>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>

                                </li>
                            @endforeach
                        </ul>
                    @endif
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

                </div>
            </div>
        </div>
    </section>
@endif
