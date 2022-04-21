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
    <div class="container-fluid"><!--Main content-->
         <div class="container" style="padding: -150px"><!--Main Section 2-->
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
            </div>
            <br><br>
        </div>
    
        
    
    </div>
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
