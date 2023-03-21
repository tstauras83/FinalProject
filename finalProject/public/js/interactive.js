
//query selectors
const carousel = document.querySelector('.carousel');
const prevButton = document.querySelector('.carousel-prev');
const nextButton = document.querySelector('.carousel-next');

//variables
let position = 0;
const imageWidth = carousel.querySelector('img').offsetWidth; // changed clientWidth to offsetWidth
const visibleImages = 3;

//event listener for the prev button click, on click moves carrousel to the left
prevButton.addEventListener('click', function() {
    position += imageWidth * visibleImages;
    position = Math.min(position, 0);
    carousel.style.transform = `translateX(${position}px)`;
});


//event listener for the next button click, on click moves carrousel to the right
nextButton.addEventListener('click', function() {
    position -= imageWidth * visibleImages;
    const maxPosition = -imageWidth * (carousel.children.length - visibleImages);
    position = Math.max(position, maxPosition);
    carousel.style.transform = `translateX(${position}px)`;
});



//card flip animation query selector
const flip = document.querySelectorAll('.flip');

//on mouseover eventListener toggle class. and on mouse leave toggle class.
flip.forEach(function(e) {
    e.addEventListener('mouseenter', function() {
        this.querySelector('.card').classList.toggle('flipped');
    });

    e.addEventListener('mouseleave', function() {
        this.querySelector('.card').classList.toggle('flipped');
    });
});
