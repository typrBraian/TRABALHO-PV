const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
    var scroll_position = window.scrollY;
    if (scroll_position > 250) {
        header.style.backgroundColor = '#29323c';
    } else {
        header.style.backgroundColor = 'transparent';
    }
});

menu_item.forEach((item) => {
    item.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        mobile_menu.classList.toggle('active');
    });
});

let showText = false;
let currentSlide = 1;
const carousel = document.querySelector('.carousel');

function mostrarTexto() {
    showText = !showText;

    const textElements = document.querySelectorAll('.text');
    textElements.forEach(textElement => {
        if (showText) {
            textElement.style.display = 'block';
        } else {
            textElement.style.display = 'none';
        }
    });
}

function navegar(direcao) {
    const totalSlides = document.querySelectorAll('.slide').length;

    if (direcao === 'anterior') {
        currentSlide = (currentSlide === 1) ? totalSlides : currentSlide - 1;
    } else if (direcao === 'proximo') {
        currentSlide = (currentSlide === totalSlides) ? 1 : currentSlide + 1;
    }

    const translateValue = -100 * (currentSlide - 1) + '%';
    carousel.style.transform = 'translateX(' + translateValue + ')';
}

