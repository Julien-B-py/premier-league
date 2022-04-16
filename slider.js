const slides = document.querySelectorAll(".slider img");
const imagesCount = slides.length;

function getActiveImg() {
    let activeImgIndex;
    slides.forEach((slide, index) => {
        if (slide.classList.length > 0) {
            activeImgIndex = index;
        }
    });
    return activeImgIndex;
}

function changeActiveImg() {
    const currentImgIndex = getActiveImg();
    slides[currentImgIndex].classList.remove("active");

    if (currentImgIndex === slides.length - 1) {
        slides[0].classList.add("active");
        return;
    }

    slides[currentImgIndex + 1].classList.add("active");
}

setInterval(changeActiveImg, 5000); 