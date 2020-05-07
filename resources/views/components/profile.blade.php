<div class="profile section">
    @if (Lang::has('profile.title') && !empty(Lang::get('profile.title')))
        <h3 class=" section__title">{{ __('profile.title') }}</h3>
    @endif
    <div class=" section__content">
        @if (Lang::has('profile.content') && !empty(Lang::get('profile.content')))
            @foreach(Lang::get('profile.content') as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach
        @endif
    </div>
</div>
