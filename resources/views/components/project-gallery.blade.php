@if(!empty($project['images']))
    <section class="section project-gallery">
        @include('snippets.background')
        <div class="container section__container">
            <div class="section__left">
                <div class="section__content">
                    @if (Lang::has('project.gallery') && !empty(Lang::get('project.gallery')))
                        <h3 class="section__title">{{ __('project.gallery') }}</h3>
                    @endif
                </div>
            </div>
            <div class="section__right">
                <div class="section__content">
                    <div class="gallery">
                        @if (!empty($project['images']))
                            @foreach($project['images'] as $image)
                                <a
                                    data-fancybox="gallery"
                                    href="{{ $image['src_full'] }}"
                                    class="gallery__item"
                                    data-caption="@if (!empty($image['title'])) {{ $image['title'] }} @endif"
                                >
                                    <img
                                        src="{{ $image['src_compressed'] }}"
                                        alt="@if (!empty($image['title'])) {{ $image['title'] }} @endif"
                                    >
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
