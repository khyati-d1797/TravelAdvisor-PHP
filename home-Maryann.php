<!DOCTYPE html>
<html lang="en">
<head>
  <title>Travel Explorer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/home-css.css">
  <link rel="stylesheet" href="style/top-nav.css">
  <link rel="stylesheet" href="style/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
  .modal-login, .close {
    background-color: #80ccff;
    color:white !important;
    text-align: center;
  }
  .modal-footer {
    background-color: #80ccff;
    color:black;
  }
  .modal-login-btn{
    background-color: #0099ff;
    color:black;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

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
        <li><a href="#testimonial">Testimonials</a></li>
        <li><a href="contactUs.php">Contact US</a></li>
        <li><a id="myBtn">LOGIN</a></li>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
           <!-- Modal content-->
           <div class="modal-content">
              <div class="modal-login" style="padding:10px;">
                <h4><span class="glyphicon glyphicon-lock"></span>Login</h4>
              </div>
              <div class="modal-body" style="padding:20px;">
                <form    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                  <div class="form-group">
                    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                    <input type="text" class="form-control" id="usrname" name="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                    <input type="password" class="form-control" id="psw" name= "pws" placeholder="Enter password">
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="check" name="remember[]" checked>Remember me</label>
                  </div>
                  <input  type="submit" value="Login" class="btn modal-login-btn btn-block" name="submit"><br>
      

                </form>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <p>Not a member? <a href="#">Sign Up</a></p>
                <p>Forgot <a href="#">Password?</a></p>
             <!-- Create login form table -->

    
  <?php
$servername='localhost';
$username='root';
$password='';
$dbname = "travel_explorer_db";

  
 try {
    
  
  // Create connection
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  /* set the PDO error mode to exception */
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $sql = "create database travel_explorer_db";

// Create table
//$sql = "create table login_form (id int(6) unsigned auto_increment primary key,
//login_username varchar (30) not null, 
//login_password varchar  (30) not null,
//remember_me varchar(20) NOT NULL) ";

if(isset($_POST['submit']) && !empty($_POST) ){
  $remember = $_POST['remember'];
    $chk ="";  
    // foreach to input checkbox array
 foreach($remember as $item)
 {
    $chk .= $item;  
 }
  // insert value to table with form
   $sql = "INSERT INTO  login_form (login_username, login_password, remember_me)
   VALUES ('".$_POST["email"]."','".$_POST["pws"]."','$chk')";
 
  $conn->exec($sql);
  echo "<h2>"."you are login successfully. Thank you"."</h2>";
 }
}
catch(PDOException $e)
  {
  echo $sql . "<br>" . $e->getMessage();
  }
?>
          
              </div>
            </div>
          </div>
        </div>
        <script>
        $(document).ready(function(){
          $("#myBtn").click(function(){
            $("#myModal").modal();
          });
        });
        </script>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <br><br><br><br>
  <h1>Travel Explorer</h1> 
  <p>Travel made easy</p> 
  <form action="searchResult.php" method="post">
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="input-group col-sm-4">
        <select name="location" id="location" class="form-control">
            <option value="Toronto">Toronto</option>
            <option value="Vancouver">Vancouver</option>
            <option value="Nova Scotia">Nova Scotio</option>
            <option value="Ottawa">Ottawa</option>
        </select>
        <div class="input-group-btn">
          <input type="submit" value="Submit" class="btn btn-danger" >
        </div>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </form>
  <br><br><br><br><br><br><br><br><br><br>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
  <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <h2>About US</h2><br>
      <h4>Traveling is a part of human life where we just want to relax and spend time with our closed ones or do solo trips in nature and relax our mind. In the past couple of years, a lot of things have changed so this website is going to be an easy platform for users to explore places.</h4><br>
      <p>Traveling is a part of human life where we just want to relax and spend time with our closed ones or do solo trips in nature and relax our mind. In the past couple of years, a lot of things have changed so this website is going to be an easy platform for users to explore places.</p>
      <br><button class="btn btn-default btn-lg" onclick="document.location='contactUs.php'" >Contact US</button>
    </div>
    <div class="col-sm-2"></div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>Search based on Location</h4>
      <p><a href="searchType.php">Just add a location and we will provide you with the list of destinations.</a></p>
    </div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>Hotel/Vehicle Upgradation</h4>
      <p>Change your hotel and vehicle by just clicking on one button.</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
  <div class="col-sm-4">
    </div>
    <div class="col-sm-4" >
      <a href="createOwnPackage.php">
        <span class="glyphicon glyphicon-certificate logo-small"></span>
        <h4>Create own package</h4>
        <p>Create your own package by the list of your choice.</p>
      </a>
    </div>
    <div class="col-sm-4">
    </div>
  </div>
</div>
  
<h2 class="text-center">Testimonials</h2>
  <div id="testimonial" class="carousel slide text-center" data-ride="carousel">
  
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#testimonial" data-slide-to="0" class="active"></li>
      <li data-target="#testimonial" data-slide-to="1"></li>
      <li data-target="#testimonial" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#testimonial" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#testimonial" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!-- Trips recommendation section
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Trips Recommendation</h2>
    <h4>Based on your interest this are the places recommended for you.</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Lorem</p>
          <p><strong>15</strong> Ipsum</p>
          <p><strong>5</strong> Dolor</p>
          <p><strong>2</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Lorem</p>
          <p><strong>25</strong> Ipsum</p>
          <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Lorem</p>
          <p><strong>50</strong> Ipsum</p>
          <p><strong>25</strong> Dolor</p>
          <p><strong>10</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div> -->

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <h4>Contact us and we'll get back to you within 24 hours.</h4>
      <h4><span class="glyphicon glyphicon-map-marker"></span> Toronto, Canada</h4>
      <h4><span class="glyphicon glyphicon-phone"></span> +00 1515151515</h4>
      <h4><address><span class="glyphicon glyphicon-envelope"><a href="mytravelexplorer@gmail.com"></span> mytravelexplorer@gmail.com </a></address></h4>
    </div>
  </div>
</div>





<!--------------------------------------------------FOOTER-------------------------------------------------------------->
<footer class="container-fluid footer">
        <div class="row">
            <div class="col-sm-4 container-fluid">
                <div class="footer-col-content">
                    <a href="featuredTrips.php" class="footer-link">Featured</a><br>
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
