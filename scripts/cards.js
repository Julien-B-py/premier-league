const cards = document.querySelectorAll(".club__card");

cards.forEach(card => {

    let flipped = false;
    let clicked = false;
    const front = card.querySelector(".club__card__front");
    const back = card.querySelector(".club__card__back");
    const button = card.querySelector("button");

    button.addEventListener("click", () => {
        // Prevent card from flipping back when clicking on READ MORE button
        clicked = true;
    })

    card.addEventListener("click", () => {

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