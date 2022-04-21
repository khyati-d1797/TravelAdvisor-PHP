# TravelAdvisor-PHP
### This is a php project using MySQL as database.
It's a travel website which allows user to login, signup, browse and filter travel packages.
We can also create our own packages.

Entry point is ```home.php```
Use ```localhost:8080/TravelAdvisor-PHP/home.php``` for the website entry.
### MySQL sample code
```
<?php
  $servername = "<host:port>";
  $username = "<username>";
  $password = "<password>";
  $dbname = "<dbname>";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) 
      die("Connection failed: " . $conn->connect_error);
  $sql = "";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          //todo                        
      }
  } else {
      echo "0 results";
  }
            
?>
```


# Feature Details

### Signup
A user can singup by filling out a form.

### Login
User can use the credentials he used during signup to login into the web app.

### Main Page
The main page shows the featured Trips and testimonials.
User can also contact the developers and read testimonials.

### Search
User can search where he want to go from the search drop down by choosing one of the destinations.
### Listing
Listings will be presented based on the detinations and we use filter them on the basis of price star rating.

### Booking a package
Once the package is finalised, we can make a booking.

## Create own package
User can also create a custom package, he can choose his preferreed hotel and choose a huge list of sites he wants to visit.

## Admin
This app has the ability to use the GUI to add more packages.

### Create Destination
We can add more destinations and we can also delete destinations.

### Create Hotel
We can add more hotels to a specific detination and we can also delete hotel.

### Create Site
We can add more sites to a specific detination and we can also delete site.


# Database
Please use ```travel_explorer_db.sql``` and import it into any MySQL database tool of your choice.
### Note
For this project, we recommend using XAMPP's MyPhpAdmin.


