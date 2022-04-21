<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Travel Advisor | SEARCH</title>
    <link rel="stylesheet" href="style/home-css.css">
    <link rel="stylesheet" href="style/top-nav.css">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/filter.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="javaScript/jquery-3.6.0.min.js"></script>
    <script src="javaScript/jsForFooter.js"></script>
    <script src="javaScript/jsForSearchResult.js"></script>
    <script src="javaScript/jqForEmailvalidation.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body id="myPage" data-spy="scroll" style="margin: 0px; background-color: #CDEDF8 ;" data-target=".navbar" data-offset="60">
    <!-------------------------------------------MAIN CONTENT- TOP NAV---------------------------------------------------------->
    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="home.php">Travel Explorer</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">ABOUT US</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="#testimonial">Testimonials</a></li>
        <li><a href="contactUs.php">Contact US</a></li>
            </ul>
            </div>
        </div>
    </nav>

    <!--------------------------------------------MAIN CONTENT- AFTER TOP NAV---------------------------------------------------->
    
    <div class="container-fluid search-result-main"> 
        <div class="container">
            <h4>Showing additional information for the site chosen</h4>
        </div>

        <div class="row">
    <?php
            $site =  $_POST["site"];

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
            $sql = "SELECT * FROM sites WHERE id = $site";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $toPrint = '<div class="col-sm-2"></div><div class="col-sm-8"><div class="thumbnail just-card">';
                    $toPrint = $toPrint.'<img id="img1" src="'.$row["img_url"].'" alt="Description" style="width: 600px; 
                    height: 600px; 
                    object-fit: cover;">';
                    $toPrint = $toPrint.'<p class="top-search-text-head"><strong>' . $row["site_name"] . '</strong></p>';
                    $toPrint = $toPrint.'<div class="top-search-txt"><a style="text-decoration: none; color: black;">'.$row["site_description"];
                    $toPrint = $toPrint.'<p><br><strong>Site Rating:</strong> '.$row["site_rating"].'<br><strong>Site Price:</strong> '.$row["site_price"].'</p></div>';
                    $toPrint = $toPrint.'</div></div><div class="col-sm-2"></div>';
                    
                    echo $toPrint;
                } 
            }else{
                echo "0 results";
            }
           $conn->close();
            ?>
    </div>
    
    </div>
            
        <!-- </div>
    </div> -->
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 paging">
            Page 1 of 1
        </div>
        <div class="col-sm-4"></div>
    </div>

    <!--------------------------------------------------FOOTER-------------------------------------------------------------->
<footer class="container-fluid footer">
        <div class="row">
            <div class="col-sm-4 container-fluid">
                <div class="footer-col-content">
                    <a href="featuredTrips.html" class="footer-link">Featured</a><br>
                    <a href="contactUs.html" class="footer-link">Contacts Us</a><br>
                    <a href="aboutUs.html" class="footer-link">About Us</a><br>
                </div>
            </div>
            <div class="col-sm-4 container-fluid text-center">
                <div class="footer-col-content">
                    <br><br>
                    <a href="#myPage" title="To Top">
                        <span class="glyphicon glyphicon-chevron-up"></span>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 container-fluid">
                <div class="footer-col-content">
                <div>
                    <input class="footer-form-txt" type="text" placeholder="Name" name="name" required>
                    <input id="subEmail" class="footer-form-txt" type="email" placeholder="Email address" name="mail" required>
                    <span id="footEMailIdGood" style="font-size: 12px; color: green"></span>
                    <br>
                    <label>
                        <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
                    </label><br>
                    <input id="subSubmit" style="padding: 10px; background-color: green; color: white; border: none;" type="button" value="Subscribe">
                </div>
            </div>
            </div>
        </div>
        
    </footer>
    <script>

$(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 500, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
    
    $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;
  
        var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
      });
    });
  })

</script>

</body>
</html>
