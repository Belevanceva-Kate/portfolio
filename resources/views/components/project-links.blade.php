@if(!empty($project['links']))
    <section class="section project-links">
        @include('snippets.background')
        <div class="container section__container">
            <div class="section__left">
                <div class="section__content">
                    @if (Lang::has('project.links') && !empty(Lang::get('project.links')))
                        <h3 class="section__title">{{ __('project.links') }}</h3>
                    @endif
                </div>
            </div>
            <div class="section__right">
                <div class="section__content">
                    <div class="project-links__description">
                        @if (!empty($project['links']))
                            @foreach($project['links'] as $project)
                                @if (!$loop->last)
                                    <a href="{{ $project['link'] }}" class="section__title" target="_blank">{{ $project['resource'] }}</a>,
                                @else
                                    <a href="{{ $project['link'] }}" class="section__title" target="_blank">{{ $project['resource'] }}</a>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
