## Library Management System

1. Clone the repo
2. Establish the DB
3. Make sure the update the dbcon.php file with relevant credentials

`
<?php
$con=mysqli_connect("localhost","root","","lms");
if($con->connect_error){
    die("Failed to connect".$con->connect_error);
}
?>
`

4. Run the following command in db terminal to start 2000 onwards id numbers in emplyee table

`
ALTER TABLE staff AUTO_INCREMENT = 2000;
`
