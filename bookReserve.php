<?php

require("./dbcon.php");
session_start();

$isbn=$_GET['isbn'];
$id=$_GET['id'];

$sql1="SELECT book_title FROM books WHERE isbn=$isbn";

$book=$con->query($sql1);
$bookResult=$book->fetch_assoc();

$sql2="SELECT membership FROM members WHERE id=$id";

$membership=$con->query($sql2);
$result=$membership->fetch_assoc();

$sql3="SELECT * FROM BookReservation WHERE userid=$id";

$row=$con->query($sql3);


if($result['membership']=='bronze' && $row->num_rows<3){
    $sql4="UPDATE books SET reserved_status=1 WHERE isbn=$isbn";
    $run=$con->query($sql4);
    $sql5="INSERT INTO bookReservation(userid,bookid,bookname,reservedDate,returnDate) VALUES('$id','$isbn','{$bookResult['book_title']}',CURDATE(),DATE_ADD(CURDATE(), INTERVAL 7 DAY))";
    $reserve=$con->query($sql5);
    echo "<script>alert('Book successfully reserved'); window.location.href='Search.php';</script>";
}


else if($result['membership']=='silver' && $row->num_rows<5){
    $sql4="UPDATE books SET reserved_status=1 WHERE isbn=$isbn";
    $run=$con->query($sql4);
    $sql5="INSERT INTO bookReservation(userid,bookid,bookname,reservedDate,returnDate) VALUES('$id','$isbn','{$bookResult['book_title']}',CURDATE(),DATE_ADD(CURDATE(), INTERVAL 7 DAY))";
    $reserve=$con->query($sql5);
    echo "<script>alert('Book successfully reserved'); window.location.href='Search.php';</script>";
}

else if($result['membership']=='gold' && $row->num_rows<7){
    $sql4="UPDATE books SET reserved_status=1 WHERE isbn=$isbn";
    $run=$con->query($sql4);
    $sql5="INSERT INTO bookReservation(userid,bookid,bookname,reservedDate,returnDate) VALUES('$id','$isbn','{$bookResult['book_title']}',CURDATE(),DATE_ADD(CURDATE(), INTERVAL 7 DAY))";
    $reserve=$con->query($sql5);
    echo "<script>alert('Book successfully reserved'); window.location.href='Search.php';</script>";
}

else{
    echo "<script>alert('Maximum number of books reserved'); window.location.href='Search.php';</script>";
}

$con->close();
?>