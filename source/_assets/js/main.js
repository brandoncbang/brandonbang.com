(() => {
    let openMenuButton = document.querySelector('.mobile-nav--button--open');
    let closeMenuButton = document.querySelector('.mobile-nav--button--close');
    let navMenu = document.querySelector('.mobile-nav');

    openMenuButton.addEventListener('click', (event) => {
        navMenu.classList.add('mobile-nav--show');
    });
    closeMenuButton.addEventListener('click', (event) => {
        navMenu.classList.remove('mobile-nav--show');
    });
})();