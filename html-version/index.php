<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="styles/style.css" />
        <title>Book a seat</title>
    </head>
    <body>
    <form method="POST">
        <div class="movie-container">
        <label>Pick a movie:</label>
        <select id="movie">
            <option value="10">Avengers: Endgame (€10)</option>
            <option value="12">Joker (€12)</option>
            <option value="8">Toy Story 4 (€8)</option>
            <option value="9">The Lion King (€9)</option>
        </select>
        </div>

        <ul class="showcase">
        <li>
            <div class="seat"></div>
            <strong class="seat-example">Unoccupied</strong>
        </li>
        <li>
            <div class="seat selected"></div>
            <strong class="seat-example">Selected</strong>
        </li>
        <li>
            <div class="seat occupied"></div>
            <strong class="seat-example">Occupied</strong>
        </li>
        </ul>
        <div class="container">
            <div class="screen"></div>

            <div class="row">
                <div class="seat" value="A1"></div>
                <div class="seat" value="A2"></div>
                <div class="seat" value="A3"></div>
                <div class="seat" value="A4"></div>
                <div class="seat" value="A5"></div>
                <div class="seat" value="A6"></div>
                <div class="seat" value="A7"></div>
                <div class="seat" value="A8"></div>
            </div>
            <div class="row">
                <div class="seat" value="B1"></div>
                <div class="seat" value="B2"></div>
                <div class="seat" value="B3"></div>
                <div class="seat" value="B4"></div>
                <div class="seat" value="B5"></div>
                <div class="seat" value="B6"></div>
                <div class="seat" value="B7"></div>
                <div class="seat" value="B8"></div>
            </div>
            <div class="row">
                <div class="seat" value="C1"></div>
                <div class="seat" value="C2"></div>
                <div class="seat" value="C3"></div>
                <div class="seat" value="C4"></div>
                <div class="seat" value="C5"></div>
                <div class="seat" value="C6"></div>
                <div class="seat" value="C7"></div>
                <div class="seat" value="C8"></div>
            </div>
            <div class="row">
                <div class="seat" value="D1"></div>
                <div class="seat" value="D2"></div>
                <div class="seat" value="D3"></div>
                <div class="seat" value="D4"></div>
                <div class="seat" value="D5"></div>
                <div class="seat" value="D6"></div>
                <div class="seat" value="D7"></div>
                <div class="seat" value="D8"></div>
            </div>
            <div class="row">
                <div class="seat" value="E1"></div>
                <div class="seat" value="E2"></div>
                <div class="seat" value="E3"></div>
                <div class="seat" value="E4"></div>
                <div class="seat" value="E5"></div>
                <div class="seat" value="E6"></div>
                <div class="seat" value="E7"></div>
                <div class="seat" value="E8"></div>
            </div>
            <div class="row">
                <div class="seat" value="F1"></div>
                <div class="seat" value="F2"></div>
                <div class="seat" value="F3"></div>
                <div class="seat" value="F4"></div>
                <div class="seat" value="F5"></div>
                <div class="seat" value="F6"></div>
                <div class="seat" value="F7"></div>
                <div class="seat" value="F8"></div>
            </div>
        </div>
    </form>

    <p class="text">
      You have selected <span id="count">0</span> seats for a price of €<span id="total">0</span>,-
    </p>

    <script src="scripts/script.js"></script>
    </body>
</html>