<?php

require("./dbcon.php");
session_start();

if(isset($_POST['updatebtn'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $number=$_POST['phone'];
    $password=$_POST['password'];

    $userid=$_SESSION['user_id'];
    
    $sql="UPDATE members SET fname='$fname',lname='$lname',age='$age',city='$city',gender='$gender',email='$email',number='$number',pw='$password' WHERE id=$userid";

    if($con->query($sql)){
        echo "<script>alert('User details updated successfully'); window.location.href='UserProfile.php'</script>";
    }
    else{
        echo "<script>alert('Error'); window.location.href='UserProfile.php'</script>";
    }
    
}

$con->close();

?>