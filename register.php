<?php

require("./dbcon.php");

if(isset($_POST['registerbutton'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['newpw'];
    $membership=$_POST['membership'];

    $sql1="SELECT * FROM members WHERE email='$email' && number='$number'";

    $result=$con->query($sql1);

    $row=$result->num_rows;

    if($row > 0){
        echo "<script>alert('This account already exits.Please login'); window.location.href='index.php';</script>";
        exit();
    }
    else{

        $sql2="INSERT INTO members(fname,lname,age,city,gender,email,number,pw,membership) VALUES($fname,$lname,$age,$city,$gender,$email,$number,$password,$membership)";

        $add=$con->query($sql2);

        $sql3="SELECT id FROM members WHERE email='$email' && number='$number'";

        $result1=$con->query($sql3);

        $row1=$result1->fetch_assoc();

        $id1=$row1['id'];

        echo "<script>alert('Your ID is: $id1. Please note this down. You will be redirected to the login page and from there you can login to the system'); window.location.href='index.php';</script>";
    }
}


$con->close();
?>