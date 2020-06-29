window.$ = window.jQuery = require('jquery');

import Base from '../Base.js';

import Settings from '../components/Settings';
import ThemeSwitcher from '../components/ThemeSwitcher';

new Base().call(() => {
    new Settings();
    new ThemeSwitcher();
});
