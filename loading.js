function checkImagesStatus() {
    const images = document.getElementsByTagName("img");
    let imgToLoad = images.length;
    for (var i = 0; i < images.length; i++) {
        if (images[i].complete) {
            imgToLoad--;
        }
        else {
            images[i].addEventListener("load", function () {
                imgToLoad--;
                if (imgToLoad === 0) {
                    // Action
                }
            });
        }
        if (imgToLoad === 0) {
            // action
        }
    }
}

checkImagesStatus();