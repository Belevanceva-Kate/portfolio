@if(!empty($project['description']))
    <section class="section project-description">
        @include('snippets.background')
        <div class="container section__container">
            <div class="section__left">
                <div class="section__content">
                    @if (Lang::has('project.description') && !empty(Lang::get('project.description')))
                        <h3 class="section__title">{{ __('project.description') }}</h3>
                    @endif
                </div>
            </div>
            <div class="section__right">
                <div class="section__content">
    {{--                <div class="project__image">--}}
    {{--                    <img src="{{ $project['banner'] }}" alt="{{ $project['title'] }}">--}}
    {{--                </div>--}}
                    @if(!empty($project['description']))
                        <div class="project-description__description">
                            @foreach($project['description'] as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif
