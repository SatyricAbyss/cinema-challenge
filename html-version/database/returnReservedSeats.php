<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "seat_booking";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $useruuid = mysqli_real_escape_string($conn, $_POST['useruuid']);

    $query = 'SELECT * FROM reserved_seats WHERE useruuid="'.$useruuid.'"';

    $result = $conn->query($query);
    $response = array();

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $response['uuid'] = $row['uuid'];
            $response['useruuid'] = $row['useruuid'];
            $response['selected_movie'] = $row['selected_movie'];
            $response['selected_seats'] = $row['selected_seats'];
        }
        echo json_encode($response);
    } else {
        echo 'No results found';
    }
    $conn->close();
?>