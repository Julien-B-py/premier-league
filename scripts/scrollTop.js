// Get the autoscroll top button
const scrollTopButton = document.querySelector(".scroll__top");

// Hide or show the button depending on current scroll position
const manageScrollBtnVisibility = () => {
    // Get the number of pixels the content of "HTML" is scrolled
    // If scrolled down more than 100px
    if (document.documentElement.scrollTop > 100) {
        // Show scroll top button
        gsap.to(scrollTopButton, { scale: 1, ease: Expo.easeOut });
    } else {
        // Hide scroll top button
        gsap.to(scrollTopButton, { scale: 0, ease: Expo.easeOut });
    }
}

// Call on page load
manageScrollBtnVisibility();

// Call on scroll
window.onscroll = () => {
    manageScrollBtnVisibility();
}

// Scroll to top when user clicks on the button
scrollTopButton.addEventListener("click", event => window.scrollTo({ top: 0, behavior: 'smooth' }));