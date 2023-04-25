export default class Carousels {
    constructor() {
        this.init();
        document.body.addEventListener('htmx:afterSettle', e => this.init(e.detail.target));
    }

    init(el = document) {
        el.querySelectorAll(".js-carousel").forEach(el => {
            const slider = new window.Carousel(el, { center: false });
        });

        el.querySelectorAll(".js-slider").forEach(el => {
            const slider = new window.Carousel(el, {
                Autoplay: {
                    timeout: 6000,
                    showProgress: false,
                },
            }, { Autoplay });
        });
    }
}
