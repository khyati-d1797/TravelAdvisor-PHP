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
  <script src="javaScript/jquery-3.6.0.min.js"></script>
    <script src="javaScript/jsForContactUs.js"></script>
    <script src="javaScript/jsForFooter.js"></script>
    <script src="javaScript/jqForEmailvalidation.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="#testimonial">Testimonials</a></li>
        <li><a href="contactUs.php">Contact US</a></li>
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-login" style="padding:10px;">
                <h4><span class="glyphicon glyphicon-lock"></span>Login</h4>
              </div>
              <div class="modal-body" style="padding:20px;">
                <form role="form">
                  <div class="form-group">
                    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                    <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                    <input type="text" class="form-control" id="psw" placeholder="Enter password">
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="" checked>Remember me</label>
                  </div>
                    <button type="submit" class="btn modal-login-btn btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <p>Not a member? <a href="#">Sign Up</a></p>
                <p>Forgot <a href="#">Password?</a></p>
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


<!-- Container (Contact Section) -->

<div class="container-fluid">
        <div class="row" id="contactUsForm">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="contact-form" ><!--Main content-->
                     <div><!--Main Section 2-->
                         <h1 class="contact-form-head">Contact Form</h1>
                         <div class="contact-form-inner">
                            
                         <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<label><span class="glyphicon glyphicon-user"></span> Name :</label><span class="req">*</span>
<input type="text" class="contact-form-input" name="name" required placeholder="Please Enter Name"/>
<label><span class="glyphicon glyphicon-envelope"></span> Email :</label><span class="req">*</span>
<input type="email"  class="contact-form-input"name="email" required placeholder="sample@gmail.com"/>
<label><span class="glyphicon glyphicon-globe"></span> Country :</label><span class="req">*</span>
 <select  id="country"  class="contact-form-input" name="country">
                                    <option value="canada">Canada</option>
                                    <option value="india">India</option>
                                    <option value="usa">USA</option>
                                    <option value="paris">Paris</option>
                                    <option value="rome">Rome</option>
                                    <option value="hong kong">Hong Kong</option>
                                    </select>




<label for="textrea"><span class="glyphicon glyphicon-align-left"></span> Feedback :</label><span class="req">*</span><br>
<textarea id="textarea" class="contact-form-text-area"name="textarea"  placeholder="Write something.." rows="4" cols="50">
</textarea><br><br>
<input  type="submit" value=" Submit" name="submit"><br>
<br>
</form>
                            
                         </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row" style="margin-top: 100px;" >
            
        
        <div id="contactUsFinalMsg" class="row" hidden>
            <div class="col-sm-2"></div>
            <div class="col-sm-8 just-card">
                <h4 style="text-align: center;">Hi, This is your feedback.</h4>
                <p id="contactusFeedback" style="text-align: center; font-style: italic;"></p>
                <p style="text-align: center;">We'll get back to you as soon as possible.</p>
                
            </div>
            <div class="col-sm-2"></div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    
    </div>

            <!-- Create contact form table -->

    
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

 //Create table
//$sql = "create table contacts_form (id int(6) unsigned auto_increment primary key,
// contact_name varchar (30) not null, 
 //contact_country varchar (30) not null,  contact_email varchar  (60) not null,
 //contact_feadback varchar(255) NOT NULL) ";

if(isset($_POST['submit']) && !empty($_POST) ){
// insert value to table with form
 $sql = "INSERT INTO contacts_form (contact_name, contact_country, contact_email, contact_feadback)
 VALUES ('".$_POST["name"]."','".$_POST["country"]."','".$_POST["email"]."','".$_POST["textarea"]."')";
 
  $conn->exec($sql);
  echo "<h2>"."We'll get back to you as soon as possible. Thank you"."</h2>";
  }
}
catch(PDOException $e)
  {
  echo $sql . "<br>" . $e->getMessage();
  }
?>
          








<!--------------------------------------------------FOOTER-------------------------------------------------------------->
<footer class="container-fluid footer">
        <div class="row">
            <div class="col-sm-4 container-fluid">
                <div class="footer-col-content">
                    <a href="featuredTrips.php" class="footer-link">Featured</a><br>
                    <a href="contactUs.php" class="footer-link">Contacts Us</a><br>
                    <a href="home.php" class="footer-link">About Us</a><br>
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
