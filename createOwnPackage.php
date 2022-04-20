<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Travel Explorer | Custom Package</title>
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
        <li><a href="home.php">ABOUT US</a></li>
            <li><a href="home.php">Services</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contactUs.php">Contact US</a></li>
            <li><a href="Login.php">LOGIN</a></li>
        </ul>
        </div>
    </div>
</nav>
    <!------------------------------------------------Gallery-------------------------------------------------------------------->
    <!-- <div class="container-fluid">   Main content
         <div class="container" style="padding: -150px; margin-top: 50px;"> Main Section 2
            <h1>Gallery</h1>
            <div class="trip-detail-images just-card">
                <div class="row" style="margin-right: -100px; margin-left: -100px">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 nopadding"><img id="mainImg" src="images/s1.jpg" width="100%" border="1"></div>
                    <div class="col-sm-2"></div>
                    <script type='text/javascript'>
                        $('#mainImg').mouseover(function(){
                            $(this).animate({
                                "width":"102%",
                                "margin-left":"-10px"
                            },"fast");
                        });
                        $('#mainImg').mouseout(function(){
                            $(this).animate({
                                "width":"100%",
                                "margin-left":"0px"
                            },"fast");
                        });
                    </script>
                </div>

                <div class="row" style="padding-top: 10px;">
                    <div class="col-sm-3" align="right"><input class="btn" type="button" onclick="prevImage();" style="height:95px; margin: auto;" value="Prev"></div>
                    <div class="col-sm-1 trip-detail-img-slider" onclick="pickImage1();"><img class="trip-detail-imgs" id="imgX1" src="images/s1.jpg" width="100%" border="1" style="border:5px solid yellow;"></div>
                    <div class="col-sm-1 trip-detail-img-slider" onclick="pickImage2();"><img class="trip-detail-imgs" id="imgX2" src="images/s2.jpg" width="100%" border="1"></div>
                    <div class="col-sm-1 trip-detail-img-slider" onclick="pickImage3();"><img class="trip-detail-imgs" id="imgX3" src="images/s3.jpg" width="100%" border="1"></div>
                    <div class="col-sm-1 trip-detail-img-slider" onclick="pickImage4();"><img class="trip-detail-imgs" id="imgX4" src="images/s4.jpg" width="100%" border="1"></div>
                    <div class="col-sm-1 trip-detail-img-slider" onclick="pickImage5();"><img class="trip-detail-imgs" id="imgX5" src="images/s5.jpg" width="100%" border="1"></div>
                    <div class="col-sm-1 trip-detail-img-slider" onclick="pickImage6();"><img class="trip-detail-imgs" id="imgX6" src="images/s6.jpg" width="100%" border="1"></div>
                    <div class="col-sm-3" align="left"><input class="btn" type="button" onclick="nextImage();" style="height: 95px; margin: auto;" value="Next"></div>

                </div>
            </div> -->

    <!--------------------------------------------MAIN CONTENT- AFTER TOP NAV---------------------------------------------------->
