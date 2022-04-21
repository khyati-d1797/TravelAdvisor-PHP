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
            <h2>Search Result</h2>
            <h4>Showing you the best trips curated to your needs wishes.</h4>
            <button class="collapsible">Add Filter</button>
            <div class="collapsible-content">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            Price: <input type="text" name="priceMin" value="<?php echo $priceMin;?>"><br/>
            
            <input type="checkbox" name='rating[]' value="3">3 Stars<br/>
            <input type="checkbox" name='rating[]' value="3.5">3.5 Stars<br/>
            <input type="checkbox" name='rating[]' value="4">4 Stars<br/>
            <input type="checkbox" name='rating[]' value="4.5">4.5 Stars<br/>
            <input type="checkbox" name='rating[]' value="5">5 Stars<br/>
            <input type="submit" value="Submit">
        </form>
    
    </div>
            <script>
                var coll = document.getElementsByClassName("collapsible");
                var i;

                for (i = 0; i < coll.length; i++) {
                    coll[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var content = this.nextElementSibling;
                        if (content.style.maxHeight){
                            content.style.maxHeight = null;
                        } else {
                            content.style.maxHeight = content.scrollHeight + "px";
                        } 
                    });
                }
            </script>
            <div class="row">
            <?php
            $flag = false;
            $ratingForFilter = "";
            $priceMinForFilter = "";
            $location = $_POST["location"];
            if(isset($_POST['priceMin'])){
                // echo $_POST["priceMin"];
                $priceMinForFilter = $_POST["priceMin"];
                $flag = true;
            }
               
            echo "<br>";

            if(isset($_POST['rating'])){
                $rating = $_POST['rating'];
                if(empty($rating)){
                    // echo("You didn't select any rating.");
                }else{
                    $N = count($rating);
                    // echo("You selected $N rating(s)");
                    for($i=0; $i < $N; $i++){
                        // echo("<br> ". $rating[$i]);
                    }
                }
                $flag = true;
            }

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
            if ($flag)
            {
                $sql = "SELECT t.id trip, d.id des_id, d.des_name, d.des_distance, d.des_rating, h.hotel_name, h.hotel_rating, h.hotel_price, tp.t_name, tp.t_price, tp.t_rating, tp.t_description, tp.t_capacity, s.site_name, s.site_description, s.site_rating, s.site_price
                FROM trips t 
                left join trip_sites ts 
                on t.id = ts.trip_id
                left join destinations d
                on t.des_id = d.id
                left join hotels h
                on t.hotel_id = h.id
                left join transports tp
                on t.t_id = tp.id
                left join sites s
                on ts.site_id = s.id
                where s.site_price <".$priceMinForFilter;
            }
            else{
                
                $sql = "SELECT t.id trip, d.id des_id, d.des_name, d.des_distance, d.des_rating, h.hotel_name, h.hotel_rating, h.hotel_price, tp.t_name, tp.t_price, tp.t_rating, tp.t_description, tp.t_capacity, s.site_name, s.site_description, s.site_rating, s.site_price
                FROM trips t 
                left join trip_sites ts 
                on t.id = ts.trip_id
                left join destinations d
                on t.des_id = d.id
                left join hotels h
                on t.hotel_id = h.id
                left join transports tp
                on t.t_id = tp.id
                left join sites s
                on ts.site_id = s.id
                where d.des_name = '".$location."'";


            }

            
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $toPrint = '<div class="col-sm-4"><div class="thumbnail just-card">';
                    $toPrint = $toPrint.'<img id="img1" src="images/s1.jpg" alt="Description">';
                    $toPrint = $toPrint.'<p class="top-search-text-head"><strong>' . $row["site_name"] . '</strong></p>';
                    $toPrint = $toPrint.'<div class="top-search-txt"><a style="text-decoration: none; color: black;">'.substr($row["site_description"],0, 100).'<i style="color: limegreen"> Click to Open</i></a></div>';
                    $toPrint = $toPrint.'</div></div>';
                    
                    echo $toPrint;
                    // $sql_todo = "SELECT todo FROM timetable_todo WHERE tt_id = ".$row["tt_id"];
                    // $result_todo = $conn->query($sql_todo);
                    // if ($result_todo->num_rows > 0) {
                    //     while($row_todo = $result_todo->fetch_assoc()) {
                    //         echo "" . $row_todo["todo"] ." ";
                    //     }
                    // }
                    // echo "</div>";
                } 
            }else {
                    echo "0 results";
                }
        
                    
                $conn->close();
            ?>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 paging">
                   Page 1 of 1
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
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
