let currentIndex = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.carousel-item');
    const totalItems = slides.length;
    const visibleItems = 3;
    const maxIndex = totalItems - visibleItems;

    if (index > maxIndex) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = maxIndex;
    } else {
        currentIndex = index;
    }
    
    const offset = -currentIndex * (100 / visibleItems);
    document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
    showSlide(currentIndex + 1);
}

function prevSlide() {
    showSlide(currentIndex - 1);
}

document.addEventListener('DOMContentLoaded', () => {
    showSlide(currentIndex);
});