<div class="container-fluid trip-detail-main"><!--Main content-->
        <div class="container" style="padding: -150px"><!--Main Section 2-->
            <div class="just-card" style="text-align: center;"> 
                <h2>Choose your own itinerary</h2>
                <h4>Choose your own stop and transportation, hotels and meals. Prices will be according to your choices.</h4>
            </div>
            <?php
                /*
                * This function when called at the start of all the php scripts, 
                * the warnings will disappear. But debugging may become a problem.
                * So, to debug, just comment and reload the page again.
                */
                error_reporting(E_ALL ^ E_WARNING);

                $fromDate = $_POST["fromDate"];
                if(!empty($fromDate))
                    echo "<br>T Date : ".$fromDate;
                $toDate = $_POST["toDate"];
                if(!empty($fromDate))
                echo "<br>T Date : ".$toDate;
                $hotel = $_POST["hotel"];
                if(!empty($hotel))
                echo "<br>Hotel Id : ".$hotel;

                $sites = $_POST['site_name'];
                if(empty($sites)) 
                {
                  
                } 
                else 
                {
                  $N = count($sites);
              
                  echo("<br>You selected $N site(s): ");
                  for($i=0; $i < $N; $i++)
                  {
                    echo($sites[$i] . " ");
                  }
                }


            ?>
        <form action="createOwnPackage.php" method="POST">
            <div class="just-card">
                <div class="row" style="text-align: center;"> 
                    <h1>Dates</h1>
                    <h4>Choose your preferred dates. Price will depend on the number of nights.</h4>
                </div> 
                <div class="row" style="text-align: center;"> 
                     <div class="col-sm-2"></div>
                     <div class="col-sm-4">
                         <label for="fromDate">From : </label>
                         <input type="date" id="fromDate" name="fromDate">
                     </div>
                     <div class="col-sm-4">
                         <label for="toDate">To : </label>
                         <input type="date" id="toDate" name="toDate">
                     </div>
                     <div class="col-sm-2"></div>
                </div> 
            </div> 
            
            
            <div class="trip-detail-location just-card">
                <div class="row">
                    <div class="col-sm-12 "> 
                        <h3 style="padding-left: 20px;"> Please choose the sub destinations you want to visit.</h3>
                        
                        <?php
                            $location = $_POST["dest"];

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
                            $sql = "SELECT * FROM sites WHERE des_id = $location";

                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $toPrint = '<div class="col-sm-4"><div class="thumbnail just-card">';
                                    $toPrint = $toPrint.'<img id="img1" src="'.$row["img_url"].'" alt="Description" style="width: 600px; 
                                    height: 400px; 
                                    object-fit: cover;">';
                                    $toPrint = $toPrint.'<p class="top-search-text-head"><strong><input type="checkbox" name="site_name[]" value="'.$row["id"].'"> ' . $row["site_name"] . '</strong></p>';
                                    $toPrint = $toPrint.'<div class="top-search-txt"><a style="text-decoration: none; color: black;">'.substr($row["site_description"],0, 100).'</a></div>';
                                    $toPrint = $toPrint.'<div class="top-search-txt"><strong>Ratings:</strong> ' . $row["site_rating"]. '<br><strong>Price:</strong> $' . $row["site_price"].'</div>';
                                    $toPrint = $toPrint.'';
                                    $toPrint = $toPrint.'</div></div>';
                                    
                                    echo $toPrint;
                                } 
                            }else{
                                echo "0 results";
                            }
                        $conn->close();
                        ?>
                        
                    </div>
                </div>
            </div>



            <!-- <div class="trip-detail-location just-card">
                <div class="row">
                    <div class="col-sm-12 "> 
                        <h3 style="padding-left: 20px;"> Please choose the sub destinations you want to visit.</h3>
                        <ul>
                        <div class="col-sm-4">
                                        <div class="thumbnail just-card" id="dest-card-1">
                                        <label class="radio-inline" onclick="destSelected(1);">
                                            <input type="checkbox" id="dest1" value="Dest1::139" name="optradio" style="visibility: hidden;"><strong>Stanley Park</strong><br>
                                            <strong>Description:</strong> Stanley Park is a 405-hectare public park in British Columbia, Canada that makes up the northwestern half of Vancouver's Downtown Peninsula, surrounded by waters of Burrard Inlet and English Bay. The park borders the neighbourhoods of West End and Coal Harbour to its southeast, and is connected to the North Shore via the Lions Gate Bridge. The historic lighthouse on Brockton Point marks the park's easternmost point. While it is not the largest of its kind, Stanley Park is about one-fifth larger than New York City's 340-hectare Central Park and almost half the size of London's 960-hectare Richmond Park. Stanley Park has a long history. The land was originally used by Indigenous peoples for thousands of years before British Columbia was colonized by the British during the 1858 Fraser Canyon Gold Rush and was one of the first areas to be explored in the city. For many years after colonization, the future park with its abundant resources would also be home to non-Indigenous settlers. The l<br><strong>Ratings:</strong> 4.8<br><strong>Price:</strong>139<br>
                                        </label>
                                    </div>
                                </div><div class="col-sm-4">
                                        <div class="thumbnail just-card" id="dest-card-2">
                                        <label class="radio-inline" onclick="destSelected(2);">
                                            <input type="checkbox" id="dest1" value="Dest1::42" name="optradio" style="visibility: hidden;"><strong>Vancouver Aquarium</strong><br>
                                            <strong>Description:</strong> The Vancouver Aquarium is a public aquarium located in Stanley Park in Vancouver, British Columbia, Canada. In addition to being a major tourist attraction for Vancouver, the aquarium is a centre for marine research, ocean literacy education, conservation and marine animal rehabilitation. The Vancouver Aquarium was one of the first facilities to incorporate professional naturalists into the galleries to interpret animal behaviours. Prior to this, at the London Zoo Fish House, naturalists James S. Bowerbank, Ray Lankester, David W. Mitchell and Philip H. Gosse had regularly held open house events, but the Vancouver Aquarium was the first to employ educational naturalists on a full-time basis. Aquarium research projects extend worldwide, and include marine mammal rescue and rehabilitation. On August 9, 2010 Prime Minister Stephen Harper and B.C. Premier Gordon Campbell announced capital funding of up to $15 million. The province would donate $10 million in funding over the next three yea<br><strong>Ratings:</strong> 4.5<br><strong>Price:</strong>42<br>
                                        </label>
                                    </div>
                                </div><div class="col-sm-4">
                                        <div class="thumbnail just-card" id="dest-card-3">
                                        <label class="radio-inline" onclick="destSelected(3);">
                                            <input type="checkbox" id="dest1" value="Dest1::0" name="optradio" style="visibility: hidden;"><strong>Kitsilano Beach</strong><br>
                                            <strong>Description:</strong> Kitsilano Beach is one of the most popular beaches in Vancouver, especially in the warm summer months. Located at the north edge of the Kitsilano neighbourhood, the beach faces out onto English Bay. The beach is home to the longest swimming pool in Canada, the salt-water outdoor Kitsilano Pool, operated by the Vancouver Park Board and open annually from May to September. Toward the northern edge of the beach is a playground and a number of beach volleyball courts. In the Squamish language, it is called Xwupxpayʼem, which translates to having red cedar. In 1901, the beach was being transformed for future inclusion in a city park system. The whole approach to the beach will be cleared, graded and seeded, and the beach itself cleared of what rocks and driftwood there is to annoy bathers, and the magnificent property will be made available for the people. Vancouver residents knew the area as Greer's Beach, after settler Sam Greer who pre-empted 160 acres on the waterfront in 1882 to farm t<br><strong>Ratings:</strong> 4.6<br><strong>Price:</strong>0<br>
                                        </label>
                                    </div>
                                </div><div class="col-sm-4">
                                        <div class="thumbnail just-card" id="dest-card-4">
                                        <label class="radio-inline" onclick="destSelected(4);">
                                            <input type="checkbox" id="dest1" value="Dest1::0" name="optradio" style="visibility: hidden;"><strong>Contempory Art Gallery</strong><br>
                                            <strong>Description:</strong> The Contemporary Art Gallery is a non-profit public contemporary art gallery in downtown Vancouver. The CAG exhibits local, national, and international artists, primarily featuring emerging local artists producing Canadian contemporary art. It has exhibited work by many of Vancouver's most acclaimed artists, including Stan Douglas, Ian Wallace, Rodney Graham, Liz Magor, and Brian Jungen, and it continues to feature local artists such as Damian Moppett, Shannon Oksanen, Elspeth Pratt, Myfanwy MacLeod, Krista Belle Stewart and many others. International artists who have had exhibitions at the CAG include Dan Graham, Christopher Williams, Rachel Harrison, Hans-Peter Feldmann and Ceal Floyer. Other notable people that have curated or written for the CAG include Douglas Coupland, Beatriz Colomina, Roy Arden, and John Welchman. The gallery offers free admission to all visitors.<br><strong>Ratings:</strong> 3.9<br><strong>Price:</strong>0<br>
                                        </label>
                                    </div>
                                </div><div class="col-sm-4">
                                        <div class="thumbnail just-card" id="dest-card-5">
                                        <label class="radio-inline" onclick="destSelected(5);">
                                            <input type="checkbox" id="dest1" value="Dest1::323" name="optradio" style="visibility: hidden;"><strong>Granville Island</strong><br>
                                            <strong>Description:</strong> Granville Island is a peninsula and shopping district in Vancouver, British Columbia, Canada. It is located across False Creek from Downtown Vancouver under the south end of the Granville Street Bridge. The peninsula was once an industrial manufacturing area, but today it is a hotspot for Vancouver tourism and entertainment. Some Vancouver based tour companies, such as Discover Vancouver Tours and Vancity Tours, offer stops at Granville Island. The area was named after Granville Leveson-Gower, 2nd Earl Granville. The peninsula is home to 275 businesses and facilities that employ more than 2,500 people and generates more than $215 million in economic activity each year. Granville Island provides amenities such as a large public market, an extensive marina, a hotel, Arts Umbrella, False Creek Community Centre, various performing arts theatres including Vancouver's only professional improvisational theatre company Vancouver Theatresports League, the Arts Club Theatre Company and Carousel <br><strong>Ratings:</strong> 4.6<br><strong>Price:</strong>323<br>
                                        </label>
                                    </div>
                                </div>                           <li><h2><input type="checkbox" id="des1" name="destination1" value="Mountain::230"> Mountain</h2></li>Some exoic views for your eyes. Sunrise and Sunset, depends on what you choose.
                            <li><h2><input type="checkbox" id="des2" name="destination1" value="River::180"> River</h2></li>Beauitful river and full of fresh water with adventure sports like rafting.
                        </ul>
                    </div>
                </div>
            </div> -->
            
            <div class="row">
                <div class="container">
                    <h1>Hotels</h1>
                    <h4>Please pick your hotel</h4>
                </div>
                
                <!-- <div class="col-sm-4">
                    <div class="thumbnail just-card" id="hotel-card-1">
                        <label class="radio-inline" onclick="hotelSelected(1);">
                            <img src="images/hotel1.jpg" alt="Description" style="width: 100%;padding-right: 18px;">
                            <input type="radio" id="hotel1" value="Lions Hotel::125" name="optradio" style="visibility: hidden;"><strong> Lions Hotel </strong> +$125 for upgrade
                        </label>
                    </div>
                </div> -->
                <?php
                            $location = $_POST["dest"];

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
                            $sql = "SELECT * FROM hotels where des_id=".$location;

                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $toPrint = '<div class="col-sm-4"><div class="thumbnail just-card">';
                                    // $toPrint = $toPrint.'<img id="img1" src="'.$row["img_url"].'" alt="Description" style="width: 600px; 
                                    // height: 400px; 
                                    // object-fit: cover;">';

                                    // $toPrint = $toPrint.'<img id="img1" src="'.'" alt="Description" style="width: 600px; 
                                    // height: 400px; 
                                    // object-fit: cover;">';
                                    $toPrint = $toPrint.'<p class="top-search-text-head"><strong><input type="radio" id="'.$row["id"].'" name="hotel" value="'.$row["id"].'"> ' . $row["hotel_name"] . '</strong></p>';
                                    $toPrint = $toPrint.'<div class="top-search-txt"><a style="text-decoration: none; color: black;">'.substr($row["hotel_name"],0, 100).'</a></div>';
                                    $toPrint = $toPrint.'<div class="top-search-txt"><strong>Ratings:</strong> ' . $row["hotel_rating"]. '<br><strong>Price:</strong> $' . $row["hotel_price"].'</div>';
                                    $toPrint = $toPrint.'';
                                    $toPrint = $toPrint.'</div></div>';
                                    
                                    echo $toPrint;
                                } 
                            }else{
                                echo "0 results";
                            }
                        $conn->close();
                        ?>

                
            </div>
             
             
            <br><br>
            <h1>Timings</h1>
            <h4>This is the list of all the stops and their timings. Please follow scedule to fully enjoy all the activities.</h4>
            <div class="row">
                <div class="col-sm-12 just-card-thick"> 
                    <h3 style="padding-left: 20px;">Please choose the snack timings.</h3>
                    <h4 style="padding-left: 20px;">The value for the tickets and snack will be included in the package according to your choices. These timings are repeated every day.</h4>
                    <ul>
                        <li><input type="checkbox" id="tm1" name="stop1" value="12"><b> 4 AM</b> Leave for mountain and sunrise</li>
                        <li><input type="checkbox" id="tm2" name="stop2" value="23"><b> 8 AM</b> Leave the mountain and head for the river</li>
                        <li><input type="checkbox" id="tm3" name="stop3" value="23"><b> 10 AM</b> Reach the river. Brunch Time.</li>
                        <li><input type="checkbox" id="tm4" name="stop4" value="21"><b> 11 AM</b> River Rafting for an hour</li>
                        <li><input type="checkbox" id="tm5" name="stop5" value="15"><b> 12 PM</b> Leave for resort for lunch.</li>
                        <li><input type="checkbox" id="tm6" name="stop6" value="15"><b> 1 PM</b> River Rafting for an hour</li>
                        <li><input type="checkbox" id="tm7" name="stop7" value="17"><b> 4 PM</b> Leave for mountain and sunset</li>
                        <li><input type="checkbox" id="tm8" name="stop8" value="14"><b> 6 PM</b> Leave the mountain and head for the river</li>
                        <li><input type="checkbox" id="tm9" name="stop9" value="19"><b> 8 PM</b> Reach the river. Brunch Time.</li>
                        <li><input type="checkbox" id="tm10" name="stop10" value="22"><b> 10 PM</b> River Rafting for an hour</li>
                    </ul>
                </div>
            </div>
            <input type=submit id="genTrip" class="btn btn-success btn-lg btn-block">
            <!-- <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="reset();">Reset Trip</button> -->
            <br>
        </form>     
            <h1 class="finalItinerary" hidden>Final Itinerary</h1>
            <h4 class="finalItinerary" hidden>Here are all the things you'll be visiting, eating and staying at during your trip.</h4>
            <div class="row finalItinerary" hidden>
                <div class="col-sm-12 just-card-thick">     
                    <h3 id="final-days-and-nights"></h3>
                    <h3 id="final-hotel"></h3>
                    <h3 id="final-dates"></h3>
                    <h3 id="final-destination"></h3>
                    <h3 id="final-mini-stops"></h3>
                    <h3 id="final-price">Nothig here</h3>   
                </div>
            </div>
            <h1>Guide</h1>
            <h4>The guide will be there all the time to give you all the information you need and he/she will also be taking care of your meals and evething.</h4>
            <div class="row">
                <div class="col-sm-12 just-card-thick">     
                    <h3><span class="glyphicon glyphicon-user"></span> Trip Guide:  Mr. John Doe</h3>
                    <h3><span class="glyphicon glyphicon-map-marker"></span> Hotel:  Garden Moose</h3>
                </div>
            </div>
        
            <button type="button" class="btn btn-success btn-lg btn-block" onclick="buildTrip();">Make a booking !</button> 
</div>
</div>

             
             
<!--
             <div style="width: 100%; margin: 10px; float: left">
                <div style="padding:20px; margin-left: 100px">
                    <h1>Trip Guide:  Mr. John Doe</h1>
                    <h1>Hotel:  Garden Moose</h1>
                    <h1>2 Nights, 3 Days</h1>
                </div> 
            </div> -->

            
            
        
</div>
</div>
    <!--------------------------------------------------FOOTER-------------------------------------------------------------->
    <!--------------------------------------------------FOOTER-------------------------------------------------------------->
    <footer class="container-fluid footer"><!--Footer Navigation-->
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
