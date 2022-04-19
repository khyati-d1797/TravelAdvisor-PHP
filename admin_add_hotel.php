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

    $hotel_name= "'".$_POST['hotel_name']."'";
    $hotel_rating= $_POST['hotel_rating'];
    $hotel_price= $_POST['hotel_price'];
    $des_id = $_POST['dest'];
    $conn->query("INSERT INTO hotels (hotel_name, hotel_rating, hotel_price, des_id) VALUES($hotel_name,$hotel_rating,$hotel_price, $des_id);");

    $conn->close();
?>