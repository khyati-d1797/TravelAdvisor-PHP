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
      <li><a href="home.php">ABOUT US</a></li>
        <li><a href="home.php">Services</a></li>
        <li><a href="testimonials.php">Testimonials</a></li>
        <li><a href="contactUs.php">Contact US</a></li>
      
       



</ul>
    </div>
  </div>
</nav>


<div id="testimonial" class="carousel slide text-center" data-ride="carousel">
  
     

  <!-- include font awesome -->
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
  
  <!-- include slick -->
  <link rel="stylesheet" type="text/css" href="testimonalFiles/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick-theme.css" />
  
  <!-- include vue js -->
  <script src="testimonalFiles/vue.min.js"></script>
  
  <div class="container" id="testimonialApp" style="margin-top: 30px;">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center">Testimonials</h2>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-14">
        <div class="items">
  
          <div class="card" v-for="(testimonial, index) in testimonials">
                <div class="card-body">
                    <h4 class="card-title">
                      <img src="testimonalFiles/quote-left.png" />
                    </h4>
                    
                    <div class="template-demo">
                        <p>
                          <span v-text="testimonial.comment"></span>
  
                          <span class="show-more-text" v-on:click="loadMoreContent" v-bind:data-index="index">show more</span>
                        </p>
                    </div>
  
                    <h4 class="card-title">
                      <img src="testimonalFiles/quote-right.png" style="margin-left: auto;" />
                    </h4>
                    
                    <hr />
                    
                    <div class="row">
                        <div class="col-sm-3">
                          <img class="profile-pic" v-bind:src="testimonial.picture" />
                        </div>
                        
                        <div class="col-sm-9">
                            <div class="profile">
                                <h4 class="cust-name" v-text="testimonial.name"></h4>
                                <p class="cust-profession" v-text="testimonial.designation"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
      </div>
    </div>
  </div>
  
  <style>
    .show-more-text {
      background-color: #72a4d5;
        color: white;
        padding: 3px 5px;
        border-radius: 5px;
        margin-left: 3px;
        cursor: pointer;
    }
    .more {
      display: none;
    }
  
    @media (max-width:991.98px) {
      .padding {
        padding: 1.5rem
      }
    }
  
    @media (max-width:767.98px) {
      .padding {
        padding: 1rem
      }
    }
  
    .padding {
      padding: 5rem
    }
  
    .card {
      position: relative;
      display: flex;
      width: 350px;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid #d2d2dc;
      border-radius: 11px;
      -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
      -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
      box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
    }
  
    .card .card-body {
      padding: 1rem 1rem
    }
  
    .card-body {
      flex: 1 1 auto;
      padding: 1.25rem
    }
  
    p {
      font-size: 1.2rem;
      margin-bottom: .5rem;
      line-height: 1.5rem
    }
  
    h4 {
      line-height: .2 !important
    }
  
    .profile {
      margin-top: 16px;
      margin-left: 11px
    }
  
    .profile-pic {
      width: 100px;
    }
  
    .cust-name {
      font-size: 18px
    }
  
    .cust-profession {
      font-size: 10px
    }
  
    .items {
      width: 90%;
      margin: 0px auto;
      margin-top: 30px
    }
  
    .slick-slide {
      margin: 10px;
      height: auto !important;
    }
  </style>
  
  <!-- include jquery -->
  <script src="testimonalFiles/jquery-3.3.1.min.js"></script>
  
  <script src="testimonalFiles/slick.min.js"></script>
  
  <!-- include bootstrap JS -->
  <script src="testimonalFiles/bootstrap.min.js"></script>
  
  <!--  JS code -->
  <script src="testimonalFiles/script.js"></script>
  </div>

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
