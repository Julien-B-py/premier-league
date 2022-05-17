const iconsDiv = document.querySelector(".nav__icons");
const searchButton = document.querySelector(".fa-magnifying-glass");
const closeButton = document.querySelector(".fa-xmark");
const searchDiv = document.querySelector(".nav__search");
const searchInput = document.getElementById("club-search");
const cardsContainer = document.querySelector(".club__cards");

searchInput.value = "";

const cardsCopy = [...cards];

const setSearchInputVisible = () => {
    if (window.getComputedStyle(searchDiv).display === "none") {
        searchDiv.style.display = 'flex';
        iconsDiv.style.display = 'none';
        searchInput.focus();
    }
}

const setSearchInputHidden = () => {
    if (window.getComputedStyle(searchDiv).display === "flex") {
        searchDiv.style.display = 'none';
        iconsDiv.style.display = 'flex';
        // Clear search input
        searchInput.value = "";
        // Reset display
        cardsCopy.forEach(card => cardsContainer.appendChild(card));

    }
}

closeButton.addEventListener("click", setSearchInputHidden);

searchButton.addEventListener("click", setSearchInputVisible);

searchInput.addEventListener('input', (event) => {

    const { value } = event.target;

    cardsCopy.forEach(card => {
        if (card.getElementsByTagName("h2")[0].innerText.toLowerCase().includes(value.toLowerCase())) {
            cardsContainer.appendChild(card);
        } else {
            card.remove()
        }

    })

});