<?php
require("./dbcon.php");
session_start();

if(isset($_POST['loginbutton'])){
    $id=$_POST['ID'];
    $password=$_POST['pw'];

    $sql="SELECT * FROM members WHERE id='$id'";

    $result=$con->query($sql);

    $row=$result->fetch_assoc();

    if($row['id']==$id && $row['pw']==$password){
        $_SESSION['user_id']=$row['id'];
        $_SESSION['user_name']=$row['fname'];

        header("Location:Homepage.php");
        exit();
    }

    else{
        echo "<script>alert('Incorrect Credentials'); window.location.href='index.php';</script>";
    }
}

$con->close();
?>

