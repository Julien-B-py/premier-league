// Select elements from the DOM
const images = document.getElementsByTagName("img");
const loadingText = document.querySelector(".loading-container span");
const loadingBar = document.querySelector(".loading-bar");
const loading = document.querySelector(".loading");

// Check images loading status
const checkImagesStatus = () => {
    // Variable used to count successfully loaded images
    let imgLoaded = 0;
    // Loop through all images
    for (var i = 0; i < images.length; i++) {
        // If image is loaded increment the variable and update loading percentage
        if (images[i].complete) {
            imgLoaded++;
            updateLoadingPercent(imgLoaded)
        }
        // If image is not loaded yet, add an eventlistener
        else {
            images[i].addEventListener("load", function () {
                // When image is loaded increment the variable and update loading percentage
                imgLoaded++;
                updateLoadingPercent(imgLoaded)

                // If all images are loaded, fadeout loading animation
                // When animation is done, call deleteLoading()
                if (imgLoaded === images.length) {
                    gsap.to(loading, { autoAlpha: 0, onComplete: () => deleteLoading() }).delay(.5)
                }
            });
        }
        // Prevent from being stuck in infinite loading
        // If all images are loaded, fadeout loading animation
        // When animation is done, call deleteLoading()
        if (imgLoaded === images.length) {
            gsap.to(loading, { autoAlpha: 0, onComplete: () => deleteLoading() }).delay(.5)
        }
    }
}

// Remove the loading element from the DOM and restore body overflow to visible
const deleteLoading = () => {
    loading.remove();
    document.body.style.overflow = 'visible';
}

// Update loading percentage et progress bar depending on number of loaded images
const updateLoadingPercent = imgLoaded => {
    let percentage = Math.floor(imgLoaded / images.length * 100);
    loadingText.textContent = `${percentage}%`;
    loadingBar.style.width = `${percentage}%`;
}

// On page load, set body overflow to hidden to disable scrollbar
document.body.style.overflow = 'hidden';
// Then check images loading status
checkImagesStatus();