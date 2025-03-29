let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.carousel-item');
    if (index >= slides.length) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = index;
    }

    slides.forEach((slide, i) => {
        slide.style.display = i === currentSlide ? 'block' : 'none';
    });
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

function autoSlide() {
    nextSlide();
    setTimeout(autoSlide, 5000); // Cambia de imagen cada 5 segundos
}

// Inicializa el carrusel cuando la página cargue
document.addEventListener('DOMContentLoaded', () => {
    showSlide(currentSlide);
    autoSlide();
});
