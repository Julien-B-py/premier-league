// Get all club cards 
const cards = document.querySelectorAll(".club__card");

// Loop through each card
cards.forEach(card => {

    // Status booleans to handle card flipping
    let flipped = false;
    let clicked = false;
    // For each card get front/back faces and the button
    const front = card.querySelector(".club__card__front");
    const back = card.querySelector(".club__card__back");
    const button = card.querySelector("button");

    // When user clicks on READ MORE button
    button.addEventListener("click", () => {
        // Prevent card from flipping back when clicking on READ MORE button
        clicked = true;
    })

    // When user clicks on the card
    card.addEventListener("click", () => {

        // Check if the READ MORE button has been clicked to prevent unexpected card flipping while clicking on the button
        if (!clicked) {

            if (!flipped) {
                gsap.to(front, { rotationY: 180, duration: 0 });
                gsap.to(back, { rotationY: 0, duration: 0 });
                flipped = true;
                return;
            }

            gsap.to(front, { rotationY: 0, duration: 0 });
            gsap.to(back, { rotationY: -180, duration: 0 });
            flipped = false;

        }

    });

});