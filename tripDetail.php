<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>MyFunTrips</title>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="javaScript/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="javaScript/jsForTripImageGalary.js"></script>
    <script src="javaScript/jsForTripBuilder.js"></script>
    <script src="javaScript/jsForFooter.js"></script>
    <script src="javaScript/jqForEmailvalidation.js"></script>
</head>
<body style="margin: 0px;">
    <!-------------------------------------------MAIN CONTENT- TOP NAV---------------------------------------------------------->
    <nav class="navbar navbar-fixed-top top-nav navbar-inverse">
        <div class="container-fluid">
            <div class="nav navbar-nav navbar-left">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a class="active logo" href="index.html">My Fun Trips</a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a class="top-nav-link" href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a class="top-nav-link" href="contactUs.html">Contact Us</a></li>
                <li><a class="top-nav-link" href="featuredTrips.html">Featured</a></li>
                <li><a class="top-nav-link" href="signup.html"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
            </ul>
        </div>
    </nav>

    <!--------------------------------------------MAIN CONTENT- AFTER TOP NAV---------------------------------------------------->
    <div class="container-fluid trip-detail-main"><!--Main content-->
         <div class="container"><!--Main Section 2-->
            <h1>Pictures</h1>
            <h4>Some pics taken by out crazy photography team to get you the best expected scenes in the season.</h4>
            <div class="trip-detail-images just-card">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6 nopadding"><img id="mainImg" src="images/s1.jpg" width="100%" border="1"></div>
                    <div class="col-sm-3"></div>
                    <script type='text/javascript'>
                        $('#mainImg').mouseover(function(){
                            $(this).animate({
                                "width":"150%",
                                "margin-left":"-143px"
                            },"slow");
                        });
                        $('#mainImg').mouseout(function(){
                            $(this).animate({
                                "width":"100%",
                                "margin-left":"0px"
                            },"slow");
                        });
                    </script>
                </div>
                <div class="row">
                    <div class="col-sm-3" align="right"><input class="btn" type="button" onclick="prevImage();" style="height:80px; margin: auto;" value="Prev"></div>
                    <div class="col-sm-1 trip-detail-img-slider" onclick="pickImage1();"><img class="trip-detail-imgs" id="imgX1" src="images/s1.jpg" width="100%" border="1" style="border:5px solid yellow;"></div>
                    <div class="col-sm-1 trip-detail-img-slider" onclick="pickImage2();"><img class="trip-detail-imgs" id="imgX2" src="images/s2.jpg" width="100%" border="1"></div>
                    <div class="col-sm-1 trip-detail-img-slider" onclick="pickImage3();"><img class="trip-detail-imgs" id="imgX3" src="images/s3.jpg" width="100%" border="1"></div>
                    <div class="col-sm-1 trip-detail-img-slider" onclick="pickImage4();"><img class="trip-detail-imgs" id="imgX4" src="images/s4.jpg" width="100%" border="1"></div>
                    <div class="col-sm-1 trip-detail-img-slider" onclick="pickImage5();"><img class="trip-detail-imgs" id="imgX5" src="images/s5.jpg" width="100%" border="1"></div>
                    <div class="col-sm-1 trip-detail-img-slider" onclick="pickImage6();"><img class="trip-detail-imgs" id="imgX6" src="images/s6.jpg" width="100%" border="1"></div>
                    <div class="col-sm-3" align="left"><input class="btn" type="button" onclick="nextImage();" style="height: 80px; margin: auto;" value="Next"></div>

                </div>
            </div>
            <br><br>
            <div class="just-card" style="text-align: center;"> 
                <h2>Choose your own itinerary</h2>
                <h4>Choose your own stop and transportation, hotels and meals. Prices will be according to your choices.</h4>
            </div>
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
             
            <div class="row">
                <div class="container">
                    <h1>Hotels</h1>
                    <h4>Please pick your hotel</h4>
                </div>
                
                <div class="col-sm-4">
                    <div class="thumbnail just-card" id="hotel-card-1">
                        <label class="radio-inline" onclick="hotelSelected(1);">
                            <img src="images/hotel1.jpg" alt="Description" style="width: 100%;padding-right: 18px;">
                            <input type="radio" id="hotel1" value="Lions Hotel::125" name="optradio" style="visibility: hidden;"><strong> Lions Hotel </strong> +$125 for upgrade
                        </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail just-card" id="hotel-card-2">
                        <label class="radio-inline" onclick="hotelSelected(2);">
                            <img src="images/hotel2.jpg" alt="Description" style="width: 100%; padding-right: 18px;">
                            <input type="radio" id="hotel2" value="Radisson Hotel::195" name="optradio" style="visibility: hidden;"><strong> Radisson Hotel </strong> +$195 for upgrade
                        </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail just-card" id="hotel-card-3">
                        <label class="radio-inline" onclick="hotelSelected(3);">
                            <img src="images/hotel3.jpg" alt="Description" style="width: 100%;padding-right: 18px;">
                            <input type="radio" id="hotel3" value="Regency Hotel::150" name="optradio" style="visibility: hidden;"><strong> Regency Hotel </strong> +$150 for upgrade
                        </label>
                    </div>
                </div>
            </div>
            
            <h1>Locations</h1>
            <h4>These breath taking scenic views will make you feel mesmerised. A trip to remember.</h4>
            <h4></h4>
            <div class="trip-detail-location">
                <div class="row">
                    <div class="col-sm-12 just-card-thick"> 
                        <h3 style="padding-left: 20px;"> Please choose the sub destinations you want to visit.</h3>
                        <ul>
                           <li><h2><input type="checkbox" id="des1" name="destination1" value="Mountain::230"> Mountain</h2></li>Some exoic views for your eyes. Sunrise and Sunset, depends on what you choose.
                            <li><h2><input type="checkbox" id="des2" name="destination1" value="River::180"> River</h2></li>Beauitful river and full of fresh water with adventure sports like rafting.
                        </ul>
                    </div>
                </div>
            </div>
             
             
            <br><br>
            <h1>Timings</h1>
            <h4>This is the list of all the stops and their timings. Please follow scedule to fully enjoy all the activities.</h4>
            <div class="row">
                <div class="col-sm-12 just-card-thick"> 
                    <h3 style="padding-left: 20px;">Please choose the snack timings.</h3>
                    <h4 style="padding-left: 20px;">The value for the tickets and snack will be included in the package according to your choices. These timings are repeated every day.</h4>
                    <ul>
                        <li><input type="checkbox" id="tm1" name="stop1" value="12"><b> 4 AM</b> Leave for mountains and sunrise</li>
                        <li><input type="checkbox" id="tm2" name="stop2" value="23"><b> 8 AM</b> Leave the maountain and head for the river</li>
                        <li><input type="checkbox" id="tm3" name="stop3" value="23"><b> 10 AM</b> Reach the river. Brunch Time.</li>
                        <li><input type="checkbox" id="tm4" name="stop4" value="21"><b> 11 AM</b> River Rafting for an hour</li>
                        <li><input type="checkbox" id="tm5" name="stop5" value="15"><b> 12 PM</b> Leave for resort for lunch.</li>
                        <li><input type="checkbox" id="tm6" name="stop6" value="15"><b> 1 PM</b> River Rafting for an hour</li>
                        <li><input type="checkbox" id="tm7" name="stop7" value="17"><b> 4 PM</b> Leave for mountains and sunrise</li>
                        <li><input type="checkbox" id="tm8" name="stop8" value="14"><b> 6 PM</b> Leave the maountain and head for the river</li>
                        <li><input type="checkbox" id="tm9" name="stop9" value="19"><b> 8 PM</b> Reach the river. Brunch Time.</li>
                        <li><input type="checkbox" id="tm10" name="stop10" value="22"><b> 10 PM</b> River Rafting for an hour</li>
                    </ul>
                </div>
            </div>
            <button id="genTrip" type="button" class="btn btn-success btn-lg btn-block" onclick="buildTrip();">Generate Trip</button>
            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="reset();">Reset Trip</button>
            <br>
             
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

             
             
<!--
             <div style="width: 100%; margin: 10px; float: left">
                <div style="padding:20px; margin-left: 100px">
                    <h1>Trip Guide:  Mr. John Doe</h1>
                    <h1>Hotel:  Garden Moose</h1>
                    <h1>2 Nights, 3 Days</h1>
                </div> 
            </div>
-->
            
            
        
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
            <div class="col-sm-4 container-fluid">
                <div class="footer-col-content">
                    <!--
                    <a href="#" class="footer-link">Featured</a><br>
                    <a href="contactUs.html" class="footer-link">Contacts Us</a><br>
                    <a href="aboutUs.html" class="footer-link">About Us</a><br>
                    -->
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
</body>
</html>
