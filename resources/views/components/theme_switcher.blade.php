<div class="theme-switcher">
    @include('icons.symbols.sun')
    <label class="theme-switcher__label" for="theme-switcher__checkbox">
        <input
            type="checkbox"
            id="theme-switcher__checkbox"
            {{ Cookie::get('theme') == 'dark' ? 'checked' : '' }} />
        <div class="theme-switcher__slider"></div>
    </label>
    @include('icons.symbols.moon')
</div>
