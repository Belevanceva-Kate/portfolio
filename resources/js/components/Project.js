import Base from '../Base.js';
// import fancybox from '@fancyapps/fancybox';
// import fancybox from '@fancyapps/fancybox/dist/jquery.fancybox';
// import '@fancyapps/fancybox';
// var fancybox = require("fancybox")($);
// import fancybox from 'fancybox';

export default class Project extends Base {

    initDOMElements(e) {

        this.classes = {
            // _settings:          '.settings',
            // _settingsToggler:   '.settings__toggler',
            // _settingsBlock:     '.settings__block'
        }

        this.els = {
            // _settings:          $(this.classes._settings),
            // _settingsToggler:   $(this.classes._settingsToggler),
            // _settingsBlock:     $(this.classes._settingsBlock)
        }
    }

    onDOMReady(e) {
        console.log('ghjk');
        // $('[data-fancybox="gallery"]').fancybox({
        //     // Options will go here
        // });

        // console.log(fancybox);
        // this.els._settingsToggler.click((e) => this.toggleSettings(e));
        // this.baseDOM._window.click((e)      => this.closeSettingsByClickOutside(e));
    }

    // toggleSettings(e) {
    //     e.preventDefault();
    //
    //     this.els._settingsBlock.fadeToggle();
    //     this.els._settingsBlock.parents(this.classes._settings).toggleClass('active');
    // }
}
