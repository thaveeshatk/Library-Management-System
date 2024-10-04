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
        <h2 class="tab1"><a href="Homepage.php">Home</a></h2>
        <h2 class="tab2"><a href="Search.php">Search</a></h2>
        <h2 class="tab3" id="selected"><a href="AllBooks.html">All Books</a></h2>
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
    <h1 class="welcome">All Books</h1>
    <!--button to expand the sidebar-->
    <div id="expandbtn" class="hideclass">
        <img src="Images/Expand arrow.svg" alt="expand arrow">
        <p>Expand Sidebar</p>
    </div>
    <!--horizontal line-->
    <div class="line"></div>
    <div class="maincontent">
        <form method="GET" class="allbooks">
            <button type="submit" name="allbooks" id="allb" class="blank">All</button>
            <button type="submit" name="availablebooks" id="availableb" class="blank">Available</button>
            <button type="submit" name="unavailablebooks" id="unavailableb" class="blank">Unavailable</button>
        </form>
        <!--To display all the books in the database-->
        <?php
            if(isset($_GET['allbooks'])){
                echo "<script>
                        document.getElementById(\"allb\").style.color=\"white\";
                        document.getElementById(\"allb\").style.backgroundColor=\"black\";
                    </script>";
                $sql="SELECT * FROM books ORDER BY book_title";
                $result=$con->query($sql);
                while($row=$result->fetch_assoc()){
                    ?>
                    <div class="book1">
                        <img src="<?php echo $row['image'];?>" alt="image of book">
                    <div>
                        <h4><?php echo $row['book_title'];?></h4>
                        <h5><?php echo $row['author'];?></h5>
                    </div>
                    <p><?php echo $row['description'];?></p>
                    <?php if($row['reserved_status']==0){
                            ?><a href="bookReserve.php?isbn=<?php echo $row['isbn']; ?>&id=<?php echo $_SESSION['user_id'];?>">
                                <button class="greenbutton">available</button>
                            </a><?php
                    }
                    else{
                        ?>
                        <button class="rebutton">Unavailable</button>
                        <?php
                    } 
                    ?>
                    </div>
                    <?php
                }
            }
        ?>
        <!--To display all the available books in the database-->
        <?php
            if(isset($_GET['availablebooks'])){
                echo "<script>
                        document.getElementById(\"availableb\").style.color=\"white\";
                        document.getElementById(\"availableb\").style.backgroundColor=\"black\";
                    </script>";
                $sql="SELECT * FROM books WHERE reserved_status=0 ORDER BY book_title";
                $result=$con->query($sql);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        ?>
                            <div class="book1">
                                <img src="<?php echo $row['image'];?>" alt="image of book">
                            <div>
                                <h4><?php echo $row['book_title'];?></h4>
                                <h5><?php echo $row['author'];?></h5>
                            </div>
                            <p><?php echo $row['description'];?></p>
                            <?php if($row['reserved_status']==0){
                                    ?><a href="bookReserve.php?isbn=<?php echo $row['isbn']; ?>&id=<?php echo $_SESSION['user_id'];?>">
                                        <button class="greenbutton">available</button>
                                    </a><?php
                            }
                            else{
                                ?>
                                <button class="rebutton">Unavailable</button>
                                <?php
                            } 
                            ?>
                            </div>
                        <?php
                    }
                }
                else{
                    ?>
                    <div><?php echo "No Books"?></div>
                    <?php
                }
            }
        ?>
        <!--To display all the unavailable books in the database-->
        <?php
            if(isset($_GET['unavailablebooks'])){
                echo "<script>
                        document.getElementById(\"unavailableb\").style.color=\"white\";
                        document.getElementById(\"unavailableb\").style.backgroundColor=\"black\";
                    </script>";
                    $sql="SELECT * FROM books WHERE reserved_status=1 ORDER BY book_title";
                    $result=$con->query($sql);
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                        ?>
                            <div class="book1">
                                <img src="<?php echo $row['image'];?>" alt="image of book">
                            <div>
                                <h4><?php echo $row['book_title'];?></h4>
                                <h5><?php echo $row['author'];?></h5>
                            </div>
                            <p><?php echo $row['description'];?></p>
                            <?php if($row['reserved_status']==0){
                                    ?><a href="bookReserve.php?isbn=<?php echo $row['isbn']; ?>&id=<?php echo $_SESSION['user_id'];?>">
                                        <button class="greenbutton">available</button>
                                    </a><?php
                            }
                            else{
                                ?>
                                <button class="rebutton">Unavailable</button>
                                <?php
                            } 
                            ?>
                            </div>
                        <?php
                    }
                }
                else{
                    ?>
                    <div><?php echo "No Books"?></div>
                    <?php
                }
            }
            $con->close();
            ?>
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