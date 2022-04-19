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
    
    $des_name= "'".$_POST['des_name']."'";
    $des_distance= $_POST['des_distance'];
    $des_rating= $_POST['des_rating'];
    
    $conn->query("INSERT INTO destinations (des_name, des_distance, des_rating) VALUES($des_name,$des_distance,$des_rating);");

    $conn->close();
?>