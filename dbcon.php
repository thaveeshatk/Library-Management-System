<?php

$con=mysqli_connect("localhost","root","","lms");

if($con->connect_error){
    die("Failed to connect".$con->connect_error);
}

?>