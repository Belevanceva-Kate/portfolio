<div class="section header">
    <div class="container section__container">
        <div class="header__main">
            @include('snippets.title')
            @if (Lang::has('header.content') && !empty(Lang::get('header.content')))
                <p class="header__info">{{ __('header.content') }}</p>
            @endif
            @include('snippets.socials')
            @include('snippets.contacts')
        </div>
    </div>
</div>
