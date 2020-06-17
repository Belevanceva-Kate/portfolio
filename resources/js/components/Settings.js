import Base from '../Base.js';

export default class Settings extends Base {
    initDOMElements(e) {
        this.classes = {
            _settings:          '.settings',
            _settingsToggler:   '.settings__toggler',
            _settingsBlock:     '.settings__block'
        }

        this.els = {
            _settings:          $(this.classes._settings),
            _settingsToggler:   $(this.classes._settingsToggler),
            _settingsBlock:     $(this.classes._settingsBlock)
        }
    }

    onDOMReady(e) {
        this.els._settingsToggler.click((e) => this.toggleSettings(e));
        this.baseDOM._window.click((e)      => this.closeSettingsByClickOutside(e));
    }

    toggleSettings(e) {
        e.preventDefault();

        this.els._settingsBlock.fadeToggle();
        this.els._settingsBlock.parents(this.classes._settings).toggleClass('active');
    }

    closeSettingsByClickOutside(e) {
        if (
            //checks if descendants was clicked
            this.els._settingsBlock.has(e.target).length == 0
            &&
            this.els._settings.has(e.target).length == 0
            &&
            //checks if itself was clicked
            !this.els._settingsBlock.is(e.target)
        ) {
            this.els._settingsBlock.fadeOut();
        }
    }
}
