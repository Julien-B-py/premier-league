const slides = document.querySelectorAll(".gallery__slider img");
const imagesCount = slides.length;

var currentImgIndex = 0;

function changeActiveImg() {

    gsap.to(slides[currentImgIndex], { autoAlpha: 0, duration: 1 })
    currentImgIndex++;
    if (currentImgIndex === slides.length) {
        currentImgIndex = 0;
        gsap.to(slides[0], { autoAlpha: 1, duration: 1 })
        return;
    }

    gsap.to(slides[currentImgIndex], { autoAlpha: 1, duration: 1 })

}

setInterval(changeActiveImg, 5000); 