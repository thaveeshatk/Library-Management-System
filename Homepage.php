<?php

require("./dbcon.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css file-->
    <link rel="stylesheet" href="Homepage.css">
    <title>Home Page</title>
</head>
<body>
<!--title of webpage-->
<nav class="title">The Library</nav>
<!--Sidebar-->
<aside id="sidebar" class="sidebarmain">
    <div class="sidebar">
        <h2 class="tab1" id="selected"><a href="Homepage.php">Home</a></h2>
        <h2 class="tab2"><a href="Search.php">Search</a></h2>
        <h2 class="tab3"><a href="AllBooks.php">All Books</a></h2>
        <h2 class="tab4"><a href="UserProfile.php">User Profile</a></h2>
        <h2 class="tab5"><a href="index.php">Login/Register</a></h2>
    </div>
    <!--button to hide the sidebar-->
    <div class="btnsection" id="hidebtn">
        <img src="Images/Hide arrow.svg" alt="hide arrow">
        <p>Hide Sidebar</p>
    </div>
</aside>
<main>
    <!--welcome text-->
    <h1 class="welcome">Welcome, <u><?php echo $_SESSION['user_name'] ?></u></h1>
    <!--button to expand the sidebar-->
    <div id="expandbtn" class="hideclass">
        <img src="Images/Expand arrow.svg" alt="expand arrow">
        <p>Expand Sidebar</p>
    </div>
    <!--horizontal line-->
    <div class="line"></div>
    <!--featured content-->
    <div class="middlesection">
            <div class="featured">
                <div>
                    <img src="Images/newbook-image.png" alt="new book">
                </div>
                <div>
                    <img src="Images/popularbook-image.png" alt="popular book">
                </div>
                <div>
                    <img src="Images/yt-image.png" alt="youtube">
                </div>
                <div>
                    <img src="Images/fb-image.png" alt="facebook">
                </div>
                <div>
                    <img src="Images/follow-image.png" alt="follow image">
                </div>
            </div>       
        <!--search books button-->
        <div>
            <a href="Search.php"><button class="searchForBooks">Search for books</button></a>
        </div>
        <div class="secondLine">
            <p>Featured Books</p>
            <div class="line"></div>
        </div>
        <!--four books with pics-->
        <div class="homebooks">
            <div class="fbook1">
                <img src="Images/MadolDoova.jpg" alt="MadolDoova">
                <p>Madol Doova</p>
            </div>
            <div class="fbook2">
                <img src="Images/WimpyKid.jpg" alt="MadolDoova">
                <p>Madol Doova</p>
            </div>
            <div class="fbook3">
                <img src="Images/MadolDoova.jpg" alt="MadolDoova">
                <p>Madol Doova</p>
            </div>
            <div class="fbook4">
                <img src="Images/MadolDoova.jpg" alt="MadolDoova">
                <p>Madol Doova</p>
            </div>
        </div>
    </div>
    
</main>
<!--first section of footer-->
<footer>
    <div>
        <p><b>• Support</b></p>
        <p><a href="contact.html"> Help and contact</a></p>
        <p><a href="feedback.html"> Customer service</a></p>
    </div>
    <div>
        <p><b><a href="about.html">• About US</a></b></p>
        <p> Carriers</p>
        <p> Media</p>
    </div>
    <div>
        <p><b>• Other Services</b></p>
        <p> Book Donation</p>
        <p> Social Services</p>
    </div>
</footer>
<!--second section of footer-->
<p class="terms">Terms And Conditions | Privacy Policy</p>
<!--js file-->
<script src="HomepageScript.js"></script>
</body>
</html>