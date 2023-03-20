const carousel = document.querySelector('.carousel');
const prevButton = document.querySelector('.carousel-prev');
const nextButton = document.querySelector('.carousel-next');

let position = 0;
const imageWidth = carousel.querySelector('img').offsetWidth; // changed clientWidth to offsetWidth
const visibleImages = 3;

prevButton.addEventListener('click', function() {
    position += imageWidth * visibleImages;
    position = Math.min(position, 0);
    carousel.style.transform = `translateX(${position}px)`;
});

nextButton.addEventListener('click', function() {
    position -= imageWidth * visibleImages;
    const maxPosition = -imageWidth * (carousel.children.length - visibleImages);
    position = Math.max(position, maxPosition);
    carousel.style.transform = `translateX(${position}px)`;
});


const flip = document.querySelectorAll('.flip');

flip.forEach(function(el) {
    el.addEventListener('mouseenter', function() {
        this.querySelector('.card').classList.toggle('flipped');
    });

    el.addEventListener('mouseleave', function() {
        this.querySelector('.card').classList.toggle('flipped');
    });
});
