//navbar
window.addEventListener('scroll', function () {
    var header = document.getElementById('header');
    if (window.scrollY > 0) {
        header.style.backgroundColor = 'rgba(0, 0, 0, 0.7)'; // Light black
    } else {
        header.style.backgroundColor = 'transparent';
    }
});


//tooltip
document.querySelectorAll('[data-bs-toggle="tooltip"]')
    .forEach(tooltip => {
        new bootstrap.Tooltip(tooltip)
    })




//starts
document.addEventListener('DOMContentLoaded', () => {
    const animateCount = (element, start, end, duration) => {
        let startTime = null;

        const step = (currentTime) => {
            if (!startTime) startTime = currentTime;
            const progress = Math.min((currentTime - startTime) / duration, 1);
            element.innerText = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                requestAnimationFrame(step);
            }
        };

        requestAnimationFrame(step);
    };

    const clientsElement = document.getElementById('clients');
    const productsElement = document.getElementById('products');
    const photosElement = document.getElementById('hours-of-support');
    const itemsElement = document.getElementById('workers');

    animateCount(clientsElement, 0, 3425, 5000);
    animateCount(productsElement, 0, 4925, 6000);
    animateCount(photosElement, 0, 25, 1000);
    animateCount(itemsElement, 0, 15, 2000);
});



//slider
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    loop: true,
    spaceBetween: 30,
    keyboard: {
        enabled: true,
    },
    freeMode: true,
    autoplay: {
        delay: 5000, // Autoplay delay in milliseconds
        disableOnInteraction: false, // Continue autoplay after user interaction
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        // when window width is >= 480px
        580: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        // when window width is >= 640px
        940: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        // when window width is >= 1024px
        1140: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});



//slider
var swiper = new Swiper(".brand_serve", {
    slidesPerView: 3,
    loop: true,
    spaceBetween: 30,
    keyboard: {
        enabled: true,
    },
    freeMode: true,
    autoplay: {
        delay: 5000, // Autoplay delay in milliseconds
        disableOnInteraction: false, // Continue autoplay after user interaction
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        420: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        // when window width is >= 480px
        680: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        // when window width is >= 640px
        940: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        // when window width is >= 1024px
        1140: {
            slidesPerView: 5,
            spaceBetween: 30,
        },
    },
});




//about testimonials
var swiper = new Swiper(".testimonials_about", {
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});



