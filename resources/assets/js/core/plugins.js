const body = document.getElementsByTagName('body')[0];

document.addEventListener('DOMContentLoaded', () => {
    menuFunctionality();
});

const menuFunctionality = () => {
    let menuToggle = document.getElementById('js-menu-toggle');
    menuToggle.addEventListener('click', () => {
        body.classList.toggle('menu-open');
    });

    let menuDropdowns = document.getElementsByClassName('dropdown-toggle');
    if (menuDropdowns) {
        [...menuDropdowns].forEach(dropdownToggle => {
            dropdownToggle.addEventListener('click', function() {
                if (window.innerWidth > 767) return;
                this.classList.toggle('open');
            });
        });
    }
};
