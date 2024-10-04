<?php
require_once "../dbcon.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $pnumber = $_POST['pnumber'];
    $age = $_POST['age'];
    $pw = $_POST['pw'];

    $sql = "INSERT INTO employee (name, age, pnumber, pw) VALUES ('$name', '$age', '$pnumber', '$pw')";

    if (mysqli_query($con, $sql)) {
        header("Location: index.php");  // Redirect back to employee management page
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>
