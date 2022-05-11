const searchInput = document.getElementById("club-search");
const cardsContainer = document.querySelector(".club__cards");

const cardsCopy = [...cards];


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