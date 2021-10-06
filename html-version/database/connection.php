<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "seat_booking";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $userUuid = mysqli_real_escape_string($conn, $_POST['useruuid']);
    $selectedMovie = mysqli_real_escape_string($conn, $_POST['selectedMovie']);
    $selectedSeats = mysqli_real_escape_string($conn, $_POST['selectedSeats']);

    $query = "INSERT INTO
        reserved_seats (uuid, useruuid, selected_movie, selected_seats)
        VALUES
        (null, '$useruuid', '$selectedMovie', '$selectedSeats')";

    if($conn->query($query) === TRUE) {
        echo 'Saved!';
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    $conn->close();
?>