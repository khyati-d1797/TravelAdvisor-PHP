<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "travel_explorer_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "<h4>Connected successfully<h4>";

    // insert data
    
    $hotel_id= $_POST['hotel_id'];
    
    $conn->query("DELETE FROM hotels WHERE id=$hotel_id;");

    $conn->close();
?>