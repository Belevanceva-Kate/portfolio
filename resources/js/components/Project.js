import Base from '../Base.js';
// import $ from 'jquery'; window.jQuery = $; window.$ = $;

// require('@fancyapps/fancybox/dist/jquery.fancybox.min')($);
// var fancybox = require('@fancyapps/fancybox/dist/jquery.fancybox.min')($);

import fancybox from '@fancyapps/fancybox/dist/jquery.fancybox.min';

export default class Project extends Base {

    initDOMElements(e) {

        this.classes = {
            _galleryItem: '[data-fancybox="gallery"]',
        }

        this.els = {
            _galleryItem: $(this.classes._galleryItem),
        }
    }

    onDOMReady(e) {

        // $('[data-fancybox="gallery"]').fancybox({});
        // this.els._galleryItem.fancybox();

    }
}






// require('@fancyapps/fancybox/dist/jquery.fancybox.min');

// var $ = require('jquery');
// window.$ = window.jQuery = require('jquery');
// require('fancybox')($);

// $(document).ready(function() {
//     $.fancybox.open($('.fancybox-me'));
// });

// import fancybox from '@fancyapps/fancybox/dist/jquery.fancybox.min';
// import fancybox from '@fancyapps/fancybox';
// import fancybox from '@fancyapps/fancybox/dist/jquery.fancybox';
// import '@fancyapps/fancybox';
// var $ = require('jQuery');
// var fancybox = require('@fancyapps/fancybox')($);
// import fancybox from 'fancybox';
