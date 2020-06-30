import Base from '../Base.js';

export default class Portfolio extends Base {
    initDOMElements(e) {
        this.classes = {
            _portfolioDescriptionToggler:   '.portfolio__description-toggler',
            _portfolioItem:                 '.portfolio__item',
            _portfolioDescription:          '.portfolio__description',
        }

        this.els = {
            _portfolioDescriptionToggler: $(this.classes._portfolioDescriptionToggler)
        }
    }

    onDOMReady(e) {
        this.els._portfolioDescriptionToggler.click((e)  => this.togglePortfolioDescription(e));
    }

    togglePortfolioDescription(e) {
        e.preventDefault();

        var description = $(e.currentTarget)
            .parents(this.classes._portfolioItem)
            .find(this.classes._portfolioDescription)
            .fadeToggle();
            // .toggleClass('active');

    }
}
