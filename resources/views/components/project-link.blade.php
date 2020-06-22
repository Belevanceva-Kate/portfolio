@if(!empty($project['site_link']))
    <section class="section project-link">
        @include('snippets.background')
        <div class="container section__container">
            <div class="section__left">
                <div class="section__content">
                    @if (Lang::has('project.link') && !empty(Lang::get('project.link')))
                        <h3 class="section__title">{{ __('project.link') }}</h3>
                    @endif
                </div>
            </div>
            <div class="section__right">
                <div class="section__content">
                    <div class="project-link__description">
                        <a href="{{ $project['site_link'] }}">{{ $project['site_title'] }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
