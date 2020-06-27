<div class="section profile">
    <div class="container section__container">
        <div class="section__left">
            @if (Lang::has('profile.title') && !empty(Lang::get('profile.title')))
                <h3 class="section__title">{{ __('profile.title') }}</h3>
            @endif
        </div>
        <div class="section__right">
            @if (Lang::has('profile.content') && !empty(Lang::get('profile.content')))
                @foreach(__('profile.content') as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            @endif
        </div>
    </div>
</div>
