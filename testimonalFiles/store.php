<?php
 
// connect with database
//$conn = new PDO("mysql:host=localhost:8889;dbname=test", "root", "root");

$servername='localhost';
$username='root';
$password='';
$dbname = "travel_explorer_db";

  
 
  
  // Create connection
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


// create tables if not exists
$sql = "CREATE TABLE IF NOT EXISTS testimonials (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    picture TEXT NULL,
    name VARCHAR(255) NULL,
    designation VARCHAR(255) NULL,
    comment TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";
$result = $conn->prepare($sql);
$result->execute();

$file_path = "";
if ($_FILES["picture"]["error"] == 0)
{
    $folder_name = "testimonials";
    mkdir($folder_name);
    $file_path = $folder_name . "/" . $_FILES["picture"]["name"];
    move_uploaded_file($_FILES["picture"]["tmp_name"], $file_path);
}

// insert in testimonials table
$sql = "INSERT INTO testimonials (picture, name, designation, comment, created_at) VALUES (?, ?, ?, ?, NOW())";
$result = $conn->prepare($sql);
$result->execute([
    $file_path,
    $_POST["name"],
    $_POST["designation"],
    $_POST["comment"],
]);
$testimonial_id = $conn->lastInsertId();

// get the testimonial just inserted in database
$sql = "SELECT * FROM testimonials WHERE id = ?";
$result = $conn->prepare($sql);
$result->execute([
    $testimonial_id
]);
$testimonial = $result->fetch();

echo json_encode([
    "status" => "success",
    "message" => "Testimonial has been added.",
    "testimonial" => $testimonial
]);
exit();