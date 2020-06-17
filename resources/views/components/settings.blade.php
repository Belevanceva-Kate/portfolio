<div class="settings">
    <a
        href="#"
        class="settings__toggler"
    >
        @include('icons.symbols.settings')
    </a>
    <div class="settings__block">
        <ul class="settings__list">
            <li class="settings__item">
                @include('snippets.theme_switcher')
            </li>
            <li class="settings__item">
                @include('snippets.localization')
            </li>
        </ul>
    </div>
</div>
