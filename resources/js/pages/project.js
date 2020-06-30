window.$ = window.jQuery = require('jquery');

import Base from '../Base.js';

import Project from '../components/Project';

new Base().call(() => {
    new Project();
});
