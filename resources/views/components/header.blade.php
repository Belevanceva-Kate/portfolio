<header class="section header">
    @include('snippets.background')
    <div class="container section__container">
        <div class="section__left">
            <div class="section__content">
                <div class="header__image">
                    <img src="/img/photo.png" alt="photo">
                </div>
                <div class="qrcode">
                    @include('icons.contacts.qrcode')
                </div>
            </div>
        </div>
        <div class="section__right">
            <div class="section__content">
                <div class="header__content">
                    <div class="header__main">
                        @include('snippets.title')
                        @if (Lang::has('header.content') && !empty(Lang::get('header.content')))
                            <p class="header__info">{{ __('header.content') }}</p>
                        @endif
                        @include('snippets.socials')
                    </div>
                    @include('snippets.contacts')
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
