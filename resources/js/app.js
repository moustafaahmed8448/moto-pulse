import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            block: "start"
        });
    });
});

// Swiper initialization
import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';

document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 1, // Default setting for mobile screens
        spaceBetween: 10, // Space between slides
        loop: true, // Enable looping of slides
        autoplay: {
            delay: 2500, // Auto play interval
            disableOnInteraction: false, // Allow autoplay to continue after interaction
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true, // Enable clickable pagination
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2, // 2 slides per view for small screens
                spaceBetween: 20, // Adjust space for small screens
            },
            768: {
                slidesPerView: 3, // 3 slides per view for medium screens
                spaceBetween: 30, // Adjust space for medium screens
            },
            1024: {
                slidesPerView: 4, // 4 slides per view for large screens
                spaceBetween: 40, // Adjust space for large screens
            },
        },
    });

    // Stop Swiper autoplay when hovering over a slide
    const swiperSlides = document.querySelectorAll('.swiper-slide');
    swiperSlides.forEach(slide => {
        slide.addEventListener('mouseenter', () => {
            swiper.autoplay.stop();  // Stop autoplay on hover
        });
        slide.addEventListener('mouseleave', () => {
            swiper.autoplay.start();  // Restart autoplay when mouse leaves
        });
    });
});

// Lazy loading images
const lazyImages = document.querySelectorAll('img[loading="lazy"]');

const lazyLoad = (target) => {
    target.src = target.dataset.src;
    target.removeAttribute('data-src');
    target.classList.remove('lazy');
};

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            lazyLoad(entry.target);
            observer.unobserve(entry.target); // Stop observing the image once it's loaded
        }
    });
}, { threshold: 0.1 });

lazyImages.forEach(image => {
    observer.observe(image); // Start observing each lazy-loaded image
});

// AOS (Animate On Scroll) initialization
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 1000, // animation duration in ms
    easing: 'ease-in-out', // easing function for smoothness
    once: true, // Run animation only once
    offset: 200, // Start the animation when 200px from the top
});
