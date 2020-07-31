<header class="section project-header">
    @include('snippets.background')
    <div class="container section__container">
        <div class="section__left">
            <div class="section__content">
                <a href="/" class="back">
                    @include('icons.arrows.arrow-left')
                </a>
            </div>
        </div>
        <div class="section__right">
            <div class="section__content">
                @if (!empty($project['title']))
                    <h3 class="section__title">{{ $project['title'] }}</h3>
                @endif
            </div>
        </div>
    </div>
</header>
