@if(!empty($courses))
    <section class="section courses">
        @include('snippets.background')
        <div class="container section__container">
            <div class="section__left">
                <div class="section__content">
                    @if (Lang::has('courses.title') && !empty(Lang::get('courses.title')))
                        <h3 class="section__title">{{ __('courses.title') }}</h3>
                    @endif
                </div>
            </div>
            <div class="section__right">
                <div class="section__content">
                    @if (Lang::has('courses.list') && !empty(Lang::get('courses.list')))
                        <ul class="courses__list list">
                            @foreach($courses as $item)
                                <li class="courses__item list__item">
                                    @if (Lang::has('courses.list.' . $item . '.date') &&
                                        !empty(Lang::get('courses.list.' . $item . '.date')))
                                        <p class="courses__date">{{ __('courses.list.' . $item . '.date') }}</p>
                                    @endif
                                    @if (Lang::has('courses.list.' . $item . '.company') &&
                                                   !empty(Lang::get('courses.list.' . $item . '.company')))
                                        <p class="courses__company section__title">{{ __('courses.list.' . $item . '.company') }}</p>
                                    @endif
                                    @if (Lang::has('courses.list.' . $item . '.course') &&
                                                   !empty(Lang::get('courses.list.' . $item . '.course')))
                                        <p class="courses__course">{{ __('courses.list.' . $item . '.course') }}</p>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif
