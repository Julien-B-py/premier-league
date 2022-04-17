const images = document.getElementsByTagName("img");
const loadingText = document.querySelector(".loading-container span");
const loadingBar = document.querySelector(".loading-bar");
const loading = document.querySelector(".loading");

const checkImagesStatus = () => {

    let imgLoaded = 0;
    for (var i = 0; i < images.length; i++) {
        if (images[i].complete) {
            imgLoaded++;
            updateLoadingPercent(imgLoaded)
        }
        else {
            images[i].addEventListener("load", function () {
                imgLoaded++;
                updateLoadingPercent(imgLoaded)
                if (imgLoaded === images.length) {
                    gsap.to(loading, { autoAlpha: 0, onComplete: () => deleteLoading() }).delay(1)
                }
            });
        }
        if (imgLoaded === images.length) {
            gsap.to(loading, { autoAlpha: 0, onComplete: () => deleteLoading() }).delay(1)
        }
    }
}

const deleteLoading = () => {
    loading.remove();
    document.body.style.overflow = 'visible';
}

const updateLoadingPercent = imgLoaded => {
    let percentage = Math.floor(imgLoaded / images.length * 100);
    loadingText.textContent = `${percentage}%`;
    loadingBar.style.width = `${percentage}%`;
}

document.body.style.overflow = 'hidden';
checkImagesStatus();