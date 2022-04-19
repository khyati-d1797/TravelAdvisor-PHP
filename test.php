<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/home-css.css">
    <link rel="stylesheet" href="style/top-nav.css">
    <link rel="stylesheet" href="style/styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="javaScript/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="javaScript/jsForTripImageGalary.js"></script>
    <script src="javaScript/jsForTripBuilder.js"></script>
    <script src="javaScript/jsForFooter.js"></script>
    <script src="javaScript/jqForEmailvalidation.js"></script>
    <title>Lab 6-SQL Database Connectivity</title>
</head>
<body>
    <style>
        .test{
            box-shadow: 5px 5px 10px #888888;
            padding : 24px;
        }
    </style>

<div class="container">
<div class="row">
<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<h2>Connected successfully<h2>";

// Create table
$sql = "create table IF NOT EXISTS person (id int(6) unsigned auto_increment primary key, fname varchar(30), lname varchar(30), phone varchar(10), city varchar(30), DOB date)";
if ($conn->query($sql) === TRUE) {
    echo "<br><h1>Table created successfully</h1>";
} else {
    echo "Error creating table: " . $conn->error;
}

// insert data
$conn->query("INSERT INTO person (fname, lname, phone, city, DOB) VALUES ('Khyati', 'Dhiver', 6478357702, 'Toronto', '1997-08-17');");
$conn->query("INSERT INTO person (fname, lname, phone, city, DOB) VALUES ('Hetshree ', 'Bhavsar', 8765467739, 'Ahmedabad', '1997-12-18');");
$conn->query("INSERT INTO person (fname, lname, phone, city, DOB) VALUES ('Jhanvi', 'Singh', 6785439908, 'Vapi', '1997-10-18');");
$conn->query("INSERT INTO person (fname, lname, phone, city, DOB) VALUES ('Sana', 'Shiekh', 6897099976, 'Vapi', '1998-10-21');");
$conn->query("INSERT INTO person (fname, lname, phone, city, DOB) VALUES ('Priya', 'Patel', 6475538893, 'Toronto', '2001-12-09')");
$last_id = $conn->insert_id;
echo "New record created successfully. Last inserted ID is: " . $last_id . "<br>";

$conn->close();
?>
<!--Retrieve data-->
<?php
$connRet = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT id, fname, lname, phone, city, DOB FROM person";
$result = $connRet->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='col-sm-4 test-main'><div class = 'test'>ID: " . $row["id"] . " | First Name: " . $row["fname"] . " | Last Name: " . $row["lname"] . " | Contact no: " . $row["phone"] . " | City: " . $row["city"] . " | Date of Birth: " . $row["DOB"] . "</div></div><br>";
    }
} else {
    echo "0 results";
}
$connRet->close();




?>
</div>
</div>



</body>
</html>