require('./core/bootstrap');
require('./core/plugins');

const body = document.getElementsByTagName('body')[0];
let isTouchDevice = (('ontouchstart' in window) || (navigator.maxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0));

document.addEventListener('DOMContentLoaded', () => {
    menuFunctionality();
    objectFitImages(document.querySelectorAll('selector'));
});

const menuFunctionality = () => {
    let menuToggle = document.getElementById('js-menu-toggle');
    if (menuToggle) {
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.add('was-toggled')
            body.classList.toggle('menu-open');
        });
    }

    let menuDropdowns = document.getElementsByClassName('menu-item-has-children');
    if (menuDropdowns) {
        [...menuDropdowns].forEach((dropdownToggle) => {
            dropdownToggle.addEventListener('click', function () {
                if (window.innerWidth > 768 || !isTouchDevice) return;
                this.classList.toggle('open');
            });
        });
    }
};
