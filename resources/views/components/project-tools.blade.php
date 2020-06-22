@if(!empty($project['tools']))
    <section class="section project-tools">
        @include('snippets.background')
        <div class="container section__container">
            <div class="section__left">
                <div class="section__content">
                    @if (Lang::has('project.tools') && !empty(Lang::get('project.tools')))
                        <h3 class="section__title">{{ __('project.tools') }}</h3>
                    @endif
                </div>
            </div>
            <div class="section__right">
                <div class="section__content">
                    <div class="project-tools__description">
                        <ul class="project-tools__list">
                            @foreach($project['tools'] as $item)
                                <li class="project-tools__item">{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
