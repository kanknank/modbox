Carousel.defaults.infinite = true;

function carouselsInit(el = document) {
    el.querySelectorAll(".js-carousel").forEach(el => {
        // let Autoplay = false;
        // if (el.dataset.autoplay) {
        //     Autoplay = {timeout: +el.dataset.autoplay}
        // }
        const slider = new Carousel(el, {
            // center: false,
            // friction: 0.86,
            // Autoplay,
        });
    });
    
    el.querySelectorAll(".js-carousel-hover").forEach(el => {
        if (!el.querySelector('.carousel__track')) {
            const slider = new Carousel(el, {
                friction: 0.86,
                Navigation: false,
                infinite: false,
                Autoplay: false,
            });
            slider.pages.length > 1 && el.addEventListener('mousemove', (e) => {
                const rect = el.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const pos = Math.ceil(x / rect.width / (1 / slider.pages.length)) - 1;
                pos != slider.page && slider.slideTo(pos);
            });
        }
    });
    
    el.querySelectorAll(".js-carousel-gallery-main").forEach(el => {
        const mainCarousel = new Carousel(el, {
            Dots: false,
            Autoplay: false,
            friction: 0.86,
        });
        const thumbsEl = el.parentNode.querySelector('.js-carousel-gallery-thumbs');
        thumbsEl && new Carousel(thumbsEl, {
            Sync: {
                target: mainCarousel,
                friction: 0.86,
            },
            Dots: false,
            Navigation: false,
            infinite: false,
            center: true,
        });
    });
}

carouselsInit();
document.body.addEventListener('htmx:afterSettle', e => carouselsInit(e.detail.target));