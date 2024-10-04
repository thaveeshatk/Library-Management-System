<?php

require("./dbcon.php");
session_start();

$id=$_SESSION['user_id'];

$sql="SELECT * FROM members WHERE id=$id";

$result=$con->query($sql);

$row=$result->fetch_assoc();

$con->close();
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
        <h2 class="tab1"><a href="Homepage.php">Home</a></h2>
        <h2 class="tab2"><a href="Search.php">Search</a></h2>
        <h2 class="tab3"><a href="AllBooks.php">All Books</a></h2>
        <h2 class="tab4" id="selected"><a href="UserProfile.php">User Profile</a></h2>
        <h2 class="tab5"><a href="index.php">Login/Register</a></h2>
    </div>
    <!--button to hide the sidebar-->
    <div class="btnsection" id="hidebtn">
        <img src="Images/Hide arrow.svg" alt="hide arrow">
        <p>Hide Sidebar</p>
    </div>
</aside>
<main>
    <div class="userprofile">
        <img src="Images/User-profile.svg" alt="user profile" >
     <!--welcome text-->
        <h1>ID Number : <?php echo $row['id'];?></h1>
    <!--horizontal line-->
        <div class="line2"></div>
    </div>
    <!--button to expand the sidebar-->
    <div id="expandbtn" class="hideclass">
        <img src="Images/Expand arrow.svg" alt="expand arrow">
        <p>Expand Sidebar</p>
    </div>
    <div class="maincontent">
        <div>
            <h3>Edit Details</h3>
        </div>
        <form method="POST" class="inputfields" action="update.php">
            <label class="inputlabels"><b>First Name:</b></label>
            <input type="text" name="fname" value="<?php echo $row['fname'];?>" required><br>
            
            <label class="inputlabels"><b>Last Name:</b></label>
            <input type="text" name="lname" value="<?php echo $row['lname'];?>" required><br>
            
            <label class="inputlabels"><b>Age:</b></label>
            <input type="text" name="age" value="<?php echo $row['age'];?>" required><br>
            
            <label class="inputlabels"><b>City:</b></label>
            <input type="text" name="city" value="<?php echo $row['city'];?>" required><br>
            
            <label class="inputlabels"><b>Gender:</b></label>
            <input type="text" name="gender" value="<?php echo $row['gender'];?>" required><br>
            
            <label class="inputlabels"><b>Email</b></label>
            <input type="email" name="email" value="<?php echo $row['email'];?>" required><br>
            
            <label class="inputlabels"><b>Phone Number:</b></label>
            <input type="text" name="phone" value="<?php echo $row['number'];?>" required><br>
            
            <label class="inputlabels"><b>Password:</b></label>
            <input type="text" name="password" value="<?php echo $row['pw'];?>" required minlength="8" maxlength="8"><br>
            <button type="submit" name="updatebtn" class="inputbtns">Update and Save Details</button>
        </form>
        <div class="line3"></div>
        <div>
            <h3>Your book reservations</h3>
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