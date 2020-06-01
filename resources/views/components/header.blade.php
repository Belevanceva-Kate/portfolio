<header class="section header">
    <div class="container">
        <div class="section__left">
            <div class="header__image">
                <img src="/img/photo.png" alt="photo">
            </div>
        </div>
        <div class="section__right">
            <div class="header__content">
                @if (Lang::has('header.title') && !empty(Lang::get('header.title')))
                    <h1 class="header__title">{{ __('header.title') }}</h1>
                @endif
                @if (Lang::has('header.subtitle') && !empty(Lang::get('header.subtitle')))
                    <h2 class="header__subtitle">{{ __('header.subtitle') }}</h2>
                @endif
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
