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
    $site_name= "'".$_POST['site_name']."'";
    $site_description= "'".$_POST['site_description']."'";
    $site_rating= $_POST['site_rating'];
    $site_price= $_POST['site_price'];
    $des_id = $_POST['dest'];

    $conn->query("INSERT INTO sites (site_name, site_description, site_rating, site_price, des_id) VALUES($site_name,$site_description,$site_rating,$site_price,$des_id);");

    $conn->close();
?>