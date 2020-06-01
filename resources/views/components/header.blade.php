<header class="section header">
    <div class="container">
        <div class="section__left">
            <div class="header__image">
                <img src="/img/photo.png" alt="photo">
            </div>
        </div>
        <div class="section__right">
            <div class="header__content">
                <div class="header__main">
                    @include('snippets.title')
                    @if (Lang::has('header.content') && !empty(Lang::get('header.content')))
                        <p class="header__info">{{ __('header.content') }}</p>
                    @endif
                </div>
                <div class="header__contacts">

                </div>
            </div>
        </div>
    </div>
</header>



{{--<div class="header">--}}
{{--    @if (Lang::has('header.title') && !empty(Lang::get('header.title')))--}}
{{--        <h1 class="header__title">{{ __('header.title') }}</h1>--}}
{{--    @endif--}}
{{--    @if (Lang::has('header.subtitle') && !empty(Lang::get('header.subtitle')))--}}
{{--        <h2 class="header__subtitle">{{ __('header.subtitle') }}</h2>--}}
{{--    @endif--}}
{{--</div>--}}
