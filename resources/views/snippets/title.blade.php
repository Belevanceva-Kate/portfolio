@if (Lang::has('header.subtitle') && !empty(Lang::get('header.subtitle')))
    <h2 class="main__subtitle">{{ __('header.subtitle') }}</h2>
@endif
@if (Lang::has('header.title') && !empty(Lang::get('header.title')))
    <h1 class="main__title">{{ __('header.title') }}</h1>
@endif
