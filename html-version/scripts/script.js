const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const total = document.getElementById('total');
const movieSelect = document.getElementById('movie');

populateUI();

let ticketPrice = +movieSelect.value;

// Saves selected movie and price
function setMovieData(movieIndex, moviePrice) {
    localStorage.setItem('selectedMovieIndex', movieIndex);
    localStorage.setItem('selectedMoviePrice', moviePrice);
}

// Updates seat count and total price
function updateSelectedCount() {
    const selectedSeats = document.querySelectorAll('.row .seat.selected');

    const seatsIndex = [...selectedSeats].map(seat => [...seats].indexOf(seat));

    localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex));

    const selectedSeatsCount = selectedSeats.length;

    count.innerText = selectedSeatsCount;
    total.innerText = selectedSeatsCount * ticketPrice;

    setMovieData(movieSelect.selectedIndex, movieSelect.value);
}

// Get data from localstorage and populate UI
function populateUI() {
    const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));

    if (selectedSeats !== null && selectedSeats.length > 0) {
        seats.forEach((seat, index) => {
        if (selectedSeats.indexOf(index) > -1) {
            seat.classList.add('selected');
        }
        });
    }

    const selectedMovieIndex = localStorage.getItem('selectedMovieIndex');

    if (selectedMovieIndex !== null) {
        movieSelect.selectedIndex = selectedMovieIndex;
    }
}

// Movie select event
movieSelect.addEventListener('change', e => {
    ticketPrice = +e.target.value;
    setMovieData(e.target.selectedIndex, e.target.value);
    updateSelectedCount();
});

// Seat click event
container.addEventListener('click', e => {
    if (
        e.target.classList.contains('seat') &&
        !e.target.classList.contains('occupied')
    ) {
        e.target.classList.toggle('selected');

        updateSelectedCount();
    }
});

// Initial count and total set
updateSelectedCount();

// Transforms data to json to use in PHP
function saveSelectedSeats(){
    $.post("../database/connection.php",
    {
        useruuid: "e8faf24b-9daf-4254-b4a9-7c81b40e69d2",
        selectedMovie: localStorage.getItem("selectedMovieIndex"),
        selectedSeats: localStorage.getItem('selectedSeats'),
    });
}

// Fetch data from PHP query
function returnReservedSeats(useruuid) {
    $.post(
        "../database/returnReservedSeats.php",
        { useruuid: useruuid },
        function(response) {
            var returnedMovie = response.selectedMovie;
            var returnedSeats = response.selectedSeats;

            console.log('Retreived data: ', returnedMovie, returnedSeats);
        }, 'json'
    );
}