document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.slider');
    const slides = slider.querySelectorAll('.slide');
    const leftBtn = document.querySelector('.slider-btn-left');
    const rightBtn = document.querySelector('.slider-btn-right');
    let currentSlide = 0;
    
    function init() {
        slides[currentSlide].classList.add('active');
        leftBtn.addEventListener('click', slideLeft);
        rightBtn.addEventListener('click', slideRight);
    }
    
    function slideLeft() {
        slides[currentSlide].classList.remove('active');
        currentSlide--;
        if (currentSlide < 0) {
            currentSlide = slides.length - 1;
        }
        slides[currentSlide].classList.add('active');
        slider.style.transform = `translateX(-${currentSlide * 100 / slides.length}%)`;
    }

    function slideRight() {
        slides[currentSlide].classList.remove('active');
        currentSlide++;
        if (currentSlide > slides.length - 1) {
            currentSlide = 0;
        }
        slides[currentSlide].classList.add('active');
        slider.style.transform = `translateX(-${currentSlide * 100 / slides.length}%)`;
    }

    init();
});