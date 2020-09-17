// IIFE 4 life
(() => {
    let menuIcon = document.getElementsByClassName('menu-icon')[0];
    let menu = document.getElementById('main-nav').getElementsByTagName('ul')[0];

    let contactForm = document.getElementsByClassName('contact-form')[0];
    let contactFormSubmit = contactForm.getElementsByTagName('button')[0];

    document.addEventListener('click', (event) => {
        if (event.target === menuIcon) {
            menu.classList.toggle('visible');

            if (menuIcon.style.backgroundColor === '#fff') {
                menuIcon.style.backgroundColor = '';
            } else {
                menuIcon.style.backgroundColor = '#fff';
            }
        } else {
            menu.classList.remove('visible');
            menuIcon.style.backgroundColor = '';
        }

        if (event.target === contactFormSubmit) {
            contactForm.querySelectorAll('[required]').forEach((el) => {
                el.classList.add('required');
            })
        }
    })
}) ();