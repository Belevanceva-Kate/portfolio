export default class Base {
    constructor(baseDOM) {
        this.baseDOM = {
            _html: $('html'),
            _body: $('body'),
            _window: $(window),
            _document: $(document),
            _csrfToken: $('meta[name="csrf-token"]').attr('content')
        }

        this.baseDOM._document.ready(e => {
            this.initDOMElements(e);
            this.onDOMReady(e);
        });
        this.baseDOM._window.on('load', e => this.onLoaded(e));
        this.baseDOM._window.on('resize', e => this.onResized(e));
        this.baseDOM._window.on('wheel', e => this.onWheel(e));
        this.baseDOM._window.on('onorientationchange', e => this.onOrientationChange(e));
    }

    initDOMElements(e) {}

    onDOMReady(e) {}

    onLoaded(e) {}

    onResized(e) {}

    onWheel(e) {}

    onOrientationChange(e) {}

    call(callback = () => {}) {
        callback(this);
    }
}
