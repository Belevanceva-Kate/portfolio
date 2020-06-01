window.$ = window.jQuery = require('jquery');
// window.$ = window.jQuery = require('jquery/dist/jquery.min');

import Base from '../Base.js';

import Portfolio from '../components/Portfolio';
import ThemeSwitcher from '../components/ThemeSwitcher';

new Base().call(() => {
    new Portfolio();
    new ThemeSwitcher();
});
