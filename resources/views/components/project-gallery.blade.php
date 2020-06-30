@if(!empty($project['images']))
    <section class="section project-gallery">
        @include('snippets.background')
        <div class="container section__container">
            <div class="section__left">
                <div class="section__content">
    {{--                @if (Lang::has('project.links') && !empty(Lang::get('project.links')))--}}
    {{--                    <h3 class="section__title">{{ __('project.links') }}</h3>--}}
    {{--                @endif--}}
                    <h3 class="section__title">gallery</h3>
                </div>
            </div>
            <div class="section__right">
                <div class="section__content">
                    <div class="gallery">
                        @foreach($project['images'] as $image)
                            <img src="{{ $image }}" alt="">
                        @endforeach
                    </div>
    {{--                @if (!empty($project['title']))--}}
    {{--                    <h3 class="section__title">{{ $project['title'] }}</h3>--}}
    {{--                @endif--}}
                </div>
            </div>
        </div>
    </section>
@endif
