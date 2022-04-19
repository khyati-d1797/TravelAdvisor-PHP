<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>Travel Explorer|Admin Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/home-css.css">
    <link rel="stylesheet" href="style/top-nav.css">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
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
                <li><a href = "logout.php">Logout</a></li>
            </ul>
            </div>
        </div>
    </nav>
    <!-------------------------------------------LEFT-SIDE NAV---------------------------------------------------------->
    <nav class="navigation">
        <h3>Admin</h3><br>
        <a href="/Travelexplorer3/admindest.php">Destinations Data</a>
        <a href="/Travelexplorer3/adminsite.php">Sites Data</a>
        <a href="/Travelexplorer3/adminhotel.php">Hotels Data</a>
        
        <a href="/Travelexplorer3/admin.php">Home</a>
    </nav>
    <main>
        <h1>Welcome to Admin Page!</h1>
    </main>
</body>
</html>
