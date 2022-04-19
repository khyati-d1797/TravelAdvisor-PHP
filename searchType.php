<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Travel Explorer | Gallery</title>
    
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
                <li><a href="signUp.php">SIGNUP</a></li>
            </ul>
            </div>
        </div>
    </nav>



   <!--SEARCH-->

   <div class="container-fluid main-search"><!--Main content-->
        <div class="main-search-img" align="center">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                <h1>Search By Cost</h1>
                <form class="main-search-form just-card" action="searchResult.php" class="container">
                        <h4>Sometimes the hardest part of planning a vacation is choosing where to go in the first place. Let us help.</h4>
                        <select class="main-search-form-input" id="source" name="country">
                                <option value="null">From</option>
                                <option value="canada">Canada</option>
                                <option value="india">India</option>
                                <option value="usa">USA</option>
                                <option value="paris">Paris</option>
                                <option value="rome">Rome</option>
                                <option value="hong kong">Hong Kong</option>
                        </select>
                        <select class="main-search-form-input" id="destination" name="country">
                                <option value="null">To</option>
                                <option value="canada">Europe</option>
                                <option value="india">India</option>
                                <option value="usa">USA</option>
                                <option value="paris">Paris</option>
                                <option value="rome">Rome</option>
                                <option value="hong kong">Hong Kong</option><br><br>     
                        </select>
                      
                        <div class="main-search-form-input">
                           <p> select your Date :</p>
                           <label for="date"> From </label> <input type="date" name="date" value="date">
                           <label for="date"> To </label>   <input type="date" name="date" value="date"><br><br>
                           <label for="cost"> Cost </label> <input type="number" name="cost" value="cost"><br><br>
                            </div>
                        <button class="main-search-form-button" type="submit" class="btn">Search</button>
                    </form>
                </div>
                <div class="col-sm-1"></div>
            </div>
    </div>


    <!--Recent Searches-->

    <div class="container-fluid top-searches">
        <div class="container">
            <h2>Top Searches</h2>
            <h4>What you have been looking at</h4>
            <div class="row">
                <div class="col-sm-4 ">
                    <div class="thumbnail just-card">
                        <img src="images/v2.jpeg" alt="Description">
                        <p class="top-search-text-head"><strong>Beach</strong></p>
                        <div class="top-search-txt">Some description about the trip and destination, along with days and nights. Also, mode of transport. </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail just-card">
                        <img src="images/v1.jpeg" alt="Description">
                        <p class="top-search-text-head"><strong>Beach</strong></p>
                        <div class="top-search-txt">Some description about the trip and destination, along with days and nights. Also, mode of transport. </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail just-card">
                        <img src="images/z4.jpeg" alt="Description">
                        <p class="top-search-text-head"><strong>Desert</strong></p>
                        <div class="top-search-txt">Some description about the trip and destination, along with days and nights. Also, mode of transport. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!--------------------------------------------------FOOTER-------------------------------------------------------------->
    <footer class="container-fluid footer">
        <div class="row">
            <div class="col-sm-4 container-fluid">
                <div class="footer-col-content">
                    <a href="featuredTrips.html" class="footer-link">Featured</a><br>
                    <a href="contactUs.php" class="footer-link">Contacts Us</a><br>
                    <a href="gallery.php" class="footer-link">Gallery</a><br>
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
        }, 900, function(){
     
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

