import Base from '../Base.js';

export default class ThemeSwitcher extends Base {
    initDOMElements(e) {
        this.classes = {
            _themeSwitcherSlider: '.theme-switcher__slider',
            _themeDark: 'dark-theme',
            _themeLight: 'light-theme'
        }

        this.els = {
            _themeSwitcherSlider: $(this.classes._themeSwitcherSlider)
        }
    }

    onDOMReady(e) {
        this.els._themeSwitcherSlider.click((e) => this.toggleThemeSwitcher(e));
    }

    toggleThemeSwitcher(e) {
        if (this.baseDOM._body.hasClass(this.classes._themeDark)) {
            this.baseDOM._body.removeClass(this.classes._themeDark);
            this.baseDOM._body.addClass(this.classes._themeLight);
            this.setCookie('theme', 'light');
        }
        else {
            this.baseDOM._body.removeClass(this.classes._themeLight);
            this.baseDOM._body.addClass(this.classes._themeDark);
            this.setCookie('theme', 'dark');
        }
    }

    setCookie(name, value) {
        var d = new Date();
        d.setTime(d.getTime() + (365*24*60*60*1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }
}
