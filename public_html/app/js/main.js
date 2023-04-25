Fancybox.bind("[data-fancybox]", { });

Fancybox.bind("[data-fancybox-menu]", {
    closeButton: false,
    dragToClose: false,
    mainClass: 'fb-menu',
});

/** спойлеры */
document.addEventListener('click', (e) => {
    if (e.target.closest('.spoiler-title')) {
        e.target.closest('.spoiler').classList.toggle('is-open');
    }
}, true);


/** для плавного раскрытия */
const accordions = [].map.call(document.querySelectorAll('.js-max-height, .spoiler-content'), el => el);
['load', 'resize'].map(event => window.addEventListener(event, () => {
    accordions.map(el => el.style.setProperty('--max-height', `${el.scrollHeight}px`));
}));    


/** $on */
const $on = function(event, target, callback) {
    document.addEventListener(event, (e) => {
        const el = e.target.closest(target);
        if (el) {
            e.preventDefault();
            callback(el);
        }
    }, true);
} 